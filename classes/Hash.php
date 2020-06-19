<?php 
    class Hash {
        public static function make($string, $salt = '') {
            return hash('sha256', $string . $salt);
        }

        public static function salt($length) {
            return bin2hex(random_bytes($length));
        }

    }
?>