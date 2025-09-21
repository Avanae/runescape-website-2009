<?php
    class SecurityManager {
        private static $SETTINGS;
        
        public static $IP;

        public function __construct() {
            self::$IP = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "127.0.0.1";
            
            self::$SETTINGS = array(
                new SecuritySetting(1, "SITE_LOAD", 20, "1 MINUTE"),
                new SecuritySetting(2, "ACTION_HANDLER", 15, "1 MINUTE"),
                new SecuritySetting(3, "LOGIN_ATTEMPT", 7, "10 MINUTE"),
                new SecuritySetting(4, "EMAIL", 5, "1 MINUTE"),
                new SecuritySetting(5, "CHANGE_PASSWORD", 5, "20 MINUTE"),
                new SecuritySetting(6, "REGISTRATIONS", 15, "30 MINUTE"),
                new SecuritySetting(7, "FORUM_POST", 5, "30 SECOND"),
                new SecuritySetting(8, "MESSAGE_CENTRE", 10, "1 MINUTE")
            );
        }

        public function securityCheck($type) {
            $setting = $this->getSetting($type);
        
            if ($setting) {
                if ($setting->validateRequest()) {
                    return true;
                }
            }
        
            return false;
        }

        private function getSetting($type) {
            foreach (self::$SETTINGS as $setting) {
                if (strcasecmp($setting->getName(), $type) == 0) {
                    return $setting;
                }
            }
        
            return false;
        }
    }

    class SecuritySetting { 
        private $id, $name, $maxAttempts, $timeframe;
            
        public function __construct($id, $name, $maxAttempts, $timeframe) {
            $this->id = $id;
            $this->name = $name;
            $this->maxAttempts = $maxAttempts;
            $this->timeframe = $timeframe;
        }

         public function validateRequest() {
            $connections = $this->fetchConnections();
        
            if ($connections < $this->maxAttempts) {
                $this->logConnection();
            
                return true;
            }
        
            return false;
        }       

        public function clean() {}

        private function logConnection() { 
            Registry::get("database")->query("INSERT INTO security (ip, type, timestamp) VALUES('" . SecurityManager::$IP . "', " . $this->id . ", NOW());") or die(Registry::get("database")->getError());
        }

        private function fetchConnections() {
            $query = Registry::get("database")->query("SELECT * FROM security WHERE type=" . $this->id . " AND ip='" . SecurityManager::$IP . "' AND timestamp > (NOW() - INTERVAL " . $this->timeframe . ")") or die(Registry::get("database")->getError());
        
            if ($query) {
                return $query->rowCount();
            }
                
            return 0;
        }

        public function getName() {
            return $this->name;
        }
    }
?>