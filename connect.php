<?php

$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "suggestion";

$connection = mysqli_connect($server, $username, $password, $dbname);

if(!$connection)
{
    echo "not connected";
}


$cellType = $_POST['celltype'];
$geneName =$_POST['genename'];
$mistake = $_POST['mistake'];

$sql = "INSERT INTO `suggestion`(`Cell Type`, `Gene Type`, `Mistake`) VALUES ('$cellType','$geneName','$mistake')";

$result = mysqli_query($connection, $sql);

if($result){
    echo "data submitted";
}

else{
    echo "query failed";
}
?>