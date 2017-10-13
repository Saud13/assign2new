<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosc";

$user = $_POST['username'];
$pass = $_POST['password'];
$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['Email'];


// End
//$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
//$salt = sprintf("$2a$%02d$", $cost) . $salt;
//$salted_password = $pass . $salt;  // apply salt to password
# hash the password
//$hashPass = hash('sha256', $salted_password);



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //Another way for hashing
    $encrypted_password = password_hash($pass, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO `users`(`Username`, `Password`, `First name`, `Last name`, `E-mail`)
			VALUES ('$user','$encrypted_password','$fname' ,'$lname','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    header("Location: index.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
