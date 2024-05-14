<!DOCTYPE html>
<script src="https://kit.fontawesome.com/90ccdd32d7.js" crossorigin="anonymous"></script>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="cvstyle.css">
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
            session_start();
            if(isset($_SESSION['username'])) {
                echo "<a>Hello, ".$_SESSION['username']." <i class='fa-regular fa-heart'></i></a>";
            }
            ?>
            <a href="login.php">Logout</a>
        </div>
    </div>
<div id="page">
    <div class="photo-and-name">
        <img src="pictures/razanjpg.jpg" class="photo" alt="Profile Picture">
        <div class="contact-info-box">
            <h1 class="name">Razan Hourani</h1>
            <br>
            <p >Junior Computer Science Student</p>
            <p class="contact-details"> <i class="fa-solid fa-phone"></i></i> Phone: +961 70 789 433  - <i class="fa-solid fa-envelope"></i> Email: razanhourani8@gmail.com</p>
        </div>
    </div>

    <div id="education">
        <h3>Education</h3>
        <table>
            <tr>
                <td>2008-2021</td>
                <td><b>Phoenix International School</b> <br> 
                    Baccalaureate Diploma - General Sciences</td>
            </tr>
            <tr>
                <td>2022-Present</td>
                <td><b>Lebanese American University</b> <br> 
                    Bachelors of Science in Computer Science</td>
            </tr>

        </table>
    </div>
    <div id="work">
        <h3>Experience</h3>
        <table>
            <tr>
                <td>2019 - Present</td>
                <td><b>Team Lead</b> <br> MiniCamp Summer Camp </td>
            </tr>
            <tr>
                <td>2020-Present</td>
                <td><b>Tutor</b> <br> 
                    Freelance</td>
            </tr>
            <tr>
                <td>2023-Present</td>
                <td><b>Assistant Under-Secretary-General for Training and Educational Development</b><br> LAU Model Arab League 
                </td>
            </tr>

            <tr>
                <td>2024-Present</td>
                <td><b>Salesforce Intern</b> <br> 
                    ISS - Software Hive</td>
            </tr>
 
        </table>
    </div>
    <div id="projects">
        <h3>Projects</h3>
        <table>
            <tr>
                <td> <b>LAU</b> - Database Management Systems</td>
                <td><b>Police Station Database Design and Implementation</b> <br></td>
            </tr>
            <tr>
                <td> <b>LAU</b> - Computer Organization</td>
                <td><b>RISC Processor</b> <br> </td>
            </tr>
            <tr>
                <td> <b>LAU</b> - Digital Cultures</td>
                <td><b>CIFAR-10 Model</b> <br> </td>
            </tr>
         
        </table>

    </div>
</div>



</body>
</html>