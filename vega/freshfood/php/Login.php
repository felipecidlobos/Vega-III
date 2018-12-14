<?php
session_start();
?>

<?php

include 'Connection.php';
$connection = new Connection();
$conn = $connection-> getConnection();

$username = trim($_POST['user']);
$password = trim($_POST['password']);

if ($username != "" && $password != "") {
    
    $sql = "SELECT * FROM usuarios WHERE rut = '$username'";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result->num_rows > 0) {
    }
    $row = $result->fetch_array();
    
    if ($password == $row['pass_usuario']) {
        
        $_SESSION['loger']    = true;
        $_SESSION['username'] = $row['cargo_usuario'];
        $_SESSION['start']    = time();
        $_SESSION['autorExist'] = true;
        $_SESSION['autor'] = $row['nombre_usuario'];
        $_SESSION['user'] = $row['rut'];
        $_SESSION['expire']   = $_SESSION['start'] + (60 * 60);
        if ($row['cargo_usuario'] == "admin") {
            echo "<script> window.location = '../home.php'</script>";
        } else if ($row['cargo_usuario'] == "user") {
            echo "<script> window.location = '../home2.php'</script>";
        } 
        
    } else {
        
        echo "<script>alert('Usuario o contraseña invalidos.') </script>";
        echo "<script> window.location = '../login.html' </script>";        
    }
    mysqli_close($conn);
    
} else {
  echo "<script>alert('Los campos no pueden estar vacios.') </script>";
  echo "<script> window.location = '../login.html' </script>";
}
?>