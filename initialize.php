<?php

require 'core/User.php';

session_start();

if(!isset($_SESSION['user_id'])) 
{
  header('Location: http://localhost:8080/www/sporty/index.php');
}

$currentUser = new User();

$currentUser->setUserDetails($_SESSION['user_id']);