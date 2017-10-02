

<?php
session_start();
echo "Logged In!    Hello, " . $_SESSION['username'] . " ,Your password is: " . $_SESSION['password'] . " Today's date : " . date("d/m/Y") . "  Time is " . date("H:i");



// start of change
if(!empty($_SESSION['authenticated'])){
    header('location: logout.php');
}
else{
    $_SESSION['authenticated'] = true;
    
    
}

?> 

//end of change 

<form method ="post" action="logout.php">
    <input type="submit" value="Logout">
</form>

<!DOCTYPE HTML>
<html>
    <body bgcolor="#3399FF">
        <h1> Welcome to COSC4806 Assign2</h1>
    </body>
</html>