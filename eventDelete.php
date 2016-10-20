<?php

include 'initialize.php';

$eventID = $_GET['eventID'];

$currentUser->eventDelete($eventID);

Header("Location: http://localhost:8080/www/sporty/myEvents.php");