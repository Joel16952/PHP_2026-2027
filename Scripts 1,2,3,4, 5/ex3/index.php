<!DOCTYPE html>
<html>
    <head>
        <title>Hola!</title>
    </head>
    <body>
    <?php
        $hour = (int) date('G');

        echo 'Hora del servidor: ' . date('H:i:s') . '<br>';

        if ($hour < 14 && $hour > 5) {
            echo 'Bon dia';
        } elseif ($hour > 14 && $hour < 19) {
            echo 'Bona tarda';
        } else {
            echo 'Bona nit';
        }
    ?>
    </body>
</html>
