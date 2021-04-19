<?php

class VehicleDB {

    public function __construct() {}

    public static function get_vehicles() {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        }
    
    public static function get_vehicle_by_selector($sorter, $makeid, $typeid, $classid) {
        if ($sorter == 'Year' && $makeid && $typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID
            AND V.class_id = :classID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && !$makeid && !$typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && !$typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && $makeid && !$typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && $makeid && $typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && $makeid && !$typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && $makeid && $typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && !$makeid && $typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID AND V.class_id = :classID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && $typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID AND V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && $typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && !$makeid && $typeid && !$classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && $makeid && !$typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && $makeid && !$typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.class_id = :classID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && !$makeid && !$typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.class_id = :classID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && !$typeid && $classid) {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } else {
            $db = Database::getDB();
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price, V.vehicle_id FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID
            AND V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        }
}
    
    public static function get_Makes() {
            $db = Database::getDB();
            $query = 'SELECT * FROM make';
            $statement = $db->prepare($query);
            $statement->execute();
            $makes = $statement->fetchAll();
            $statement->closeCursor();
            return $makes;
        }
    public static function get_Type() {
            $db = Database::getDB();
            $query = 'SELECT * FROM type';
            $statement = $db->prepare($query);    
            $statement->execute();
            $types = $statement->fetchAll();
            $statement->closeCursor();
            return $types;
        }

    public static function get_Classes() {
            $db = Database::getDB();
            $query = 'SELECT * FROM class';
            $statement = $db->prepare($query);    
            $statement->execute();
            $classes = $statement->fetchAll();
            $statement->closeCursor();
            return $classes;
        }

    public static function delete_vehicle($vehicleID) {
        $db = Database::getDB();
        $query = 'DELETE FROM vehicles WHERE vehicle_id = :vehicleID';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicleID', $vehicleID);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function delete_make($makeID) {
        $db = Database::getDB();
        $query = 'DELETE FROM make WHERE ID = :makeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':makeID', $makeID);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function delete_type($typeID) {
        $db = Database::getDB();
        $query = 'DELETE FROM type WHERE ID = :typeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':typeID', $typeID);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function delete_class($classID) {
        $db = Database::getDB();
        $query = 'DELETE FROM class WHERE ID = :classID';
        $statement = $db->prepare($query);
        $statement->bindValue(':classID', $classID);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function add_vehicle($new_year, $new_model, $new_price, $new_typeID, $new_classID, $new_makeID) {
        $db = Database::getDB();
        $query = 'INSERT INTO vehicles (year, model, price, type_id, class_id, make_id) VALUES (:year, :model, :price, :type_id, :class_id, :make_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':year', $new_year);
        $statement->bindValue(':model', $new_model);
        $statement->bindValue(':price', $new_price);
        $statement->bindValue(':type_id', $new_typeID);
        $statement->bindValue(':class_id', $new_classID);
        $statement->bindValue(':make_id', $new_makeID);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function add_make($new_make) {
        $db = Database::getDB();
        $query = 'INSERT INTO make (Make) VALUES (:new)';
        $statement = $db->prepare($query);
        $statement->bindValue(':new', $new_make);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function add_type($new_type) {
        $db = Database::getDB();
        $query = 'INSERT INTO type (Type) VALUES (:new)';
        $statement = $db->prepare($query);
        $statement->bindValue(':new', $new_type);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function add_class($new_class) {
        $db = Database::getDB();
        $query = 'INSERT INTO class (Class) VALUES (:new)';
        $statement = $db->prepare($query);
        $statement->bindValue(':new', $new_class);
        $statement->execute();
        $statement->closeCursor();
    }
}