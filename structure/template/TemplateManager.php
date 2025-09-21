<?php
    if (!defined("_VALID_PHP")) {
        die ('Direct access to this location is not allowed.');
    }

    require_once("Template.php");

    class TemplateManager {

        private static $TEMPLATES = array();

        static function init() {
            foreach (glob($_SERVER['DOCUMENT_ROOT'] . "/structure/design/templates/*", GLOB_ONLYDIR) as $folder) {
                foreach (glob($folder . "/*.html") as $file) {
                    self::$TEMPLATES[pathinfo($file, PATHINFO_FILENAME)] = file_get_contents($file);
                }
            }
        }

        public static function load($templateName) {
            if (array_key_exists($templateName, self::$TEMPLATES)) {
                return new Template(self::$TEMPLATES[$templateName]);
            }
            
            return false;
        }

        public static function displayAd($width, $height) {
            $template = self::load("Advertisment");
            $template->insert("width", $width);
            $template->insert("height", $height);
            $template->display();
        }

    }

    TemplateManager::init();
?>