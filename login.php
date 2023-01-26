<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "Unflep@2023";
    $dbname = "test";


    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn){
        die("no hay conexion: ".mysqli_connect_error());
    }

    $prema = $_POST["codprema"];

    $query = mysqli_query($conn, "SELECT * FROM usuario WHERE prematricula = '$prema'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        //echo "bienvenidos: ".$prema;
        //echo '<script language="javascript">alert("Bienvenidos");</script>'.$prema;
        $_SESSION['logueado'] = true;
        //header("Location: test.php", );
        //header("Location: index.php");
        echo "<script>
                alert('Bienvenido');
                window.location = 'test.php'
              </script>";

    }else if ($nr == 0){
        //echo "no ingreso";
        $_SESSION['logueado'] = false;
        //header("Location: index.php");
        echo "<script>
                alert('Compruebe su número de prematricula');
                window.location = 'index.php'
              </script>";
        //header("Location: index.php");
        //echo "window.location = 'index.php'";
    }

?>