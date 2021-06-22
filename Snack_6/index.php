<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>

    <style>
        h2{
            text-transform: capitalize;
        }
        div{
            width: 400px;
            padding: 1rem;
        }
        .teachers{
            background-color: grey;
        }
        .pm{
            background-color: lightgreen;
        }
    </style>
</head>

<body>

<h1>Groups</h1>

<!-- Stampiamo il nostro array -->
<?php foreach($db as $group => $item) {
            echo "<h2>$group</h2>";
            foreach($item as $item_details) {
                // mettendo gli insegnanti in un rettangolo grigio 
                if ($group == 'teachers'){
                echo 
                "<div class='teachers'>
                    <span><strong>Name: </strong>{$item_details["name"]}</span>
                    <span><strong>Lastname: </strong>{$item_details["lastname"]}</span>
                </div>";
                } 
                // e i PM in un rettangolo verde.
                else {
                echo
                "<div class='pm'>
                    <span><strong>Name: </strong>{$item_details["name"]}</span>
                    <span><strong>Lastname: </strong>{$item_details["lastname"]}</span>
                </div>";
                }
            }
        }?>
    
</body>

</html>