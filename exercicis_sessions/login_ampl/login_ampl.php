<?php

session_start();

$usuari = $_POST["usuari"] ?? "";
$pwd = $_POST["pwd"] ?? "";

if (trim($usuari) != "" && $usuari === $pwd) {
    $_SESSION["usuari"] = $usuari;
} else {
    unset($_SESSION["usuari"]);
    header("Location: index.html");
    exit;
}

if (isset($_GET["sortir"])) {
    unset($_SESSION["usuari"]);
    header("Location: index.html");
    exit;
}

?>

<!DOCTYPE html>
<head>
    <title>Benvingut</title>
</head>
<body>
    <p>
        Usuari: <?php echo htmlspecialchars($_SESSION["usuari"]); ?>
        <a href="login_ampl.php?sortir=1">Desconnectar</a>
    </p>

    <h1>Benvingut</h1>
</body>
</html>