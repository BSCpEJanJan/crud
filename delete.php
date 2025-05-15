<?php
if (isset ($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mydb";

    $connection = new mysqli($servername, $username, $password, $database); 

    $sql = "DELETE FROM client WHERE id=$id";
    $result = $connection->query($sql);
}

header("location:/crud/index.php");
exit;
?>