<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body> 
    
<form class="container my-3">
    <label for="search" >Search Hotel:</label>
    <input type="text" id="search" name="search">
    <input type="submit" value="Search">
</form>

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


// print_r($hotels);

echo '<table class="m-2 p-2 border">';
    echo '<tr class="border"><th class="p-2">' . "Hotel Name" . "</th> <th>" . 
        "Hotel Description" . '</th><th class="p-2">' . 
        "Distance to center" . '</th><th class="p-2">' . 
        "Parking Available?" . '</th><th class="p-2">' . 
        "Customer vote 1/5" . "</th></tr>";
        foreach ($hotels as $hotel) {
    # code...
            echo '<tr><td class="p-2 border">' . $hotel['name'] . '</td> <td class="border p-2">' . 
            $hotel['description'] . '</td><td class="px-5 border">' . 
            $hotel['distance_to_center'] . '</td><td class="px-5 border">' . 
            ($hotel['parking'] ? 'Yes' : 'No') . '</td><td class="px-5 border">' . 
            $hotel['vote'] . "</td></tr>";
        }
echo "</table>";
?>
</body>
</html>

