<?php

    /*
    * Hecho por Arturo Balboa al mismo tiempo que 
    * toma una tacita de te para mimir 
    *
    *  Basicamente esto se encarga de que el legendario ESP 32 
    * pueda conectarse a nuestra super bonita base de datos
    * 
    * :3
    *
    */

    $servername = "localhost"; //Posiblemente sea mejor cambiarlo a la IP local, pero eso lo vere luego

    $dbname = "gatitos";
    $username = "GatoDato";
    $password = "GatoDios"; //Nota para el futuro: ´Ponganle una contraseña de verdad en cuanto se pueda


    $api_key_value = "Keso24lavenganzadelalactosa"; //Esto me lo invente nomas pos hay q ponerlo en el ESP
    $api_key = $sensor = $location = $weight = $water = $alarm = ""; //variables para las columnas de la base

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $api_key = test_input($_POST["api_key"]);

        if($api_key == $api_key_value) {
            $sensor = test_input($_POST["sensor"]);
            $location = test_input($_POST["location"]);
            $weight = test_input($_POST["weight"]);
            $water = test_input($_POST["water"]);
            $alarm = test_input($_POST["alarm"]);

            //Crear conexion con el servidor
            $conn = new mysqli($servername, $username, $password, $dbname);

            if($conn->connect_error) {
                die("Connection terminated " . $conn->connect_error);
            }

            //Insertar datos leidos a la tabla
            $sql = "INSERT INTO comedero1 (sensor, location, weight, water, alarm) 
                VALUES ('" . $sensor . "', '" . $location . "', '" . $weight . "', '" . $water . "' , '" . $alarm . "' )"; //QUE CLASE SE SINTAX ES ESTO??
            
            if ($conn->query($sql) === TRUE) {
                echo "Valores leidos y guardados con exito";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
            $conn->close();
            
        }else{
            echo "Baboso esa llave de API no es >:(";
        }
    }else{
        echo "No hay datos en HTTP POST";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
