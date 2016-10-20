<?php

include 'initialize.php';

$myEventsList = $currentUser->getMyEvents($currentUser->getId());

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
                <h1>These are your events, <?php echo ucfirst($currentUser->getUsername()); ?>!</h1>
                <hr>
                <p>
                <a href="eventCreate.php">Create</a> |
                <a href="editProfile.php">Edit</a> | 
                <a href="logout.php">Logout</a>  
                </p>
                <p>
                <a href="dashboard.php">< Back</a>    
                </p>
            </div>
            
            <?php
            
            foreach ($myEventsList as $myEvent)
            
            {
                
            ?>
                    
                <div class="col-md-4">
                    <div class="alert alert-danger text-center">
                        <h2 style="text-decoration: underline;"><strong><?php echo $myEvent['sport_name']; ?></strong></h2>
                        <h3><strong><?php echo $myEvent['event_title']; ?></strong></h3>
                        <p><strong>Date & time: <?php echo $myEvent['event_date']; ?> @ <?php echo $myEvent['event_time']; ?>h</strong></p>
                        <p><strong>Payers: <?php echo $myEvent['event_going']; ?>/<?php echo $myEvent['event_players']; ?></strong></p>
                        <br>
                        <a href="eventDelete.php?filter=<?php echo $myEvent['sport_name']; ?>&eventID=<?php echo $myEvent['event_id']?>" class="btn btn-danger"><strong>Delete event</strong></a>
                    </div>
                </div>
            
            <?php
            
            }
            
            ?>
            
        </div>
    </div>
</body>
</html>