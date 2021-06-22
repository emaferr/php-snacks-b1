<?php

// Creare un array contenente qualche alunno di un’ipotetica classe. 
$classC = [
    // Ogni alunno avrà Nome, Cognome 
    // e un array contenente i suoi voti scolastici.
    [
        'name' => 'Emanuele',
        'surname' => 'Ferrauto',
        'grades_subjects' => [8,9,8.5,9.5,7.5]
    ],
    [
        'name' => 'Martina',
        'surname' => 'Pilato',
        'grades_subjects' => [6,7,6.5,5.5,7]
    ],
    [
        'name' => 'Anita',
        'surname' => 'Giardina',
        'grades_subjects' => [8,9,9,8,7.5]
    ],
    [
        'name' => 'Enea',
        'surname' => 'Bruzaniti',
        'grades_subjects' => [7,8,6.5,7,7]
    ],
    [
        'name' => 'Flavia',
        'surname' => 'Patti',
        'grades_subjects' => [8,9,8.5,9.5,7.5]  
    ]
    ];
 
// var_dump($classC);

/*
Calcolo la media di una serie di numeri
@param array $nums array di valori numerici
*/
function calcolaMedia($nums) {
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
      $res += $n;
    }
    return $res/$qt;
  }

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>

</head>

<body>

    <h1>Class C</h1>

    <!-- Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    <?php for ($i=0; $i < count($classC); $i++) { 
        $student = $classC[$i];
        $media = calcolaMedia($student['grades_subjects']);
        ?>
        <ul>
            <li><strong>Name: </strong><?php echo $student['name']?></li>
            <li><strong>Surname: </strong><?php echo $student['surname']?></li>
            <li><strong>Average grades: </strong><?php echo $media?></li>
        </ul>

    <?php }
    ?>

</body>

</html>