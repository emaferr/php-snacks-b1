<?php
//Passare come parametri GET name, mail e age e verificare
var_dump($_GET['name']);
var_dump($_GET['email']);
var_dump($_GET['age']);

//che name sia più lungo di 3 caratteri, 
//che mail contenga un punto e una chiocciola 
//che age sia un numero. 
if (filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
    echo $_GET['email'];
}

//Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <h1>Log in</h1>

    <form action="">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">
        <label for="name">EMAIL</label>
        <input type="email" name="email" id="email">
        <label for="name">AGE</label>
        <input type="number" name="age" id="age">
   
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <div class="result">

    </div>
    
</body>

</html>