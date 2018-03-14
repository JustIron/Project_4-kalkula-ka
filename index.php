<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Kalkulačka</title>
    </head>
    <body>
        <?php
            $soucet = $_GET['cislo1'] + $_GET['cislo2'];
            echo("Součet: $soucet");
        ?>
    </body>
</html>