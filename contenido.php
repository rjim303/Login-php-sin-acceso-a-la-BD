<?
//aquí tendremos que iniciar sesión y comprobar que hay un username almacenado en la sesión
//si lo hay podemos mostrar el contenido privado
//en caso contracio usaremos la función header("Location: login.php"); para redirigir al usuario
//al login

session_start();

if(isset($_SESSION["usuario"])){
    echo "<h1>Hola, " . $_SESSION["usuario"] . "</h1>";
    echo "Esta es la página de contenido que se abre cuando el usuario inicia sesión correctamente";

?>

<a href="cerrarsesion.php">Cerrar sesión</a>

<?php
} else {
    header("Location: login.php");
}

?>