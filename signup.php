<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $username = $_POST['username'];
    $fullName = $_POST['full_name'];
    $password = $_POST['password']; 
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];

  
    if (empty($username) || empty($fullName) || empty($password) || empty($sex) || empty($dob)) {
        echo "All fields are required.";
        exit;
    }

    $userData = [];
    $jsonFile = 'user_data.json';

    if (file_exists($jsonFile)) {
        $userData = json_decode(file_get_contents($jsonFile), true);
    }

    if (isset($userData[$username])) {
        echo "Username already exists. Please choose a different one.";
        exit;
    }

    $userData[$username] = [
        'full_name' => $fullName,
        'password' => $password,  
        'sex' => $sex,
        'dob' => $dob,
    ];

   
    file_put_contents($jsonFile, json_encode($userData));
    $_SESSION['username'] = $username;
    header("Location: pages/main.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        /*body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background:  url('images/bg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }*/

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
            color: mediumorchid;
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
            background-color: rgba(255, 182, 193, 0.5);
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
            background-color: mediumorchid;
            color: #160959;
        }
    </style>
</head>
<body>
<div id="container">
    <h1> Hello and Welcome to Lynn's Website</h1>
    <p>Please sign up if here, if you don't have an account.</p>

    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>

        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" required><br>

        <label for="sex">Sex</label>
        <select name="sex" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br> 

        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" required><br>

        <input type="submit" value="Sign Up">
    </form>
    <h2>If you already have an account, log in here. <a href="index.php">Log in</a></h2>
</div>

</body>
</html>
