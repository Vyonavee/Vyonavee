<!DOCTYPE html>
<html>
<head>
    <style>

            body{
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
                                   margin-top: 20px; /* Added margin to separate the form from the heading */
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
        form input[type="button"] {
            background-color: #ff3333;
            color: #fff;
            cursor: pointer;
        }

        form input[type="button"]:hover {
            background-color: #cc0000;
        }
        form a {
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
        }
      </style>
      </head>

      <body>
      <div class="container">
        <h1>Sign-up</h1>

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

    if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)) {
            // perform operations with the form data
            $sql = "INSERT INTO persinfo (`first name`, `last name`, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to login page after successful signup
                header("Location: loginform.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "One or more fields are empty.";
        }
    } else {
        echo "All fields are not set.";
    }

    $conn->close();
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    First Name: <input type="text" name="firstname"><br>
    Last Name: <input type="text" name="lastname"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Submit">
    <input type="button" value="Cancel">
</form>

</body>
</html