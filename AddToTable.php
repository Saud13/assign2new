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

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `users`(`Username`, `Password`, `First name`, `Last name`, `E-mail`)
			VALUES ('$user','$pass','$fname' ,'$lname','$email')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
} catch (PDOException $e) {

    echo $sql . "<br>" . $e->getMessage();
}
?>