<?php
    class Validate {
        private $_passed = false,
                $_errors = array(),
                $_db = null;
        
        public function __construct() {
            $this->_db = DB::getInstance();
        }

        public function check($source, $items = array()) {
            foreach($items as $item => $rules) {
                foreach($rules as $rule => $rule_value) {
                    
                    $value = $source[$item];

                    if($rule === 'required' && empty($value)) {
                        $this->addError("{item} is required");
                    }
                }
            }
        }
        
        private function addError($error) {
            $this->_errors[] = $error;
        }
    }

?>