<!DOCTYPE html>
<html>
<head>
    <title>Main Page</title>
    <style>
        /*body {
            background-color: #063655;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('../images/bg.jpg');


        }*/
        body {
            background-color: #063655;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('../images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
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
            background: rgba(0, 0, 0, 0.7); /* Adjust the alpha value to darken or lighten */
            z-index: -1; /* Place the pseudo-element behind the background image */
        }

        #header{
        background: #160959d7;
        height: 40px;
        position: fixed;
        top: 0;
        }

        .row{
            display: block;
            width: 100%;
        }

        #dropdown-menu{
            cursor: pointer;
            display: inline-block;
            height: 40px;
            line-height: 40px;
            width: 90px;
            vertical-align: middle;
            color: white;
            background-color: #160959;
            font-family: Arial, sans-serif;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            
        }

        .dropdown-content{
            cursor: pointer;
            display: none;
            background: #160959;
            position: relative;
            min-width: 160px;
            z-index: 1;
            left: 0;
            font-size: medium;
        }

        #dropdown-menu li{
            font-family: Arial, sans-serif;
            text-align: center;
            list-style-type: none;
            color: #f2f2f2;
            font-weight: normal;
        }

        #dropdown-menu ul{
            margin: 0;
            padding: 0;
        }

        #dropdown-menu:hover .dropdown-content{
            display: block;
        }

        #dropdown-menu li:hover{
            background: #77859a;
        }

              
        #dropdown-menu a {
            text-decoration: none; 
            color: white; 
        }

       
        #dropdown-menu a:hover {
            text-decoration: none;
            background: #e0e1e1; 
            color: white; 
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
            background-color: mediumorchid; /* Change this color to your desired hover color */
        }

    </style>
</head>
<body>

    <div class="row" id="header">
        <div id="dropdown-menu">
            <span>Menu</span>
            <div class="dropdown-content">
                <ul>
                    <a href="cv.php">
                        <li>My CV</li>
                    </a>
                    <a href="gallery.php">
                        <li> My Gallery</li>
                    </a>
                    <a href="contact.php">
                        <li>Contact Me</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>

    <?php
    // Check if the user is logged in
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
    }
    ?>
  
    <div style="padding: 40px;   ">
        <h1 style="color:white; text-align: center; margin-top: 5%;">Welcome to My Website!</h1>
        <h1 style="color:white; text-align: center; font-size: 20px; font-style: italic;">My name is Lynn Salameh, I'm a 20 years old Lebanese Computer Science student at the Lebanese American University in Beirut.</h1>
        <h1 style="color:white; text-align: center; font-size: 20px; font-style: italic;">In this website, you will find my CV, a gallery of pictures reflecting some of my interests and my contact information.</h1>
    </div>
    
    
    
    
</body>
</html>
