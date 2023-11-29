<!DOCTYPE html>
<html>
<head>
<style>
    body
    {
        font-family: Arial, sans-serif;
            background-color: #DBF9FC;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        } 
        .container {
                        text-align: center;
                          }
    form {
        background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
    }
    form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 4px solid #ccc;
            border-radius: 4px;
        } 
        form input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
        form a {
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
        }
        .error {
            color: red;
        }
        </style>
</head>
    <body>
    <div class="container">
        <h1>Login</h1>
    

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "personalinfo";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!empty($username) && !empty($password)) {
            // perform operations with the form data
            $sql = "SELECT * FROM persinfo WHERE `first name` = '$username' AND password = '$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Redirect to the resume template after successful login
                header("Location:template.php");
                exit();
            } else {
                echo "Invalid username or password";
            }
        } else {
            echo "Username or password is empty.";
        }
    } else {
        echo "Username or password not set.";
    }

    $conn->close();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Username (First Name): <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Login">
</form>

</body>
</html>