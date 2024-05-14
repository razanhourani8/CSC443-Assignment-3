<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/90ccdd32d7.js" crossorigin="anonymous"></script>

    <title>Projects</title>
    <link rel="stylesheet" href="css/projectSTYLE.css">
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
    <div id="parent">
        <div id="box1" class="container">
            <h5>CIFAR-10</h5>
            <a href="cifarProject.php">
                <img src="pictures/cifar10.jpg"></a>
            <div class="text">
                <p>
                    Developed a deep learning model to classify images from the CIFAR-10 dataset, consisting of 60,000
                    32x32 color images across 10 classes. Leveraged Convolutional Neural Networks (CNNs) to achieve
                    accurate classification performance.
                </p>
            </div>

        </div>

        <div id="box2" class="container">
            <h5>RISC Processor</h5>
            <a href="riscProject.php">
                <img src="../pictures/risc.jpg"></a>
            <div class="text">
                <p>
                    Designing a RISC Processor utilizing the LEGv8 Architecture, this project was driven by the goal of
                    crafting a high-performance processor. By leveraging the intricacies of the LEGv8 Architecture, the
                    resulting processor aimed to achieve
                    exceptional efficiency and performance.
                </p>
            </div>
        </div>
        <div id="box3" class="container2">
            <h4>Police Station Database</h4>
            <a href="policeProject.php">
                <img src="../pictures/police.jpg.png"></a>

            <div class="text2">
                <p>
                    Using Entity-Relationship (ER) diagrams, relational schemas, and Oracle's database system, this
                    project focuses on designing and optimizing databases. Specialized in enhancing database performance
                    and maintaining data integrity, the project streamlines access for authorized personnel. Proficiency
                    extends to managing Oracle Database Management Systems, ensuring efficient and secure data
                    operations. Through strategic implementation of best practices, the project facilitates seamless
                    database-driven project execution
                </p>
            </div>


        </div>
    </div>
</body>

</html>