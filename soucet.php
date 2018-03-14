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
            $nasobek = $_POST['cislo1'] * $_POST['cislo2'];
            $deleni = $_POST['cislo1'] / $_POST['cislo2'];
            echo("Součet čísel je  " .  $soucet . ", odpočet čísel je " . $odpocet . ", násobek dvou zadaných čísel je "
                    . $nasobek . ", vydělením těchto čísel dostanu číslo " . $deleni . ".");
                                  
        ?>
        
        <br>
        
        <?php
                echo("Děkuji za použití mé kalkulačky. Hezký den, vole!")
        ?>
    </body>
</html>
