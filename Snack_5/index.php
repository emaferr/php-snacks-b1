<?php

// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
$long_paragraph = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium autem fugit sapiente ipsam nisi molestias, iure, eos odit, eum magnam blanditiis. Neque, nesciunt? Vel quo repellat rerum nihil sit. Sapiente!. Lorem ipsum dolor, sit amet consectetur adipisicing elit.';
// Prendere il paragrafo e suddividerlo in tanti paragrafi. 
// Ogni punto un nuovo paragrafo.
$derived_paragraphs = explode(". ", $long_paragraph);

// var_dump($derived_paragraphs)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
<h1>Split paragraph</h1>
<h2>Long paragraph</h2>
<p><?php echo $long_paragraph?></p>
<h2>Derived paragraph </h2>
<ul>
    <?php for ($i=0; $i < count($derived_paragraphs) ; $i++) { 
        $paragraph = $derived_paragraphs[$i]
        ?>
        <li><?php echo $paragraph?></li>
     <?php }
    ?>
    </ul>    
</body>
</html>