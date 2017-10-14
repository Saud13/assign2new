<!DOCTYPE HTML>
<html>
    <body bgcolor="#3399FF">

</html>

<?php
session_start();
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cosc";

if (isset($_SESSION['fail']) == true) {
    if (isset($_POST['username']) == true && isset($_POST['password']) == true) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = mysqli_connect($servername, $dbusername, $dbpassword) or die("Could not connect to database");
        mysqli_select_db($conn, $dbname);

        $sql = "SELECT * FROM users WHERE Username='$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $hash_pwd = $row['Password'];

        if (!password_verify($password, $hash_pwd)) {
            $_SESSION['fail'] = $_SESSION['fail'] + 1;
            echo "Wrong Username or Password";
        } else {
            $sq = "SELECT * FROM users WHERE Username = '$username' AND Password = '$hash_pwd'";
            $result = $conn->query($sq);

            header("Location: success.php");
        }
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

