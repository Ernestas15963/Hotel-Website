<?php
    require __DIR__ . '../src/mail.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Welcome to our luxury hotel the wings.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/863029ac60.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <title>THE WINGS</title>
    </head>

    <body>
        <?php
    
        include('app/header.php');
        include('app/content.php');
        include('app/footer.php');
    
        ?>



        <script src="js/js.js"></script>
        <script src="js/js2.js"></script>
    </body>

</html>