<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lynn Salameh's CV</title>
    <style>
       /* body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../images/bg.jpg');
        } */
        body {
            background-color: #063655;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('../images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7); 
            z-index: -1; 
        }

        .cv-container {
            display: flex;
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .left-column {
            flex: 1;
            padding: 20px;
            
            color:black;
            border-radius: 5px 0 0 5px;
        }
        .right-column {
            flex: 2;
            padding: 20px;
        }
        .header {
            display: flex;
            align-items: center;
        }
        .profile-pic {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-right: 20px;
            margin-left: 50px;
            margin-bottom: 5%;
        }
        .blue-rectangle {
            background-color: #063655;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .contact-info {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .contact-icon {
            font-size: 24px;
            margin-right: 10px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            margin: 0;
        }
        .section {
            margin-top: 20px;
        }
        .grey-box {
            background-color: #f3f3f3;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
      
        .header1{
            font-size: 24px;
            margin-bottom: 10px;
            color:  #063655;
            font-weight: bold;
            
        }
        hr {
            border: 1.2x solid  #063655;
            margin-top: -2%;
            margin-bottom: 5%;
        }
        .goback-button {
            display: block;
            text-align: center;
            margin-left: 2%;
            margin-top: 1%;
            background-color: #160959;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px; 
            width: 50px;
        }
        #welcome-message {
            color: white;
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 14px;
            font-style: italic;
            margin-right: 3%;
        }

        #logout-btn {
            color: #160959;
            background-color:#f2f2f2; 
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 12px;
            border-radius: 10px;
            margin-left: 15px; 
            margin-top: -1%;
            
        }
        #logout-btn:hover {
            background-color: mediumorchid; 
        }

    </style>
</head>
<body>
    <a href="main.php" class="goback-button">Home</a>

    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    ?>
        <div id="welcome-message">
            Welcome, <?php echo $username; ?>!
            <form action="logout.php" method="post" style="display: inline;">
                <input type="submit" value="Logout" id="logout-btn">
            </form>
        </div>
    <?php
    } else {
        
        echo '<p style="color: red;">Session check failed. User not logged in.</p>';
    }
    ?>
    
    <div class="cv-container">
        <div class="left-column">
            <img class="profile-pic" src="../images/IMG_1485 Small.jpeg" alt="Profile Picture">
            <div class="contact-info">
                <span class="contact-icon">&#128231;</span>
                <p style="color:#063655;">lynn_salame@outlook.com</p>
            </div>
            <div class="contact-info">
                <span class="contact-icon">&#9742;</span>
                <p style="color:#063655;">+961 70 989 871</p>
            </div>
            <div class="contact-info">
                <span class="contact-icon">&#127758;</span>
                <p style="color:#063655;">Beirut, Lebanon</p>
            </div>
            <div class="section">
                <div class="header1">Skills</div>
                <hr>
                <div class="grey-box">
                    <p>Proficient in Python, Java, C and SQL</p>
                </div>
                <div class="grey-box">
                    <p>Basics of HTML, CSS, and JavaScript</p>
                </div>
                <div class="grey-box">
                    <p>Multi-threading in C and Java</p>
                </div>
                <div class="grey-box">
                    <p>Relational database design</p>
                </div>
            </div>
    
            <div class="section">
                <div class="header1">Languages</div>
                <hr>
                <ul>
                    <p>Fluent in English, French and Arabic</p>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom: 8%; margin-top: 2%;">Full Professional Proficiency </p>
                    <p>Spanish</p>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom: 8%; margin-top: 2%;">Limited Working Proficiency</p>
                </ul>
            </div>
            <div class="section">
                <div class="header1">Interests</div>
                <hr>
                <div class="grey-box">
                    <p>Traveling</p>
                </div>
                <div class="grey-box">
                    <p>Hiking</p>
                </div>
            </div>
        </div>
        <div class="right-column">
            <div class="blue-rectangle">
                <p style="font-size: 30px; ">Lynn Salameh </p><p style="font-size: 20px; margin-bottom: 2%; font-weight:lighter">Computer Science Student</p>
                <p>A highly motivated and dedicated Computer Science student with great analytical, programming and communication skills, currently looking for an internship to further enhance my abilities.</p>
            </div>

            <div class="section">
                <div class="header1">Education</div>
                <hr>
                <p style="font-size: 18px; font-weight: bold;  color:#063655;">BS in Computer Science </p> 
                <p style="font-size: 18px; margin-bottom: 2%;">Lebanese American University</p>
                <p style="font-style: italic; font-size: 15px;"> 09/2021 - 05/2024     -     GPA: 3.0</p>
                <p style="font-style: italic; font-size: 15px; color:#063655; margin-top: 2%;"> Courses: </p>
                    <ul style="list-style-type:circle;">
                        <li>Database Management Systems</li>
                        <li>Objects and Data Abstraction</li>
                        <li>Mobile Development</li>
                        <li>Computer Organization</li>
                        <li>Operating Systems</li>
                        <li>Algorithms and Data Structures</li>
                        <li>Software Engineering</li>
                    </ul>
                
                <p style="font-size: 18px; font-weight: bold;  color:#063655;">Lebanese Baccalaureate<br>
                <p style="font-size: 18px; margin-bottom: 2%;">École Saint Vincent de Paul des Filles de la Charité </p>
                <p style="font-style: italic; font-size: 15px;">Life Sciences: 16.78/20</p>

            </div>
            <div class="section">
                <div class="header1">Extracurricular Activities</div>
                <hr>
                <ul style="list-style-type:circle;">
                    <li style=" margin-bottom : 2%;">Member of the Computer Science Club</li>
                    <li>LAU - Model Arab League Program in 2020</li>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom : 2%;">Debated political and economic issues in the Arab World, formed coalitions, presented solutions to resolve challenges faced by Arab countries</p>
                    <li>USJ - Débat Program in 2019</li>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom : 2%;">Developed public speaking, negotiating, and networking skills</p>
                    <li>Prix Lycéen de la Traduction Francophone in 2020</li>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom : 2%;">Enhanced French and English languages</p>
                    <li>Workshop Twily Business in partnership with IBEE and FNF in 2020</li>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom : 2%;">Expanded entrepreneurship, business, and teamwork skills. Designed and presented a business plan for a startup in front of judges. Came in first place</p>
                </ul>

            </div>
            <div class="section">
                <div class="header1">Projects</div>
                <hr>
                <ul style="list-style-type: circle;">
                    <li>Database Project for a Gas Company - Fall 2022</li>
                    <p style="font-style: italic; font-size: 15px; color:#063655;">Designed an Entity-Relation Diagram for a gas company Database</p>
                    <p style="font-style: italic; font-size: 15px; color:#063655;">Translated the ER schema into relations</p>
                    <p style="font-style: italic; font-size: 15px; color:#063655;">Normalized relations by utilizing BCNF</p>
                    <p style="font-style: italic; font-size: 15px; color:#063655;">Implemented the database using Oracle SQL</p>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom : 2%;">Presented a detailed report tackling every step of the process</p>
                    <li>CPU Simulation Program - Spring 2022</li>
                    <p style="font-style: italic; font-size: 15px; color:#063655; margin-bottom : 2%;">Designed a RISC processor that supports arithmetic, memory access, branch and register operations.</p>
                </ul>

            </div>
        </div>
    </div>
</body>
</html>
