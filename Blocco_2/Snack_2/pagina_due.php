<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitati</title>
</head>
<body>

<?php 
        $lista_invitati = [
            "Emanuele",
            "Fabio",
            "Beatrice",
        ];

        if (in_array($_GET["name"], $lista_invitati)) {
            echo "ok";
        } else {
            echo "ko";
        }
    ?>
    
</body>
</html>