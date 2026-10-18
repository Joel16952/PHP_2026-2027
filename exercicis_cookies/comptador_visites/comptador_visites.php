<?php
$contador = 1;
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
}
setcookie("contador", $contador);
?>

<html>
<head>
    <title>Botiga</title>
</head>
<body>
    <h2>Botiga</h2>
    <p>Nombre de visites: <?php echo $contador; ?></p>

    <form method="post">
    <label for="codi">Codi de descompte:</label>

    <input type="text" id="codi" name="codi">
    
    <button type="submit">Comprar</button>
</form>

<?php
if ($contador >= 10) {
    echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";
    } elseif ($contador >= 5) {
    echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
    }
?>

</body>
</html>


