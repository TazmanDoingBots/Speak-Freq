<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$user_name = $_POST['user_name'];
$password = $_POST['password'];

if (!empty($user_name) || !empty($password)) 
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "registry";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());

    }
    else
    { 
    if(isset($_POST['login']))
    {
        if ($dbname::query('SELECT user_name FROM user_info WHERE user_name=:user_name', array(':user_name'=>$user_name)));
        {
            if (password_verify($password, $dbname::query('SELECT password FROM user_info WHERE user_name=:user_name', array(':user_name'=>$user_name))[0]['password']))
            {
               echo 'Logged in';
            }
            else {
                echo 'Incorrect Password';
            }
        }
       
    }
        

      

       
    }
}

else {
    echo "Fill in all fields";
    die();
}
?>