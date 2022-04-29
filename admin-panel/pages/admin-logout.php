<?php

session_start();

unset($_SESSION['UserLogin']);
unset($_SESSION['Position']);
echo header("Location: admin-login.php");
?>