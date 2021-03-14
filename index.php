<?php
    require('model/database.php');
    require('model/vehicle_db.php');

    $makeid = filter_input(INPUT_POST, 'makeid', FILTER_VALIDATE_INT);
    $typeid = filter_input(INPUT_POST, 'typeid', FILTER_VALIDATE_INT);
    $classid = filter_input(INPUT_POST, 'classid', FILTER_VALIDATE_INT);
    $sorter = filter_input(INPUT_POST, 'sorter', FILTER_SANITIZE_STRING);

    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
        if (!$action) {
            $action = 'list_vehicles';
        }
    }

    switch($action) {
        case "list_vehicles":
            $vehicles = get_vehicles();
            include('view/public.php');
            break;
        case "list_vehicles_select":
            $vehicles = get_vehicle_by_selector($sorter, $makeid, $typeid, $classid);
            include('view/public.php');
            break;
        default:
            $vehicles = get_vehicles();
            include('view/public.php');
    }
    
