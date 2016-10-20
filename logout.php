<?php

session_start();

unset($_SESSION['user_id']);

header('Location: http://localhost:8080/www/sporty/index.php');

?>