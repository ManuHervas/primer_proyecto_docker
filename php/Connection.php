<?php 

    class Connection{

        private static $conn = null;

        public static function getConnection(): PDO {
            if (self::$conn == null) {                
                self::$conn = new PDO("mysql:host=localhost;dbname=users_docker_db", 'root', 'root');
                
                //self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$conn;
        }

    }


?>