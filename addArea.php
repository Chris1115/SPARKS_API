<?php
require_once('conn.php');
require_once('helper.php');

$id = getId();
$place_id = $_POST['place_id'];
$name = $_POST['name'];

$query = "INSERT INTO area (id, place_id, area_name) VALUES ('$id', '$place_id', '$name')";

$response = array(
    "id"=>$id,
    "place_id"=>$place_id,
    "name"=>$name
);


if(mysqli_query($db_connect, $query))
{
    header('Content-Type: text/json');
    echo json_encode(array('Details' => $response, 'Message' => 'Success'));
}
else
{
    echo json_encode(array('Details' => mysqli_error($db_connect), 'Message' => 'Failed'));
}

?>