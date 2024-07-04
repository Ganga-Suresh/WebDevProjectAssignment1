<?php include('reusables/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/styles.css">

</head>
<body>
  <?php include('reusables/nav.php'); ?>
  <?php 
    $query = 'SELECT * FROM museums';
    $museum = mysqli_query($connect, $query);
    
    foreach($museum as $m)
    echo '<div class="container">
            <div class="display">
                <h2>'.$m['MuseumName'].'</h2>
                <p>'.$m['streetAddress'].', '.$m['city'].'</p>
                <p>'.$m['zipcode'].'</p>
                <form action="update.php" method="GET">
                            <input type="hidden" name="id" value="' . $m['museumID'] . '">
                            <button type="submit" class="edit" name="updateSchool">Update</button>
            </div>
         </div>'
  ?>