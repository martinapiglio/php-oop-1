<?php

require_once './Models/Movie.php';

$american_beauty = new Movie('American Beauty', '1999', 'Sam Mendes', '2h 2min', 'Drama');
$alexander = new Movie('Alexander', '2005', 'Oliver Stone', '2h 55min', 'Drama');
$your_name = new Movie('Your Name', '2016', 'Makoto Shinkai', '1h 52min', 'Romance');
$ace_ventura = new Movie('Ace Ventura', '1994', 'Tom Shadyac', '1h 26min', 'Comedy');

$movies = [$american_beauty, $alexander, $your_name, $ace_ventura];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <h1>Movies</h1>

        <table class="table">
    
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Release Year</th>
                    <th>Director</th>
                    <th>Lenght</th>
                    <th>Genre</th>
                    <th>Vote</th>
                </tr>
            </thead>
    
            <tbody>
            
            <?php 
    
                foreach($movies as $ingleMovie) {
    
                ?>
    
                    <tr>
                        <td><?= $ingleMovie->title ?></td>
                        <td><?= $ingleMovie->releaseYear ?></td>
                        <td><?= $ingleMovie->director ?></td>
                        <td><?= $ingleMovie->length ?></td>
                        <td><?= $ingleMovie->genre ?></td>
                        <td><?= $ingleMovie->vote ?> star</td>
                    </tr>
    
                <?php
    
                }
            
            ?>
    
            </tbody>
    
        </table>

    </div>
    
    <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>