<!DOCTYPE html>
<html>
<head>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <title>Display Resume</title>
    <style>
        body {
            background-color: #FFE5B4;}
            
            h1,h2 {
    font-size: 2em;
    letter-spacing: .1em;
    padding-top: 0em;
    padding-bottom: 0em;
}
       p{
        font-size: 2em;
       } 
        
        ul{
        font-size: 2em;

        }
            </style>
</head>

<body>
    <?php
    // Retrieve details from URL parameters
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $email = $_GET['email'];
    $course = $_GET['course'];
    $institution = $_GET['institution'];
    $start_date = $_GET['start_date'];
    $end_date = $_GET['end_date'];
    $about = $_GET['about'];
    $skill1 = $_GET['skill1'];
    $skill2 = $_GET['skill2'];
    $skill3 = $_GET['skill3'];
    $skill4 = $_GET['skill4'];
    ?>

    <header id="header">
        <!-- Display name and title (if applicable) -->
        <h1>Name</h1>
        <p><?php echo $firstname . ' ' . $lastname; ?></p>
    </header>

    <main>
        <article id="mainLeft">
            <section>
                <h2>CONTACT</h2>
                <!-- Display contact information -->
                <p class="email">Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>

            </section>
            <section>
                <h2>SKILLS</h2>
                <!-- Display skills -->
        
                <ul>
                    <li><?php echo $skill1; ?></li>
                    <li><?php echo $skill2; ?></li>
                    <li><?php echo $skill3; ?></li>
                    <li><?php echo $skill4; ?></li>
                </ul>

            </section>
            <section>
                <h2>EDUCATION</h2>
                <!-- Display education information -->
                <p><?php echo $course; ?></p>

                <h2>INSTITUTION</h2>
                <p><?php echo $institution; ?></p>
                <h2>START DATE</h2>
                <p><?php echo "Start Date: " . $start_date ;?></p>
                <h2>END DATE</h2>
                <p><?php echo  " End Date: " . $end_date; ?></p>
            </section>
        </article>
        <article id="mainRight">
            <section>
                <h2>ABOUT</h2>
                <!-- Display about section -->
                <p><?php echo $about; ?></p>
            </section>
        </article>
    </main>
</body>
</html>