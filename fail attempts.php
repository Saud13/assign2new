<?php
session_start();
session_destroy();
 echo "Invalid username/password!" . $_SESSION['failed'];

?>