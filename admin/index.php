<?php
    require('../model/database.php');
    require('../model/vehicle_db.php');
    require('../model/admin_db.php');

    $makeid = filter_input(INPUT_POST, 'makeid', FILTER_VALIDATE_INT);
    $typeid = filter_input(INPUT_POST, 'typeid', FILTER_VALIDATE_INT);
    $classid = filter_input(INPUT_POST, 'classid', FILTER_VALIDATE_INT);
    $sorter = filter_input(INPUT_POST, 'sorter', FILTER_SANITIZE_STRING);
    $new_year = filter_input(INPUT_POST, 'year', FILTER_SANITIZE_STRING);
    $new_model = filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
    $new_price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
    $new_makeID = filter_input(INPUT_POST, 'makeid', FILTER_VALIDATE_INT);
    $new_typeID = filter_input(INPUT_POST, 'typeid', FILTER_VALIDATE_INT);
    $new_classID = filter_input(INPUT_POST, 'classid', FILTER_VALIDATE_INT);
    $new_make = filter_input(INPUT_POST, 'make', FILTER_SANITIZE_STRING);
    $new_type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
    $new_class = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);


    $vehicleID = filter_input(INPUT_POST, 'delete_vehicle', FILTER_VALIDATE_INT);
    if (!$vehicleID) {
        $vehicleID = filter_input(INPUT_GET, 'delete_vehicle', FILTER_VALIDATE_INT);
    }
    $makeID = filter_input(INPUT_POST, 'delete_make', FILTER_VALIDATE_INT);
    $typeID = filter_input(INPUT_POST, 'delete_type', FILTER_VALIDATE_INT);
    $classID = filter_input(INPUT_POST, 'delete_class', FILTER_VALIDATE_INT);

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'list_vehicles';
        }
    }

    switch($action) {
        case "list_vehicles":
            $vehicles = VehicleDB::get_vehicles();
            include('view/admin.php');
            break;
        case "list_vehicles_select":
            $vehicles = VehicleDB::get_vehicle_by_selector($sorter, $makeid, $typeid, $classid);
            include('view/admin.php');
            break;
        case "delete_vehicle":
            VehicleDB::delete_vehicle($vehicleID);
            header("Location: .?action=list_vehicles");
            break;
        case "add_vehicle":
            VehicleDB::add_vehicle($new_year, $new_model, $new_price, $new_typeID, $new_classID, $new_makeID);
            header("Location: .?action=list_vehicles");
            break;
        case "list_makes":
            $makes = VehicleDB::get_Makes();
            include('view/make.php');
            break;
        case "delete_make":
            VehicleDB::delete_make($makeID);
            header("Location: .?action=list_makes");
            break;
        case "add_make":
            VehicleDB::add_make($new_make);
            header("Location: .?action=list_makes");
            break;
        case "list_types":
            $types = VehicleDB::get_Type();
            include('view/type.php');
            break;
        case "delete_type":
            VehicleDB::delete_type($typeID);
            header("Location: .?action=list_types");
            break;
        case "add_type":
            VehicleDB::add_type($new_type);
            header("Location: .?action=list_types");
            break;
        case "list_classes":
            $classes = VehicleDB::get_Classes();
            include('view/class.php');
            break;
        case "delete_class":
            VehicleDB::delete_class($classID);
            header("Location: .?action=list_classes");
            break;
        case "add_class":
            VehicleDB::add_class($new_class);
            header("Location: .?action=list_classes");
            break;
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
                include('view/login.php');
            }
            break;
        case "register":
            ValidRegister::add_admin($username, $password);
            $_SESSION['is_valid_admin'] = true;
            header("Location: ..?action=list_vehicles");
            $break;
        default:
            $vehicles = VehicleDB::get_vehicles();
            $makes = VehicleDB::get_Makes();
            $types = VehicleDB::get_Type();
            $classes = VehicleDB::get_Classes();
            break;
    }
    
