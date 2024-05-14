<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/90ccdd32d7.js" crossorigin="anonymous"></script>

    <title>CIFAR-10</title>
    <link rel="stylesheet" href="commonPStyle.css">
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
            padding: 10px 10px;
            font-size: 14px; 
             
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
            session_start();
            if(isset($_SESSION['username'])) {
                echo "<a>Hello, ".$_SESSION['username']." <i class='fa-regular fa-heart'></i></a>";
            }
            ?>
            <a href="login.php">Logout</a>
        </div>

  
    </div>
    <div class="content">
        <div class="about-me-box">
            <h1>CIFAR-10</h1>
            <img src="pictures/cifar10.jpg">
            <img src="pictures/CNNcode.jpg">
            <img src="pictures/code.jpg">
            <img src="pictures/CNNs.jpg">
            
        </div>
    </div>
</body>

</html>