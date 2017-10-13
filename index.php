<!DOCTYPE HTML>
<html>
    <body bgcolor="#3399FF">
        <h1> Welcome to COSC4806 Assign2</h1>
    </body>
</html>

<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cosc";



if (isset($_SESSION['fail']) == true) {
    if (isset($_POST['username']) && isset($_POST['password']) == true) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect($servername, $dbusername, $dbpassword) or die("Could not connect to database");
        mysqli_select_db($conn, $dbname);
        $query = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($conn, $query);
        $rowSelected = mysqli_num_rows($result);
        if ($rowSelected == true) {
            header("Location: welcome.php");
        } else {

            $_SESSION['fail'] = $_SESSION['fail'] + 1;
            echo $hashPass;
            echo "User or Password is Wrong!";
        }
    } else {
        
    }
} else {
    $_SESSION['fail'] = 0;
}
?>




<head> <title>Login page</title> </head>

<!-- from for login -->
<form method ="post" action="index.php">
    <label for ="Username">Username:</label><br/>
    <input type="text" name="username" id="username"><br/>

    <label for ="password">password:</label><br/>
    <input type="password" name="password" id="password"><br/>

    <br/>
    <input type="submit" value="Log In">
</form>

<br/>

<form method ="post" action="fail attempts.php">
    <input type="submit" value="Attempts">
</form>

<br/>

<form method ="post" action="Signup.php">
    <input type="submit" value="Sign up">
</form>