<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Liste des catégories</h1>
    <label for="liste_cat">Liste des catégories :</label>
    <select name="categorie" id="liste_cat">
        <option value="default">----- CATEGORIES -----</option>
    </select>
    <h1>Ajouter une catégorie</h1>
    <form action="" method="post">
        <p>Saisir la categorie :</p>
        <p><input type="text" name="nom_cat"></p>
        <p><input type="submit" name="add" value="Ajouter"></p>
    </form>
    <script src="./asset/script/script.js"></script>
</body>
</html>

