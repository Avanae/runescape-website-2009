<?php
    define("_VALID_PHP", true);
    define("NO_STRUCT", true);

    include_once($_SERVER['DOCUMENT_ROOT'] . "/structure/init.php");

    class ActionInfo {
        protected $action;
        protected $location;

        public function __construct($action, $location) {
            $this->action = $action;
            $this->location = $location;
        }

        public function getAction() {
            return $this->action;
        }

        public function getLocation() {
            return $this->location;
        }
    }

    class Action {    
        public function handle($cleaned) {
        }

        public function checkLogin() {
            $user = Registry::get("user");
        
            if (!$user->isLoggedIn()) {
                echo "Error - Not logged in.";
                exit;
            }
        }
    }

    class ActionHandler {
        static $ACTIONS = array();

        static function init() {
            foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/structure/actions", GLOB_ONLYDIR) as $folder) {
                foreach (glob($folder . "/*.action.php") as $file) {
                    $fileName = str_replace(".action", "", pathinfo($file, PATHINFO_FILENAME));
                    self::$ACTIONS[$fileName] = new ActionInfo($fileName, $file);
                }
            }
        }

        static function handle($command) {
            if (!Registry::get("system")->getSecurityManager()->securityCheck("ACTION_HANDLER")) {
                echo "You have sent too many requests in a short amount of time.";
                return;
            }
        
            $actionInfo = self::get($command);
        
            if (!$actionInfo) {
                echo "No command found " . $command;
                return;
            }
        
            $db = Registry::get("database");
            
            require_once($actionInfo->getLocation());
        
            $className = $actionInfo->getAction();
            $action = new $className();
            $cleaned = array();
        
            foreach (array_keys($_POST) as $key) {
                $cleaned[$key] = $db->escape($_POST[$key]);
            }
       
            $action->handle($cleaned);
        }

        public static function get($action) {
            return self::exists($action) ? self::$ACTIONS[$action] : false;
        }

        public static function exists($action) {
            return array_key_exists($action, self::$ACTIONS);
        }
    }

    ActionHandler::init();

    if (isset($_GET['action'])) {
        ActionHandler::handle($_GET['action']);
    }
?>