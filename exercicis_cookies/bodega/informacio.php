<?php
if (
    !isset($_COOKIE["majoredat"]) ||
    !isset($_COOKIE["idioma"]) ||
    !isset($_COOKIE["moneda"])
) {
    header("Location: bodega.php");
    exit;
}

$majoredat = $_COOKIE["majoredat"];
$idioma = $_COOKIE["idioma"];
$moneda = $_COOKIE["moneda"];

if ($moneda == "euros") {
    $preu1 = "39 €";
    $preu2 = "29 €";
} elseif ($moneda == "lliures") {
    $preu1 = "33 £";
    $preu2 = "25 £";
} else {
    $preu1 = "43 $";
    $preu2 = "33 $";
}
?>

<!DOCTYPE html>
<head>
    <title>Bodega</title>
</head>
<body>
    <?php
    if ($majoredat == "no") {
        if ($idioma == "ca") {
            echo "<p>No et podem vendre alcohol si ets menor d’edat.</p>";
        } elseif ($idioma == "es") {
            echo "<p>No podemos venderte alcohol si eres menor de edad.</p>";
        } else {
            echo "<p>We cannot sell you alcohol if you are under 18.</p>";
        }
    } else {
        if ($idioma == "ca") {
            echo "<p>T’oferim el vi “Les Terrasses” a un preu de $preu1</p>";
            echo "<p>T’oferim el vi “La rioja” a un preu de $preu2</p>";
        } elseif ($idioma == "es") {
            echo "<p>Te ofrecemos el vino “Les Terrasses” a un precio de $preu1</p>";
            echo "<p>Te ofrecemos el vino “La rioja” a un precio de $preu2</p>";
        } else {
            echo "<p>We offer the wine “Les Terrasses” at a price of $preu1</p>";
            echo "<p>We offer the wine “La rioja” at a price of $preu2</p>";
        }
    }
    ?>
</body>
</html>