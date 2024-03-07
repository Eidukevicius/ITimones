<?php

class ITImone {
    public static function naujasDarbuotojas($vardas, $pareigos) {
        return new Programuotojas($vardas, $pareigos);
    }
}

$programuotojas = ITImone::naujasDarbuotojas('Jonas Jonaitis', 'Programuotojas');
$testeris = new Testeris('Ona Onaitė', 'Testuotoja');
$vadovas = new Vadovas('Petras Petraitis', 'Projekto vadovas');

?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Įmonės Darbuotojai</title>
</head>
<body>
    <h1>IT Įmonės Darbuotojai</h1>
    <ul>
        <li><?= $programuotojas->gautiVarda() ?> - <?= $programuotojas->gautiPareigas() ?> - <?= $programuotojas->dirbti() ?></li>
        <li><?= $testeris->gautiVarda() ?> - <?= $testeris->gautiPareigas() ?> - <?= $testeris->dirbti() ?></li>
        <li><?= $vadovas->gautiVarda() ?> - <?= $vadovas->gautiPareigas() ?> - <?= $vadovas->dirbti() ?></li>
    </ul>
</body>
</html>