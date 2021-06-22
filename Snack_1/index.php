<?php

//Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
//Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
$matches = [

    [
        'home_team' => ['Olimpia Milano', 55],
        'visiting_team' => ['Cantù', 60]
    ],
    [
        'home_team' => ['Virtus Roma', 58],
        'visiting_team' => ['Libertas Livorno', 52]
    ],
    [
        'home_team' => ['Openjobmetis Varese', 70],
        'visiting_team' => ['Germani Brescia', 82]
    ],

    [
        'home_team' => ['Umana Reyer Venezia', 80],
        'visiting_team' => ['Happy Casa Brindisi', 72]
    ]

];

// var_dump($matches)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <style>

        /* Match style */
        ul{
            list-style: none;
            padding: 0;
        }
        li{
            display: inline;
        }

    </style>

    <title>Snack 1</title>

</head>

<body>

    <h1>Matches first week</h1>
    <!-- Stampiamo a schermo tutte le partite con questo schema. Olimpia Milano - Cantù | 55-60  -->
    <?php for ($i=0; $i < count($matches) ; $i++) { 
        # code...
        $match = $matches[$i];
        ?>
        <!-- match layout -->
        <ul>
            <li><?php echo $match['home_team'][0] .' - ' ?></li>
            <li><?php echo $match['visiting_team'][0]?></li>
            <li><?php echo ' | ' .$match['home_team'][1] .' - '?></li>
            <li><?php echo $match['visiting_team'][1]?></li>
        </ul>

    <?php } ?>
    
</body>

</html>