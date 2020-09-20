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


    <section id="showcase">
        <br> <br>
        <label id="free"><div class="font">Sign Up Free Today!</div></label>
        <br>
        <img src="./img/showcase.png">
    </section>
    
    <section id="register">
        <!-- ------------------Sign Up Form-------------------------------- -->
        <fieldset>
        <legend><pre><div class="font">Sign Up</pre></div></legend>

        <form class="signup" action="insert.php" method="post"> 
            <table>

                    <label id="name-label" for="Username"><div class="font">Username</div></label>
                    <input type="name" required id="username" name="user_name" placeholder="Enter Username here" required>   
                    <br><br>
                    <label id="email-label" for="Email"><div class="font">Email</div></label>
                    <input type="email" name="user_email" placeholder="Enter email here" required>   
                    <br><br>
                    <label id="password-label" for="Password"><div class="font">Password</div></label>
                    <input type="password"  name="password" placeholder="Enter password here" required>  

            </table>
            
       
        <br>
        <br>
        <!-- ------------------Survey-------------------------------- -->
            <table>
                    <label for="Survey"><div class="font">Quick Survey</div></label><br>
                    <label for="Q1">How involved are you with Music?</label>
                    <ul>
                        <p>
                            <input type="radio" name="q1" value="artist"> Singer/Rapper<br>
                            <input type="radio" name="q1" value="producer"> Producer<br>
                            <input type="radio" name="q1" value="other"> Other (Instruments, DJ, ect.) <br>
                            <input type="radio" name="q1" value="none"> No Experience 
                            
                        </p>
                    </ul>
                    <br>
                    <label for="Q2">Would you like to learn, teach, or do both within this community?</label>
                    <ul>
                        <p>
                            <input type="radio" name="q2" value="learn"> Learn<br>
                            <input type="radio" name="q2" value="teach"> Teach <br>
                            <input type="radio" name="q2" value="both"> Both 
                            
                        </p>
                    </ul>
                    <br>
                    <label for="Q3">How much do you know about Music Theory?</label>
                    <ul>
                        <p>
                            <input type="radio" name="q3" value="huh"> Huh?<br>
                            <input type="radio" name="q3" value="little"> A little <br>
                            <input type="radio" name="q3" value="know"> I know about it but I don't have the scales memorized <br>
                            <input type="radio" name="q3" value="jacob"> Jacob Collier (Music theory is your life)
                        </p>
                    </ul>
                
                    <br>
                    <label for="Q4">What instruments do you play? (Say "none" if you do not play any)</label>
                    <ul>
                        <p>
                            <input type="text"  name="q4" placeholder="Guitar? Glockenspiel?" required>  
                        </p>
                    </ul>
                    
                    <br>
                    <label for="Q5">Are you interested in submitting resources and articles about music topics?</label>
                    <ul>
                        <p>
                            <input type="radio" name="q5" value="yes"> Yes<br>
                            <input type="radio" name="q5" value="no"> No <br>
                            <input type="radio" name="q5" value="maybe"> Maybe <br>
    
                        </p>
                    </ul>
                    
                    <br>
                <input type="submit" value="Submit">
            </table>
            
        </form>
        

        
        </fieldset>
    </section>
</body>
</html>





