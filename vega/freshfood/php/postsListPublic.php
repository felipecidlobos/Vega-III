<?php
session_start();
?>
<?php
    include 'Connection.php';
    $connection = new Connection();
    $conn = $connection-> getConnection();
    $sql = "SELECT * FROM blog WHERE tipo = '2' ORDER BY fecha DESC";
    $result = mysqli_query($conn,$sql);
?>
 <div id="content" class="col-sm-9">
    <div class="col-sm-12">
        <h2>Posts</h2><hr>
            <div class="blog1 blog">
                <?php
                if(mysqli_num_rows($result)>0 ){
                    
                    while ($row = mysqli_fetch_array($result)) {
                
                    echo "<div>";
                    echo "<p class=hidden>Id: ".$row['id']."</p>"; 
                    echo '<H1>'.$row['titulo'].'</H1><br>';
                    echo "<p>".$row['mensaje']."</p><br>";
                    if ($row['imagen'] != "") {
                        echo "<img src=".$row['imagen']." style=width:100%></img>"; 
                    } 
                    echo "<p>Publicado por ".$row['autor']." - ".$row['fecha']."</p>";
                    echo "</div><br><hr>";             
                }
                mysqli_close($conn); 
            }else{
                echo "<div>";
                echo "<p>" ."No se encontaron publicaciones.". "</p>";
                echo "</div>";
            }
                ?>
            </div>
    </div>
</div>