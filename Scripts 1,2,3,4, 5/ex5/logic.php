<?php
    if (
        isset($_POST['preu']) && isset($_POST['IVA'])
    ) {
        $preu = $_POST['preu'];
        $IVA = $_POST['IVA'];
        $preu_calculat = $preu - ($preu * ($IVA / 100));
        echo "El preu d'un producte de $preu €, amb un IVA de $IVA% és de $preu_calculat €";
    } else {
        echo "Error introduint les dades";
    }
    echo '<form action="index.php" method="post">
        <input type="submit" value="Tornar al formulari"></form>';
?>