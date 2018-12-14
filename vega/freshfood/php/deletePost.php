<?php
session_start();

if (isset($_SESSION['autorExist']) && $_SESSION['autorExist'] == true && isset($_SESSION['loger']) && $_SESSION['loger'] == true && $_SESSION['username']=='admin') {

} else {
    echo "<script>alert('Debe Iniciar Sesión') </script>";
    echo "<script> window.location = 'logout.php' </script>";
    echo "<script> window.location = 'login.php' </script>";

exit;
}
?>
<?php
include 'Connection.php';
$connection = new Connection();
$conn = $connection-> getConnection();

$id = $_POST['id'];

$sql= "DELETE FROM blog where id = '$id'";

$result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script> window.location = '../blog.php' </script>";
    } else {
        echo "<script>alert('Error, intente nuevamente') </script>";
        echo "<script> window.location = 'savePost.php' </script>";
    }


mysqli_close($con);
?>