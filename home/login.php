<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpword = "";
    $dbname = "gatitos";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpword, $dbname);

    if(!$conn){
        die("No connection");
    }

    $name = $_POST["Username:"];
    $pass = $_POST["Password"];

    $query = mysqli_query($conn, "SELECT * FROM login WHERE username = '" .$name. "' and password = '" .$pass. "'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        header("Location: body.php");
        echo "Bienvenido " .$name;
    }else{
        header("Location: index.php");
        echo "INCORRECT USERNAME OF PASSWORD";
    }

?>