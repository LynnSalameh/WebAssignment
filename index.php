<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // Load user data from JSON file
    $jsonFile = 'user_data.json';

    if (file_exists($jsonFile)) {
        $userData = json_decode(file_get_contents($jsonFile), true);

        // Check if the username exists and the password matches
        if (isset($userData[$username]) && $userData[$username]['password'] === $password) {
            // Set the username in the session
            $_SESSION['username'] = $username;
            // Redirect to the main page upon successful login
            header("Location: pages/main.php");
            exit;
        } else { 
            echo "Invalid username or password.";
        }
    } else {
        echo "No user data found. Please sign up.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
          body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('images/bg.jpg') no-repeat center center fixed;
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

        h2 {
            text-align: center;
            color: #fff;
            font-size: 19px;
            font-weight: normal;
            font-style: italic;
            margin-top: 15%;
        }

        h1{
            text-align: center;
            color: #fff;
            margin-top: 6%;
  
        }

        p{
            text-align: center;
            color: #fff;
            font-size: 25px;
            margin-bottom: 5%;
            font-style: italic;
            
        }

        #container {
            text-align: center;
         
        }

        form {
            background: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
            max-width: 400px;
            width: 100%;
            text-align: center;
            margin: auto; 
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #160959;
            font-size: 17px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #ccc;
        }

        input[type="submit"] {
            background-color: #160959;
            color: #fff;
            cursor: pointer;
            font-size: 17px;
        }

        input[type="submit"]:hover {
            background-color:mediumorchid;
            color: #160959;
        }
    </style>
</head>
<body>

<div id="container">
    <h1> Hello and Welcome to Lynn's Website</h1>
    <p>Please log in here to proceed the website.</p>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Login">
    </form>

    <h2>Don't have an account? <a href="signup.php">Sign up</a></h2>
</div>
</body>
</html>
