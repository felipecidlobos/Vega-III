<?php

Class Connection {

    public function getConnection() {
        $servername = "localhost";
        $username = ""; //"vegamodelo_skylabs";
        $password = ""; //"skylabs2018";
        $database = "vegamodelo_sk";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Conexión Fallida: " . $conn->connect_error);
        }
        //echo "Conexión Realizada";
        return $conn;
    }
}
?>