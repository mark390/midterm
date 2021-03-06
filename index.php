<?php

    $lifetime = 60 * 60 * 24 * 30;
    session_set_cookie_params($lifetime, '/');
    session_start();

    require('model/database.php');
    require('model/vehicle_db.php');

    $makeid = filter_input(INPUT_POST, 'makeid', FILTER_VALIDATE_INT);
    $typeid = filter_input(INPUT_POST, 'typeid', FILTER_VALIDATE_INT);
    $classid = filter_input(INPUT_POST, 'classid', FILTER_VALIDATE_INT);
    $sorter = filter_input(INPUT_POST, 'sorter', FILTER_SANITIZE_STRING);
    $firstname = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'list_vehicles';
        }
    }

    if ($firstname) {
        $_SESSION['userid'] = $firstname;
    }

    switch($action) {
        case "list_vehicles":
            $vehicles = VehicleDB::get_vehicles();
            include('view/public.php');
            break;
        case "list_vehicles_select":
            $vehicles = VehicleDB::get_vehicle_by_selector($sorter, $makeid, $typeid, $classid);
            include('view/public.php');
            break;
        case "register";
            if ($firstname) {
                include('view/thankyou.php');
                break;
            } else {
                include('view/register.php');
                break;
            }
        case "signout";
            include('view/signout.php');
            break;
        default:
            $vehicles = VehicleDB::get_vehicles();
            include('view/public.php');
    }
    
