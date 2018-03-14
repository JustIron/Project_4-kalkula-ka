<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Kalkulačka</title>
    </head>
    <body>
        <?php
            $soucet = $_POST['cislo1'] + $_POST['cislo2'];
            $odpocet = $_POST['cislo1'] - $_POST['cislo2'];
            echo("Soucet cisel je  " .  $soucet . " a odpocet cisel je: " . $odpocet);
        ?>
    </body>
</html>
