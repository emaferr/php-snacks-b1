<?php

// Creare un array con 15 numeri casuali, 
$numbers = array();

for ($i=0; $i < 15 ; $i++) { 
    # code...
    $number = rand(0,100);
    // tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    if (!in_array($number, $numbers)) {
        $numbers[] = $number;
    }else {
        $i--;
    }

}  

// var_dump($numbers);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>

<body>

    <h1>Random numbers</h1>

    <ul>
    <?php for ($n=0; $n < count($numbers) ; $n++) { 
        $number = $numbers[$n]
        ?>
        <li><?php echo $number?></li>
     <?php }
    ?>
    </ul>
    
</body>

</html>
