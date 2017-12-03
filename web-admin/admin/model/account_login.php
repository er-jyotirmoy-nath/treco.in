<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of account_login
 *
 * @author jyoti
 */
session_start();
require_once $_SERVER["DOCUMENT_ROOT"] . '/web-admin/admin/connections/smotik_con.php';

class account_login {

    //put your code here
    private function getToken($username, $password) {
        $bdd = smotik_db::getInstance();
        //$password = md5($password);
        $salt1 = "%$&$";
        $salt2 = "@&!*^";
        $date = strtotime('now');
        $token = md5($salt1 . sha1($username) . sha1($password) . sha1($date) . $salt2);
        $sql = "UPDATE `users` SET `token`=:token WHERE `username` = :username AND `password` = :password";

        $query = $bdd->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':token', $token);
        $query->bindParam(':password', $password);
        $query->execute();
        return $token;
    }

    public function checkUserStatus($username, $password) {
        $bdd = smotik_db::getInstance();
        $sql = "SELECT  `status` FROM `users` WHERE `username` = :username AND `password` = :password";
        $query = $bdd->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        return $query->fetchColumn();
    }

    public function checkUserAccess($username, $password) {
        $bdd = smotik_db::getInstance();
        $sql = "SELECT  `access_level` FROM `users` WHERE `username` = :username AND `password` = :password";
        $query = $bdd->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        return $query->fetchColumn();
    }

    public function userLogin($username, $password) {
        $temp = array();
        $bdd = smotik_db::getInstance();
        $password = md5($password);
        $sql = "SELECT COUNT(*) FROM `users` "
                . "WHERE `username` = :username AND `password` = :password";
        $query = $bdd->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->execute();
        if ($query->fetchColumn() > 0) {
            if ($this->checkUserStatus($username, $password) == "1") {
                $_SESSION["token"] = $this->getToken($username, $password);
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $password;

                $token = $_SESSION["token"];
                $temp["error"] = "false";
                $temp["token"] = $token;
                $temp["status"] = "ok";
                echo json_encode($temp);
            } else {
                $temp["error"] = "true";
                $temp["status"] = "inactive";
                echo json_encode($temp);
            }
        } else {
            $temp["error"] = "true";
            $temp["status"] = "invalid";
            echo json_encode($temp);
        }
    }

    public function userRegister($username, $password, $accesslevel, $status) {
        $bdd = smotik_db::getInstance();
        $username = $username;
        $password = md5($password);
        $salt1 = "%$&$";
        $salt2 = "@&!*^";
        $temp = array();
        $token = md5($salt1 . sha1($username) . sha1($password) . $salt2);
        try {
            $sql = "INSERT INTO `users`(`username`, `password`, `token`, `access_level`, `status`)"
                    . " VALUES (:username,:password,:token,:accesslevel,:status)";
            $query = $bdd->prepare($sql);
            $query->bindparam(':username', $username);
            $query->bindparam(':password', $password);
            $query->bindparam(':token', $token);
            $query->bindparam(':accesslevel', $accesslevel);
            $query->bindparam(':status', $status);
            if ($query->execute()) {
                $temp["error"] = "false";
                $temp["status"] = "success";
                echo json_encode($temp);
            } else {
                $temp["error"] = "true";
                $temp["status"] = "failure";
                echo json_encode($temp);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function checkUserLogin() {
        $bdd = smotik_db::getInstance();
        $temp = array();
        if (isset($_SESSION["username"]) && isset($_SESSION["password"]) && isset($_SESSION["token"])) {
            $username = $_SESSION["username"];
            $password = $_SESSION["password"];
            $token = $_SESSION["token"];
            $sql = "SELECT COUNT(*) FROM `users` WHERE username = :username AND password = :password AND token = :token";
            $query = $bdd->prepare($sql);
            $query->bindparam(':username', $username);
            $query->bindparam(':password', $password);
            $query->bindparam(':token', $token);
            $query->execute();
            if ($query->fetchColumn() > 0) {
                $temp["error"] = "false";
                $temp["status"] = "success";
                
                echo json_encode($temp);
            } else {
                $temp["error"] = "true";
                $temp["status"] = "failure";

                echo json_encode($temp);
            }
        } else {
            $temp["error"] = "true";
            $temp["status"] = "failure";

            echo json_encode($temp);
        }
    }

    public function logoutUser() {
        $temp = array();
        //session_destroy();
        //session_start();
        session_unset();
        session_destroy();
        session_write_close();
        $temp["error"] = "false";
        $temp["status"] = "logout";
        echo json_encode($temp);
    }

}

$new_account_user = new account_login();
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["username"]) && isset($data["password"])) {
    $username = $data["username"];
    $password = $data["password"];
    //$new_account_user->userRegister($username, $password, 'admin', '1');
    $new_account_user->userLogin($username, $password);
}

if (isset($data["check"]) && $data["check"] == "check") {
    $new_account_user->checkUserLogin();
}

if (isset($data["check"]) && $data["check"] == "logout") {
    $new_account_user->logoutUser();
}