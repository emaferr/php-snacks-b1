<?php

// Creare un array di array. 
// Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 
// e come valore un array di post associati a quella data. 

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

// var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
    <style>
        div{
            padding: 1rem 0;
        }
        span{
            display: block;
        }
    </style>
</head>
<body>

    <h1>Blog post</h1>

    <!-- Stampare ogni data con i relativi post. -->
    <?php foreach($posts as $x => $post) {
            echo "<h2>Date of post {$x}</h2>";

            foreach($post as $post_details) {
                echo 
                "<div>
                    <span><strong>Title of post: </strong>{$post_details["title"]}</span>
                    <span><strong>Author of post: </strong>{$post_details["author"]}</span>
                    <span><strong>Text of post: </strong>{$post_details["text"]}</span>
                </div>";
            }
            echo "<hr>";
        }?>

</body>

</html>