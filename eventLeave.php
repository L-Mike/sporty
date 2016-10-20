<?php

include 'initialize.php';

$filter = $_GET['filter'];
$eventID = $_GET['eventID'];

$currentUser->eventLeave($eventID);

Header("Location: http://localhost:8080/www/sporty/events.php?filter={$filter}");