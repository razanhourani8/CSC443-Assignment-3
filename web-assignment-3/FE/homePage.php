<?php
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/90ccdd32d7.js" crossorigin="anonymous"></script>
    <title>About Me</title>
    <link rel="stylesheet" href="css/homeStyle.css">
    <style>
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navigation {
            display: flex;
            align-items: center;
        }

        .end {
            display: flex;
            align-items: center;

        }

        .end a{
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333; 
            padding: 10px 20px;
            font-size: 15px; 
             
        }
        .end a:hover{
            background-color: #CFD8DC;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="navigation">
            <a href="homePage.php">About Me</a>
            <a href="projectsTrail.php">Projects</a>
            <a href="CV.php">Curriculum Vitae</a>
            <a href="#popup">Contact Me</a>
            <div id="popup" class="popup">
                <h3>Contact Details</h3>
                <p> <i class="fa-solid fa-phone"></i></i> Phone: +961 70 789 433 </p>
                <p><i class="fa-solid fa-envelope"></i> Email: razanhourani8@gmail.com</p>
                <a href="#close">Close</a>
            </div>
        </div>
        <div class="end">
            <?php
            if(isset($_SESSION['username'])) {
                echo "<a>Hello, ".$_SESSION['username']." <i class='fa-regular fa-heart'></i></a>";
            }
            ?>
            <a href="login.php">Logout</a>
        </div>
    </div>

    <div class="content">
        <div class="about-me-box">
            <img src="pictures/cutepic.jpg" alt="Your Image">
            <h2>About Me</h2>

            <p>
                I'm Razan Hourani, a junior computer science student from Lebanon with a robust background in education
                and technology.
            </p>
            <p>
                My journey has led me to delve into diverse projects, including database design and implementation,
                processor development, and deep learning model creation. Through these experiences, I've honed my skills
                in leadership, problem-solving, and project management.

            </p>
            <p> Outside of my professional pursuits, I'm deeply involved in enriching experiences, such as chairing
                local and international conferences. I find fulfillment in both intellectual challenges and hands-on
                endeavors, continuously seeking to expand my horizons and contribute meaningfully to the world around
                me.


                Driven by a passion for innovation and a commitment t
