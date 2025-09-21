<?php
    class Template {
        private $template;
        private $originalTemplate;
        
        public function __construct($templateContents = "") {
            $this->template = $this->originalTemplate = $templateContents;
        }

        public function insert($identifier, $content) {
            $this->template = str_replace("[$" . $identifier . "]", $content, $this->template);
        }

        function removeBetween($beginning, $end) {
            $this->replaceBetween($beginning, $end, "");
        }

        function replaceBetween($beginning, $end, $replace) {
            $beginningPos = strpos($this->template, $beginning);
            $endPos = strpos($this->template, $end);
        
            if ($beginningPos === false || $endPos === false) {
                return false;
            }
        
            $textToDelete = substr($this->template, $beginningPos, ($endPos + strlen($end)) - $beginningPos);
            
            $this->template = str_replace($textToDelete, $replace, $this->template);
            return true;
        }

        function removeAll($beginning, $end) {
            while ($this->replaceBetween($beginning, $end, "")) {}
        }

        public function append($content) {
            $this->template .= $content;
        }

        public function display($identifiers = false) {
            if (!$identifiers) {
                $this->removeAll("[$", "]");
            }

            echo $this->template;
        }

        public function reset() {
            $this->template = $this->originalTemplate;
        }

        public function getContents() {
            return $this->template;
        }
    }
?>