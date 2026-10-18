<?php
session_start();

if (!isset($_SESSION["samarreta"])) {
    $_SESSION["samarreta"] = 0;
    $_SESSION["pantalons"] = 0;
}

$confirmada = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["confirmar"])) {
        unset($_SESSION["samarreta"]);
        unset($_SESSION["pantalons"]);

        $confirmada = true;
    } else {
        $producte = $_POST["producte"] ?? "";

        $quantitat = filter_var(
            $_POST["quantitat"] ?? ""
        );

        if ($quantitat !== false && $quantitat > 0) {
            if ($producte == "samarreta") {
                $_SESSION["samarreta"] += $quantitat;
            } elseif ($producte == "pantalons") {
                $_SESSION["pantalons"] += $quantitat;
            }
        }

        header("Location: index.html");
        exit;
    }
}

$samarretes = $_SESSION["samarreta"] ?? 0;
$pantalons = $_SESSION["pantalons"] ?? 0;

$totalSamarretes = $samarretes * 95;
$totalPantalons = $pantalons * 30;
$total = $totalSamarretes + $totalPantalons;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la compra</title>
</head>
<body>
    <?php if ($confirmada) { ?>

        <h1>Compra confirmada!</h1>
        <p>Has pagat i la cistella s'ha buidat.</p>

    <?php } elseif ($total == 0) { ?>

        <p>La cistella està buida.</p>

    <?php } else { ?>

        <h1>Resum de la compra</h1>

        <?php if ($samarretes > 0) { ?>
            <p>
                Samarretes: <?php echo $samarretes; ?>
                × 95 € = <?php echo $totalSamarretes; ?> €
            </p>
        <?php } ?>

        <?php if ($pantalons > 0) { ?>
            <p>
                Pantalons: <?php echo $pantalons; ?>
                × 30 € = <?php echo $totalPantalons; ?> €
            </p>
        <?php } ?>

        <p>Total: <?php echo $total; ?> €</p>

        <form action="cistella_compra.php" method="post">
            <button type="submit" name="confirmar" value="si">
                Confirmar compra
            </button>
        </form>

    <?php } ?>

    <br>

    <a href="index.html">Tornar a la botiga</a>
</body>
</html>