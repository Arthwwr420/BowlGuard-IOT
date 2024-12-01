<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="styles1.css">
        <link rel="stylesheet" href="styles3.css">
        <link rel="icon" href="images/justlogosmall.png" type="image/j">
        <script src="script.js" defer></script>
    </head>
    
    <body>
        <div id="loading-screen">
            <img src="./images/justlogogif-unscreen.gif" alt="Cargando..." class="spinner">
        </div>
        
        <section class="form-login">
            <form method="post" action="login.php">
                <center><img src="images/logo completo still nb.png" alt="logo" width="260px" ></center>
                <h5>Login</h5>
                <h6>User Name:</h6>
                <input class="controls" type="text" name="Username:" value="" placeholder="Example: K1rian_">
                <h6>Password:</h6>
                <input class="controls" type="password" name="Password" value="" placeholder="* * * * *">
                <input class="buttons" type="submit" name="Login"></a>
                
                <p><a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5kw_dCpXSnuS-NPaXE3fIHXrAiEzKG5bFBfBs7Zm9uQ1wQ_r-f6qv5Ew&s=10">¿Olvidaste tu contraseña?</a></p>
            </form>
        </section>
        
        <script>
            window.onload = function() {
                document.getElementById("loading-screen").style.display = "none";
            }
            </script>


</body>
</html>