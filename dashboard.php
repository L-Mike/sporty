<?php

include 'initialize.php';

$sportsList = $currentUser->getSportsList();

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <title>Sporty</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/dashboard.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
    </head>

    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Welcome back, <?php echo ucfirst($currentUser->getUsername());?>!</h1>
                    <hr>
                    <p>Email: <?php echo $currentUser->getEmail();?></p>
                    <p>Phone: <?php echo $currentUser->getPhone();?></p>
                    <p>Facebook: <?php echo $currentUser->getFacebookUrl();?></p>
                    <hr>
                    <p>
                    <a href="myEvents.php">My events</a> | 
                    <a href="eventCreate.php">Create event</a> | 
                    <a href="editProfile.php">Edit profile</a> | 
                    <a href="logout.php">Log out</a>     
                    </p>            
                </div>
                
                <?php
                
                foreach ($sportsList as $category)
                    
                {
                    
                ?>
                
                <div class="alert alert-info">
                    <h2><strong><?php echo $category['sport_name']; ?></strong></h2>
                    <em><q><strong><?php echo $category['sport_description']; ?></strong></q></em>
                    <p><strong>Events: <?php echo $category['sport_events']; ?></strong></p>
                    <hr>
                    <a href="events.php?filter=<?php echo $category['sport_name']; ?>" class="btn btn-info">See all events</a>
                </div>
                
                <?php
                    
                }
                
                ?>
            
            </div>
        </div>
    </body>

    </html>