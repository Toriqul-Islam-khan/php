<?php
session_start();
$_GET['index'];
unset($_SESSION['pro'][$_GET['index']]);
header('location: ./class6.php');
