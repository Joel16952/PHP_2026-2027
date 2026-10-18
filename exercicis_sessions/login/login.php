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
?>

<!DOCTYPE html>
<head>
    <title>Benvingut</title>
</head>
<body>
    <p>Usuari: <?php echo htmlspecialchars($_SESSION["usuari"]); ?></p>

    <h1>Benvingut</h1>

    <form action="index.html">
        <button type="submit">Tornar enrere</button>
    </form>
</body>
</html>