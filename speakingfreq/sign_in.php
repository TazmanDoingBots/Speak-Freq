<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speak Freq</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="./img/logo.png"/>
        </div>
        <div class="dropdown"> 
            <button class="dropbutton"><img src="./img/navHome.png"> </button>
            <div id="drop-content">
                <a href="index.php">Home</a>
                <a href="About.php"/>About<a/>
                <a href="sign_in.php"/>Log In<a/>
            </div>
        </div>
    </div>

    <h3> Login </h3>
    <!-- STUCK ON IF PHP FILE IS BAD OR THIS ACTION ON THE FORM IS BAD -->
    <form action="log_in.php" method="post">
        <input type="name" required id="username" name="user_name" placeholder="Enter Username here" required>
        <input type="password"  name="password" placeholder="Enter password here" required>
        <input type="submit" value="Submit">
    </form>
</body>