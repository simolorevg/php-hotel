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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">4 Hotel</h1>
    <div class="container mb-2">
        <form action="index.php" method="get">
            <label for="park">
                Parcheggio:
            </label>
            <select name="park" id="park">
                <option value=""> </option>
                <option value="true">Si</option>
                <option value="false">No</option>
            </select>
            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrizione
                    </th>
                    <th>Parcheggio</th>
                    <th>Voto</th>
                    <th>Distanza dal centro(Km)</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_GET['park'])) {
                    $park_input = $_GET['park']; ?>
                    <?php if (empty($park_input)) { ?>
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr>
                                <td><?php echo $hotel['name']; ?></td>
                                <td><?php echo $hotel['description']; ?></td>
                                <td><?php if ($hotel['parking'] === true) {
                                        echo 'si';
                                    } else {
                                        echo 'no';
                                    } ?>
                                </td>
                                <td><?php echo $hotel['vote']; ?></td>
                                <td><?php echo $hotel['distance_to_center']; ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <?php foreach ($hotels as $hotel) {
                            if ($hotel['parking'] == $park_input) { ?>
                                <tr>
                                    <td><?php echo $hotel['name']; ?></td>
                                    <td><?php echo $hotel['description']; ?></td>
                                    <td><?php if ($hotel['parking'] === true) {
                                            echo 'si';
                                        } else {
                                            echo 'no';
                                        } ?>
                                    </td>
                                    <td><?php echo $hotel['vote']; ?></td>
                                    <td><?php echo $hotel['distance_to_center']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    <?php } ?>
                <?php } else { ?>
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td><?php if ($hotel['parking'] === true) {
                                    echo 'si';
                                } else {
                                    echo 'no';
                                } ?>
                            </td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>