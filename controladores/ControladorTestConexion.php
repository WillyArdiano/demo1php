<?php

    $hostname = "localhost";
    $username = "willy";
    $password = "Willy@db99";
    $nombredb = "mysql";

    $connexion = new mysqli($hostname, $username, $password,$nombredb);
    
    
    if ($connexion->connect_error) {
        die("Connection failed: " . $connexion->connect_error);
    }else{
        echo "Connected successfully<br>";
    }   
    
    
    $query = "SELECT User FROM user";
    $result = $connexion->query($query);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "Usuario: " . $row["User"]."<br>";
        }
    } else {
        echo "0 results";
    }
    $connexion->close();

?>