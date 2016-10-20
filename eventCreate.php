<?php

  include 'initialize.php';

  $sportsList = $currentUser->getSportsList();

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Sporty</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/index.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> 
    </head>

    <body>

        <div class="container">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Create an event</h1>
                    <p>Organize some awesome events! Thank you.</p>
                    <p>
                    <a href="index.php">< Back</a>    
                    </p>       
                </div>

           <?php
                
            if ($_SERVER['REQUEST_METHOD'] == 'POST') 
            {
                $sportName = $_POST['sport_name'];
                $title = $_POST['title'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $players = $_POST['players'];
                
                $currentUser->eventCreate($sportName, $title, $date, $time, $players);
            }
                
            ?>
           
            <form action="" method="post">
                <div class="form-group">
                    <label for="sport_name">Sport name</label>
                    <select class="form-control" name="sport_name">
                        
                        <?php
                        
                        foreach ($sportsList as $category)
                        {
                            echo "<option value='{$category['sport_name']}'>{$category['sport_name']}</option>";
                        }
                        
                        ?>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" name="date">
                </div>
                <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control" name="time">
                </div>
                <div class="form-group">
                    <label for="players">Required players</label>
                    <input type="text" class="form-control" name="players">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Create event">
                </div>
            </form>
        </div>        
    </div>    
    </body>

    </html>
