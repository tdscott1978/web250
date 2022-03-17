<?php

require_once('../../../private/initialize.php');

if(is_post_request()) {
// Handle form values sent by new.php


$name = $_POST['name'] ?? '';
$visible = $_POST['visible'] ?? '';
$gender = $_POST['gender'] ?? '';
$type = $_POST['type'] ?? '';
$color = $_POST['color'] ?? '';
$price = $_POST['price'] ?? '';


$result = insert_subject($name, $visible, $gender,$type, $color, $price);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/clothing/inventory/show.php?id=' . $new_id));

} else {
    redirect_to(url_for('/clothing/inventory/new.php'));
}

?>
