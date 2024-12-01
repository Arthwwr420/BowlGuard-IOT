<!DOCTYPE html>
<html><body>
<?php

/*
* Sabias que puedes poner un html en un pho? Waos
* Muestra los datos de la tabla asi todos bonitos
*/

$servername = "localhost";

$dbname = "gatitos";
$username = "GatoDato";
$password = "GatoDios";

//Conectarse a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

$sql = "SELECT id, sensor, location, weight, water, alarm, reading_time FROM comedero1 ORDER BY id DESC";

//Mostrar los nombres de las columnas
echo '<table cellspacing="5" cellpadding="5">
      <tr> 
        <td>ID</td> 
        <td>Sensor</td> 
        <td>Location</td> 
        <td>Weight</td> 
        <td>Water</td>
        <td>Alarm</td> 
        <td>Timestamp</td> 
      </tr>';

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id"];
        $row_sensor = $row["sensor"];
        $row_location = $row["location"];
        $row_weight = $row["weight"];
        $row_water = $row["water"]; 
        $row_alarm = $row["alarm"]; 
        $row_reading_time = $row["reading_time"];
          
            echo '<tr> 
                    <td>' . $row_id . '</td> 
                    <td>' . $row_sensor . '</td> 
                    <td>' . $row_location . '</td> 
                    <td>' . $row_weight . '</td> 
                    <td>' . $row_water . '</td>
                    <td>' . $row_alarm . '</td> 
                    <td>' . $row_reading_time . '</td> 
                  </tr>';
        }
        $result->free();
    }
    
    $conn->close();
    ?> 
    </table>
    </body>
    </html>