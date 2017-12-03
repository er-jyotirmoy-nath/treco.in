<?php

class smotik_db {

    private static $instance = null;
    
    private function __clone() {
        
    }

    private function __construct() {
        
    }
    
    public static function getInstance() {
         try {
            $conn = new PDO('mysql:host=localhost;dbname=smotik_db;charset=utf8', 'smotik_admin', 'Anjana@123');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if(!isset(self::$instance)){
                self::$instance = $conn;
            }
            return self::$instance;
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

}
