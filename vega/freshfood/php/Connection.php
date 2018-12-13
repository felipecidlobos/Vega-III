<?php

Class Connection {

    private $servername = "localhost";
    private $username = "vegamodelo_skylabs";
    private $password = "skylabs2018";
    private $database = "vegamodelo_sk";

    public function getConnection() {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Conexión Fallida: " . $conn->connect_error);
        }
        echo "Conexión Realizada";
        return $conn;
    }
}
?>