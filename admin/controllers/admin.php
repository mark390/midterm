<?php
    require('../../model/database.php');
    require('../../model/vehicle_db.php');
    require('../../model/admin_db.php');
    
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    if (!$username) {
        $username = filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);
    }
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if (!$password) {
        $password = filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);
    }
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
    if (!$confirm_password) {
        $username = filter_input(INPUT_GET, 'confirm_password', FILTER_SANITIZE_STRING);
    }
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'show_login';
        }
    }

    switch($action) {
            case "logout":
                $_SESSION = array();
                session_destroy();
                $login_message = 'You have been logged out!';
                include('../view/login.php');
                break;
            case "show_register":
                include('../view/register.php');
                break;
            case "show_login":
                include('../view/login.php');
                break;
            case "login":
                
                if (ValidRegister::is_valid_admin_login($username, $password)) {
                    $_SESSION['is_valid_admin'] = true;
                    header("Location: ..?action=list_vehicles");
                } else {
                    $login_message = 'Please log in';
                    include('../view/login.php');
                }
                break;
            case "register":
                ValidRegister::add_admin($username, $password);
                $_SESSION['is_valid_admin'] = true;
                header("Location: ..?action=list_vehicles");
                $break;
        }