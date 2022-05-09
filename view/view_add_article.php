<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1>Ajouter un article</h1>
    <form action="" method="post">
        <p>Titre :</p>
        <input type="text" name="nom_art" id="">
        <p>Contenu :</p>
        <textarea name="content_art" id="content" cols="100" rows="10"></textarea>
        <p>
            <label for="liste_cat">Sélectionner une catégorie :</label>
            <select name="categorie" id="liste_cat">
                <option value="default">----- CATEGORIES -----</option>
            </select>
        </p>
        <p><input type="submit" name="add" value="Ajouter"></p>
    </form>
    <script src="./asset/script/script.js"></script>
</body>
</html>