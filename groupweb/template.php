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

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $institution = $_POST['institution'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $about = $_POST['about'];
    $skill1 = $_POST['skill1'];
    $skill2 = $_POST['skill2'];
    $skill3 = $_POST['skill3'];
    $skill4 = $_POST['skill4'];

    // Insert user details into persinfo table
    $sql = "INSERT INTO persinfo (`first name`, `last name`, email) VALUES ('$firstname', '$lastname', '$email')";
    $conn->query($sql);

    // Insert user details into user_resume table
    $sql_resume = "INSERT INTO user_resume (`first name`, `last name`, email, course, institution, start_date, end_date, about, skill1, skill2, skill3, skill4) 
                   VALUES ('$firstname', '$lastname', '$email', '$course', '$institution', '$start_date', '$end_date', '$about', '$skill1', '$skill2', '$skill3', '$skill4')";
    if ($conn->query($sql_resume) === TRUE) {
        // Redirect to a new page to display the resume
        header("Location: displayresume.php?firstname=$firstname&lastname=$lastname&email=$email&course=$course&institution=$institution&start_date=$start_date&end_date=$end_date&about=$about&skill1=$skill1&skill2=$skill2&skill3=$skill3&skill4=$skill4");
        exit();
    } else {
        echo "Error: " . $sql_resume . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <title>Resume</title>
</head>
<style> 
          body{
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 16px;
            max-width: 960px;
            margin: auto;
            background-color: #DBF9FC;
        }
        .container {
                        text-align: center;
                          }
        header {
            text-align: center;
            margin: auto 2em;
            background-color: #4caf50; /* Header background color */
            color: #fff; /* Header text color */
            padding: 1em;
            border-radius: 8px;
        }

        main {
            display: grid;
            grid-template-columns: 40% 60%;
            margin-top: 3em;
        }

        section {
            margin: auto 1em 4em 2em;
        }

        i {
            margin-right: .5em;
        }

        p {
            margin: .2em auto;
        }

        h1, h2, h3 {
            font-weight: 100;
            margin-bottom: 0;
        }

        #mainLeft {
            border-right: 1px solid lightgray;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
            margin: auto;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 3px solid #ccc;
            border-radius: 4px;
        }

        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
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
    </style>
<body>
<div class="container">
<h1>TEMPLATE</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Add input fields according to the template -->
        First Name: <input type="text" name="firstname" required><br>
        Last Name: <input type="text" name="lastname" required><br>
        Email: <input type="text" name="email" required><br>
        Course: <input type="text" name="course" required><br>
        Institution: <input type="text" name="institution" required><br>
        Start Date: <input type="text" name="start_date" required><br>
        End Date: <input type="text" name="end_date" required><br>
        About: <textarea name="about" required></textarea><br>
        Skill 1: <input type="text" name="skill1" required><br>
        Skill 2: <input type="text" name="skill2" required><br>
        Skill 3: <input type="text" name="skill3" required><br>
        Skill 4: <input type="text" name="skill4" required><br>

        <input type="submit" name="submit" value="Save Details">
    </form>
</body>
</html>
