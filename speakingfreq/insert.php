<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

$user_name = $_POST['user_name'];
$user_email = $_POST['user_email'];
$password = $_POST['password'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];

if (!empty($user_name) || !empty($user_email) || !empty($password) 
|| !empty($q1)|| !empty($q2)|| !empty($q3) || !empty($q4) || !empty($q5)) {
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


        $SELECT = "SELECT user_email FROM user_info Where user_email = ? Limit 1";
        $INSERT = "INSERT Into user_info (user_name, user_email, 
        password, q1, q2, q3, q4, q5) values(?,?,?,?,?,?,?,?)";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$user_email); 
        $stmt->execute();
        $stmt->bind_result($user_email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum==0)
        {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("ssssssss",$user_name, $user_email, $password, $q1, $q2, $q3, $q4, $q5);
            $stmt->execute();
            echo "Thank you for Signing Up to Speaking Freq";
            echo '<a href="index.php">Click here to redirect to Home Page</a>';

        }

        else
        {
            echo "Someone already register using this email";

        }
        $stmt->close();
        $conn->close();
    }
}

else {
    echo "Fill in all fields";
    die();
}
?>