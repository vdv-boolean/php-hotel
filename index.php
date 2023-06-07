<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trova Hotel</title>
    </head>
    <body>
        
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                    <th>Voto</th>
                    <th>Distanza dal centro</th>
                </tr><?php 

                foreach ($hotels as $hotel) {?>
                <tr>
                    <th><?= $hotel["name"] ?></th>
                    <th><?= $hotel["description"] ?></th>
                    <th><?= $hotel["vote"] ?></th>
                    <th><?= $hotel["distance_to_center"] ?></th> 
                </tr><?php 
                }?> 
            </table>
    </body>
</html>