<?php
if (isset($_POST['enviar'])) {
    setcookie("majoredat", $_POST["majoredat"]);
    setcookie("idioma", $_POST["idioma"]);
    setcookie("moneda", $_POST["moneda"]);
    header("Location: informacio.php");
    exit;
}
?>

<!DOCTYPE html>
<head>
    <title>Bodega</title>
</head>
<body>
    <h1>Bodega</h1>

    <form method="post">
        <label>Ets major d'edat?</label>
        <select name="majoredat">
            <option value="">Selecciona</option>
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>

        <label>Idioma:</label>
        <select name="idioma" >
            <option value="">Selecciona</option>
            <option value="ca">Català</option>
            <option value="es">Espanyol</option>
            <option value="en">Anglès</option>
        </select>

        <label>Moneda:</label>
        <select name="moneda" required>
            <option value="">Selecciona</option>
            <option value="euros">Euros</option>
            <option value="lliures">Lliures</option>
            <option value="dolars">Dòlars</option>
        </select>

        <button type="submit" name="enviar">Entrar</button>
    </form>
</body>
</html>