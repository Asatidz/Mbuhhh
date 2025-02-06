<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "syinpewa";

$con = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()) {
    echo "Connection failed! : " . mysqli_connect_error();
}

?>