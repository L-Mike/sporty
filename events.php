<?php

include 'initialize.php';

$filter = $_GET['filter'];

$eventsList = $currentUser->getEventsList($filter);

?>

<!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Sporty</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/events.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
    </head>

    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Let's play some <?php echo lcfirst($filter); ?>, <?php echo ucfirst($currentUser->getUsername()); ?>!</h1>
                    <hr>
                    <p>
                    <a href="eventCreate.php">Create event</a> | 
                    <a href="editProfile.php">Edit profile</a> | 
                    <a href="logout.php">Logout</a>   
                    </p> 
                    <p>
                    <a href="dashboard.php">< Back</a>
                    </p>
                </div>
                
                <?php
                
                foreach ($eventsList as $event)
                
                {
                        
                ?>
                    
                    <div class="alert alert-danger">
                        <h2><strong><?php echo $event['event_title']; ?></strong> | created by: <strong><?php echo $event['user_name']; ?></strong></h2>
                        <p><strong>Date & time: <?php echo $event['event_date']; ?> @ <?php echo $event['event_time']; ?>h</strong></p>
                        <p><strong>Players: <?php echo $event['event_going']; ?>/<?php echo $event['event_players']; ?></strong></p>
                        <br>
                        <a href="eventJoin.php?filter=<?php echo $filter; ?>&eventID=<?php echo $event['event_id']?>" class="btn btn-danger"><strong>JOIN</strong></a>
                        <a href="eventLeave.php?filter=<?php echo $filter; ?>&eventID=<?php echo $event['event_id']?>" class="btn btn-danger"><strong>LEAVE</strong></a>
                    </div>
                    
                <?php
                        
                }
                    
                ?>
            </div>
        </div>
    </body>

    </html>