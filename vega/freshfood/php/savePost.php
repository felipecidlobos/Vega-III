<?php
session_start();

if (isset($_SESSION['autorExist']) && $_SESSION['autorExist'] == true && isset($_SESSION['loger']) && $_SESSION['loger'] == true && $_SESSION['username']=='admin') {

} else {
    echo "<script>alert('Debe Iniciar Sesión') </script>";
    echo "<script> window.location = 'logout.php' </script>";
    echo "<script> window.location = 'login.php' </script>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

echo "<script>alert('Su sesion ha expirado, inicie sesion nuevamente.') </script>";    
echo "<script> window.location = 'php/login.php' </script>";
exit;
}
?>
<?php

include 'Connection.php';
$connection = new Connection();
$conn = $connection-> getConnection();

$titulo = trim($_POST['titulo']);
$imagen = trim($_POST['imagen']);
$mensaje = trim($_POST['mensaje']);
$autor = $_SESSION['autor'];
$fecha = date("Y-m-d");

if ($titulo != "" && $mensaje != "") {

    $sql = "INSERT INTO blog (titulo, autor, mensaje, fecha, imagen) 
    VALUES ('$titulo','$autor','$mensaje','$fecha','$imagen')";
    
    $result = mysqli_query($conn, $sql);

    if ($result) {
        //echo "<script>alert('Entrada Creada Con Éxito') </script>";
        echo "<script> window.location = '../blog.php' </script>";
    } else {
        echo "<script>alert('Error, intente nuevamente') </script>";
        echo "<script> window.location = 'savePost.php' </script>";
    }

} else {
    echo "<script>alert('Los campos no pueden estar vacios.') </script>";
    echo "<script> window.location = '../login.html' </script>";
  }
  
?>
