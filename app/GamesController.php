<?php

/**
 * GamesController class
 */
class GamesController extends Controller {

    /**
     * connects to sql database, converts it to json
     *
     * @return string
     */
    public function render(): string
    {
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