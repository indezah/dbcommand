<?php
session_start();

$role = $_SESSION['role'];

$conn = mysqli_connect('localhost',$role,'abcd1234','sewana_db');

if(!$conn){
    $err = mysqli_connect_error();
    header("Location: ./panel.php?bstatus=Error: $err");
    exit();
}
?>