<?php

$conn = mysqli_connect("localhost", "root", "", "games");
if ($conn === false) {
    die("unable to connect to database");
}
$sql = "select * from games";
$result = mysqli_query($conn, $sql);
$dataArray = array();
while($row = mysqli_fetch_assoc($result)){
    $dataArray[] = $row;
}
echo json_encode($dataArray);
