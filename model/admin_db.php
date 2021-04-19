<?php

class ValidRegister {
    public static function acceptable_username($username) {
        $db = Database::getDB();
        $query = 'SELECT COUNT(`id`) FROM `administrators` WHERE `username` = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        if ($result > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function add_admin($username, $password) {
        $db = Database::getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'INSERT INTO `administrators` (username, password) VALUES (:username, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $hash);        
        $statement->execute();
        $statement->closeCursor();
    }

    public static function is_valid_admin_login($username, $password) {
        $db = Database::getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'SELECT password FROM `administrators` WHERE username = :username';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);      
        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();
        $hash = $row['password'];
        if (empty($hash)) {
            return FALSE;
        } else {
            return password_verify($password, $hash);
        }
    }
}