<?php

class database {
    public static function toJSON(){
        $conn = mysqli_connect(URL, "root", "", "games");
        if ($conn === false) {
            die("unable to connect to database");
        }
        $sql = "select * from games";
        $result = mysqli_query($conn, $sql);
        $dataArray = array();
        while($row = mysqli_fetch_assoc($result)){
            $dataArray[] = $row;
        }
        return json_encode($dataArray);
    }
}