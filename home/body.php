<?php
 
$user = 'GatoDato';
$password = 'GatoDios';
 
$database = 'gatitos';
 
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

$sql = "SELECT weight, location FROM comedero1 ORDER BY reading_time DESC LIMIT 1";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BowlGuard</title>
    <link rel="stylesheet" href="styles2.css">
    <link rel="stylesheet" href="styles3.css">
    <link rel="icon" href="images/justlogosmall.png" type="image/png">
    <script src="script.js" defer></script>
</head>

<body>

    <div id="loading-screen">
        <img src="./images/justlogogif-unscreen.gif" alt="Cargando..." class="spinner">
    </div>

    <div id="content">
        <header class="header">
            <div class="container">
                <div class="logo-group">
                    <img src="./images/justlogo.png" alt="logo" class="logo">
                    <img class="letters" src="./images/letraslogo.png" width="300px" height="80px" style="margin-left: -50px;" alt="BowlGuard">
                </div>
                <div class="btn-menu">
                    <label for="btn-menu" class="Configuration-menu">
                        <img src="https://cdn-icons-png.flaticon.com/512/6063/6063673.png" alt="configuracion" class="menu-icon">
                    </label>
                </div>
            </div>
        </header>
        
        
            <div class="buttons">
                <h5>Bowls:</h5>
                <nav>
                    <button onclick="LivingRoom()">Living Room</button>
                    <button onclick="Kitchen()">Kitchen</button>
                    <button onclick="FloorTwo()">Floor 2</button>
                    <button onclick="add()">+</button>
                </nav>
            </div>
            

        <input class="no" type="checkbox" id="btn-menu">
        <div class="container-menu">
            <div class="cont-menu">
                <nav>
                    <a href="#">About us</a>
                    <a href="#" id="personalization-link">Personalization</a>
                    <a href="https://www.youtube.com/watch?v=DeRoWmY6YIw">Kofi</a>
                    <a href="index.php">Cerrar Sesion</a>
                </nav>
                <label for="btn-menu" class="icon-out">X</label>
            </div>
        </div>

        <div class="personalization-options">
            <h3>Choose Mode:</h3>
            <label for="light-mode-checkbox" class="theme-option">
                light
                <input type="checkbox" id="light-mode-checkbox">
            </label>
            <label for="dark-mode-checkbox" class="theme-option">
                Dark
                <input type="checkbox" id="dark-mode-checkbox">
            </label>
        </div>
    </div>

    <div id="kitchen-section" class="bowldatta">
        <h5>Kitchen Bowl:</h5>
        <div style="display: flex;">
            <img src="./images/justlogo.png" width="600px" height="100%" alt="logo">
            <div id="colorlol1" style="display: flex;" class="ha">
            <?php 
                $rows=$result->fetch_assoc(); 
                $rows['weight'] = intval($rows['weight']);
            ?>
                <h3 id="kitchen-value"><?php echo $rows['weight'];?></h3> <h3 style="margin-left: -100px;">%</h3>
            </div>
        </div>

        <script>
            const value1 = document.querySelector("#kitchen-value")
            const valor1 = Number(value1.innerHTML)

            if (valor1 >= 99) {
                value1.style.color = "darkgreen";
            }
            if (valor1 < 99 && valor1 >= 60) {
                value1.style.color = "green";
            }
            if (valor1 < 60 && valor1 >= 30) {
                value1.style.color = "darkgoldenrod";
            }
            if (valor1 < 30 && valor1 >= 10) {
                value1.style.color = "crimson";
            }
            if (valor1 < 10 && valor1 >= 0) {
                value1.style.color = "";
            }

            const colorx1 = document.querySelector("#colorlol1")
            if (valor1 >= 99) {
                colorx1.style.color = "darkgreen";
            }
            if (valor1 < 99 && valor1 >= 60) {
                colorx1.style.color = "green";
            }
            if (valor1 < 60 && valor1 >= 30) {
                colorx1.style.color = "darkgoldenrod";
            }
            if (valor1 < 30 && valor1 >= 10) {
                colorx1.style.color = "crimson";
            }
            if (valor1 < 10 && valor1 >= 0) {
                colorx1.style.color = "";
            }

        </script>
    </div>
    
    <div id="living-room-section" class="bowldatta">
        <h5>Living Room Bowl:</h5>
        <div style="display: flex;">
            <img src="./images/justlogo.png" width="600px" height="100%" alt="logo">
            <div id="colorlol2" style="display: flex;" class="ha">
                <h3 id="living-room-value">27</h3> <h3 style="margin-left: -100px;">%</h3>
            </div>
        </div>

        <script>
            const value2 = document.querySelector("#living-room-value")
            const valor2 = Number(value2.innerHTML)

            if (valor2 >= 99) {
                value2.style.color = "darkgreen";
            }
            if (valor2 < 99 && valor2 >= 60) {
                value2.style.color = "green";
            }
            if (valor2 < 60 && valor2 >= 30) {
                value2.style.color = "darkgoldenrod";
            }
            if (valor2 < 30 && valor2 >= 10) {
                value2.style.color = "crimson";
            }
            if (valor2 < 10 && valor2 >= 0) {
                value2.style.color = "";
            }

            const colorx2 = document.querySelector("#colorlol2")
            if (valor2 >= 99) {
                colorx2.style.color = "darkgreen";
            }
            if (valor2 < 99 && valor2 >= 60) {
                colorx2.style.color = "green";
            }
            if (valor2 < 60 && valor2 >= 30) {
                colorx2.style.color = "darkgoldenrod";
            }
            if (valor2 < 30 && valor2 >= 10) {
                colorx2.style.color = "crimson";
            }
            if (valor2 < 10 && valor2 >= 0) {
                colorx2.style.color = "";
            }

        </script>
    </div>
    
    <div id="floor2-section" class="bowldatta">
        <h5>Floor 2 Bowl:</h5>
        <div style="display: flex;">
            <img src="./images/justlogo.png" width="600px" height="100%" alt="logo">
            <div id="colorlol" style="display: flex;" class="ha">
                <h3 id="floor2-value">50</h3> <h3 style="margin-left: -100px;">%</h3>
            </div>
        </div>
        <script>
            const value = document.querySelector("#floor2-value")
            const valor = Number(value.innerHTML)

            if (valor >= 99) {
                value.style.color = "darkgreen";
            }
            if (valor < 99 && valor >= 60) {
                value.style.color = "green";
            }
            if (valor < 60 && valor >= 30) {
                value.style.color = "darkgoldenrod";
            }
            if (valor < 30 && valor >= 10) {
                value.style.color = "crimson";
            }
            if (valor < 30 && valor >= 10) {
                value.style.color = "";
            }

            const colorx = document.querySelector("#colorlol")
            if (valor >= 99) {
                colorx.style.color = "darkgreen";
            }
            if (valor < 99 && valor >= 60) {
                colorx.style.color = "green";
            }
            if (valor < 60 && valor >= 30) {
                colorx.style.color = "darkgoldenrod";
            }
            if (valor < 30 && valor >= 10) {
                colorx.style.color = "crimson";
            }
            if (valor < 30 && valor >= 10) {
                colorx.style.color = "";
            }

        </script>
    </div>

    <script>
        window.onload = function() {
            setTimeout(() => {document.getElementById("loading-screen").style.display = "none";}, 2000)
        }
    </script>

<script>
    function showSection(sectionId) {
        // Ocultar todas las secciones
        const sections = document.querySelectorAll('.bowldatta');
        sections.forEach(section => section.style.display = 'none');
        
        // Mostrar la sección seleccionada
        const selectedSection = document.getElementById(sectionId);
        if (selectedSection) {
            selectedSection.style.display = 'block';
        }
    }

    function LivingRoom() {
        showSection('living-room-section');
    }

    function Kitchen() {
        showSection('kitchen-section');
    }

    function FloorTwo() {
        showSection('floor2-section');
    }

    function add() {
        alert("Add functionality not implemented yet!");
    }

    // Ocultar todas las secciones al cargar la página
    window.onload = function() {
        setTimeout(() => { document.getElementById("loading-screen").style.display = "none"; }, 2000);

        const sections = document.querySelectorAll('.bowldatta');
        sections.forEach(section => section.style.display = 'none');
    }
</script>

    
</body>
</html>