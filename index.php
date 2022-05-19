<?php

    $presentTime = new DateTime();
    $presentTimeDisplay = $presentTime->format('F d Y A g:i');

    $destinationTime = new DateTime('1988-07-20 03:40:00');
    $destinationTimeDisplay = $destinationTime->format('F d Y A g:i');
    
    $interval = $presentTime->diff($destinationTime);
    $intervalDisplay = $interval->format('%Y YEAR(S) %M MONTH(S) %D DAY(S) %H:%I HOUR(S)');

    $inThePastOrFuture = '';
    if ($interval->invert === 1) {
        $inThePastOrFuture = 'PAST';
    } else {
        $inThePastOrFuture = 'FUTURE';
    }

    $intervalInMinutes = ($interval->days*24*60);
    $litersOfFuelRequired = ($intervalInMinutes/10000);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Retour vers le futur</title>
</head>

<body>

    <div class="dashBoard">
        <p class="mx-5 text-center bg-dark destinationTime"><?= $destinationTimeDisplay ?></p>
        <h2 class="mx-5 text-center bg-dark text-white fs-5">DESTINATION TIME</h2>
        <hr>
        <p class="mx-5 text-center bg-dark presentTime"><?= $presentTimeDisplay ?></p>
        <h2 class="mx-5 text-center bg-dark text-white fs-5">PRESENT TIME</h2>
    </div>

    <div class="dashBoard2">
        <p class="mx-4 text-center bg-dark interval"><?= $intervalDisplay ?></p>
        <h2 class="mx-5 text-center bg-dark text-white fs-5">INTERVAL</h2>
        <hr>
        <p class="mx-5 text-center bg-dark inThePastOrFuture"><?= $inThePastOrFuture ?></p>
        <h2 class="mx-5 text-center bg-dark text-white fs-5">IN THE PAST OR FUTURE</h2>
        <hr>
        <p class="mx-5 text-center bg-dark intervalInMinutes"><?= $intervalInMinutes ?></p>
        <h2 class="mx-5 text-center bg-dark text-white fs-5">INTERVAL IN MINUTES</h2>
        <hr>
        <p class="mx-5 text-center bg-dark litersOfFuelRequired"><?= $litersOfFuelRequired ?> L</p>
        <h2 class="mx-5 text-center bg-dark text-white fs-5">FUEL REQUIRED</h2>
    </div>

</body>

</html>