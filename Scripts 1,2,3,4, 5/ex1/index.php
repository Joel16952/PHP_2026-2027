<!DOCTYPE html>
<html>
    <body>
        <h1>Formulari de contacte</h1>
        <form action="logic.php" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom"><br>
            <label for="cognoms">Cognoms:</label>
            <input type="text" id="cognoms" name="cognoms"><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br>
            <label for="missatge">Missatge:</label><br>
            <textarea id="missatge" name="missatge" rows="10" cols="30"></textarea>
            <input type="submit" value="Envia">
        </form>
    </body>
</html>
