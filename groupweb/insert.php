<?php
if(isset($_POST['submit']))
{
    $hostname="localhost";
    $username="root";
    $password="";
    $databasename="personalinfo";

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $connect=mysqli_connect($hostname,$username,$password,$databasename);
    $query="insert into 'persinfo'('firstname','lastname','email','password') Values ('firstname','lastname','email','password')";
    $result=mysqli_query($connect,$query);

    if ($result)
    {
        echo 'data inserted';
    }
        else{
            echo 'data not inserted';
        }
        mysqli_free_result($result);
        mysqli_close($connect);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>LOGIN PAGE</title>
</head>


<body>
    <form action="process_form.php" method="post" >
    <form>
        <label for="First name">First name</label>
        <input type="text" id="First name">
        <br><br>
        <label for="Last name">Last name</label>
        <input type="text" id="Last name">
        <br><br>
        <label for="Email ">Email </label>
        <input type="text" id="Email  ">
        <br><br>
        <label for="password">Password</label>
        <input type="text" id="Password">
        <br>
        <button>Submit</button>
    </form>
</body>
    </html>
