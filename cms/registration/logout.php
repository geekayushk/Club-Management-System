<?php
session_start();
unset($_SESSION['uid']);
unset($_SESSION['usn']);
unset($_SESSION['name']);
unset($_SESSION['tname']);
unset($_SESSION['tid']);
header('location:../index.php');

?>