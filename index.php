<?php

require_once './Models/Movie.php';
require_once './Models/Director.php';
require_once 'db.php'

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
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <!-- css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
        include './Views/partials/navbar.php';
    ?>

    <div class="container px-5 py-4">

    <h2 class="pb-4">Movies</h2>

        <table class="table table-striped">
    
            <thead class="table-dark">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Release Year</th>
                    <th scope="col">Director</th>
                    <th scope="col">Lenght</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Vote</th>
                </tr>
            </thead>
    
            <tbody>
            
            <?php 
    
                foreach($movies as $movie) {
    
                ?>
    
                    <tr>
                        <td><?= $movie->title ?></td>
                        <td><?= $movie->releaseYear ?></td>
                        <td><?= $movie->director->getFullDirectorName() ?></td>
                        <td><?= $movie->length ?></td>
                        <td><?php 
                                foreach($movie->genres as $genre) echo $genre . '<br>'
                            ?></td> 
                        <td><?= $movie->vote ?> star</td>
                    </tr>
    
                <?php
    
                }
            
            ?>
    
            </tbody>
    
        </table>

    </div>

    <?php
        include './Views/partials/footer.php';
    ?>
    
    <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>