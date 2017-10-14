<?php
session_start();  
    echo "Invalid username/password! " . $_SESSION['fail'];

?>