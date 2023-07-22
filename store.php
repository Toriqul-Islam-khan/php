<?php
session_start();
// echo "<pre>";
// print_r($_POST);
$data = [
    'Id' => $_POST['id'],
    'Title' => $_POST['title'],
];
$_SESSION['pro'][] = $data;

echo "<pre>";
print_r($_SESSION['pro']);
header('location: ./class6.php');
