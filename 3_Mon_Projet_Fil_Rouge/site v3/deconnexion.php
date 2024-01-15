<?php
session_start();
session_destroy();
unset($_COOKIE['PHPSESSID']);
header("location:login.html");
?>