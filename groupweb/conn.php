<?php
$servername="localhost";
$databasename="personalinfo";
$username="root";
$password="";

$con = mysqli_connect($servername,$username,$password,$databasename);
if(!$con)
{
    die("failed to connect!".mysqli_error($con));
}
else{
    echo"connection successfull";
}

?>
