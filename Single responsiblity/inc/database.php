<?php
    class database{
        private static $instace;
        public function __construct() {
            if(!self::$instace){
                self::$instace;
                echo "Created New one<br>";
                return self:: $instace;
            }
            else{
                echo "Old one instace";
                return self::$instace;
            }
                
        }
    
 }
 
 
?>