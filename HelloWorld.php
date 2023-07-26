<?php
    echo "Hello World!";
    $numUm = rand(10,100);
    $numDois = rand(10,100);

    function teste($numUm, $numDois){
        return $numUm + $numDois;
    }
    echo "<br>";
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Um TESTE</title>
    </head>
    <body>
        <?php echo '<h1>'.teste($numUm, $numDois).'</h1>'?>        
</body>
</html>