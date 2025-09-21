<?php
    if (!defined("_VALID_PHP")) {
        die ('Direct access to this location is not allowed.');
    }

    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/misc/htmlpurifier/HTMLPurifier.standalone.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/template/TemplateManager.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/misc/phpmailer/PHPMailerAutoload.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/system/SecurityManager.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/user/validation/ValidationManager.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/module/ModuleManager.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/forums/ForumManager.php");
    require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/misc/Utils.php");

    class SystemManager {

        private $securityManager;
        private $validationManager;
        private $forumManager;
        private $db;

        public function configure() {
            $this->db = Registry::get("database");
            $this->securityManager = new SecurityManager();
            $this->validationManager = new ValidationManager();
        
            if (defined('FORUMS')) {
                $this->configureForums();
            }
        }

        public function configureForums() {
            $this->forumManager = new ForumManager();
            $this->forumManager->configure();
        }

        public function displayStruct($name) {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/structure/addons/" . $name . ".php");
        }

        public function sendEmail($user, $body, $email = "") {
            if ($email == "") {
                $email = $user->getEmail();
            }

            try {
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->Host = MAIL_HOST;
                $mail->SMTPAuth = true;
                $mail->Username = EMAIL;
                $mail->Password = EMAIL_PASS;
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->From = EMAIL;
                $mail->FromName = SITE_NAME . ' Account Support';
                $mail->addAddress($email, $user->getUsername());
                $mail->isHTML(true);
                $mail->Subject = SITE_NAME . ' Account Support';
                $mail->Body = $body;
                $mail->send();
        
            } catch (phpmailerException $e) {
                echo "Error m - " . $e->errorMessage();
            } catch (Exception $e) {
                echo "Error exception - " . $e->getMessage();
            }
        }

        public function log($message, $type = 0) {
            $statement = $this->db->prepare("INSERT INTO sys_logs (message, log_type, IP_ADDRESS) VALUES(?, ?, ?);");
            $statement->execute(array($message, $type, $_SERVER['REMOTE_ADDR']));
        }

        public function getPlayersOnline() {
            $count = 0;
            $worlds = $this->db->query("SELECT * FROM worlds");
        
            while ($world = $worlds->fetch(PDO::FETCH_ASSOC)) {
                $count += $world['players'] < 0 ? 0 : $world['players'];
            }

            return $count;
        }

        public function getValidationManager() {
            return $this->validationManager;
        }

        public function getSecurityManager() {
            return $this->securityManager;
        }

        public function getForumManager() {
            return $this->forumManager;
        }
    }
?>