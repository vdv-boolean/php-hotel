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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>  
        <div class="container">
            <header class="d-flex justify-content-center m-4">
                <h1>Trova l'hotel giusto per te!</h1>
            </header>
            <main>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col">Nome</th>
                            <th class="col">Descrizione</th>
                            <th class="col">Parcheggio</th>
                            <th class="col">Voto</th>
                            <th class="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody><?php
                        foreach ($hotels as $hotel) {
                            $with_park=$hotel['parking']? 'Si':'No';?>
                            <tr>
                                <td><?= $hotel["name"] ?></td>
                                <td><?= $hotel["description"] ?></td>
                                <td><?= $with_park ?></td>
                                <td><?= $hotel["vote"] ?></td>
                                <td><?= $hotel["distance_to_center"] ?> km</td> 
                            </tr><?php 
                        }?> 
                    </tbody>
                </table>
            </main>
        </div>
    </body>
</html>