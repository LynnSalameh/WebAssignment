<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        /*body {
            background-color: #f7f7f7;
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

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            margin-top: 50px;
            background-color: rgba(158, 152, 152, 0.481);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #160959;
            text-align: center;
        }

        .contact-info {
            margin-top: 20px;
        }

        
        .contact-item {
            background-color: #160959;
            color: white;
            padding: 10px;
            margin: 0 auto 15px;
            border-radius: 8px;
            width: 50%;
            text-align: center;
            margin-bottom: 5%;
            transition: background-color 0.3s;
    
        }

        .contact-item p {
            margin: 0;
        }

       
        .contact-label {
            font-size: 18px;
            font-weight: bold;
            font-style: italic;
            margin-bottom: 15%;
        }

       
        .contact-value {
            display: inline;
        }

        .contact-value a {
            color: #fff; 
            text-decoration: none; 
        }

        .contact-item:hover {
            background-color: rgb(189, 187, 187); 
            color:#160959;
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
    }
    ?>
    
    <div class="container">
        <h1 style="margin-bottom: 8%;">Contact Me</h1>
        
        <div class="contact-info">
            <div class="contact-item">
                <p class="contact-label">Name:</p>
                <p class="contact-value">Lynn Salameh</p>
            </div>
            <div class="contact-item">
                <p class="contact-label">Email:</p>
                <p class="contact-value"><a href="mailto:lynn_salame@outlook.com">lynn_salame@outlook.com</a></p>
            </div>
            <div class="contact-item">
                <p class="contact-label">Phone:</p>
                <p class="contact-value"><a href="tel:+96170989871">+961 70 989871</a></p>
            </div>
            <div class="contact-item">
                <p class="contact-label">Address:</p>
                <p class="contact-value">Beirut, Lebanon</p>
            </div>
        </div>
    </div>
</body>
</html>
