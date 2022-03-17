<?php

function find_all_inventory() {
    global $db;

    $sql = "SELECT * FROM inventory ";
    $sql .= "ORDER BY id ASC";
    //echo $sql
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_item_by_id($id) {
    global $db;

    $sql = "SELECT * FROM inventory ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $item = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $item; // returns an assoc. array
  }

function insert_subject($id, $name, $gender, $type, $color, $price) {
    global $db;

    $sql = "INSERT INTO  inventory";
$sql .= "(name, visible, gender, type, color, price)";
$sql .= "VALUES (";
$sql .= "'" . $name . "',";
$sql .= "'" . $visible . "',";
$sql .= "'" . $gender . "',";
$sql .= "'" . $type . "',";
$sql .= "'" . $color . "',";
$sql .= "'" . $price . "'";
$sql .= ")";
$result = mysqli_query($db, $sql);
// For INSERT statements, $ result is true/false

if($result) {
   return true;
} else {
    //INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}
}

  function find_all_pages() {
    global $db;

    $sql = "SELECT * FROM pages ";
    $sql .= "ORDER BY    position ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
  }


?>