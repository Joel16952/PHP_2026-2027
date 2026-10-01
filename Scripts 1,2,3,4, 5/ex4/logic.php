<?php
    $tipo = $_POST['tipo'];
    switch ($tipo) {
        case 'rock':
            echo 'Rock & roll!';
            break;
        case 'pop':
            echo 'Pop-corn';
            break;
        case 'jazz':
            echo 'Chill';
            break;
        case 'reggeton':
            echo 'Des-pa-cito';
            break;
    }
    echo '<form action="index.php" method="post">
        <input type="submit" value="Tornar"></form>';
    ?>