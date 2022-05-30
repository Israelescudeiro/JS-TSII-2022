<?php

session_start();

if(!isset($_SESSION['id'])){
    header('location: /app/login.php');
    exit();
}