<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/style/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <h3>Créez votre Compte:</h3>
    <form action="" method="post">
        <p>Votre nom<input type="text" name="nom_util"></p>
        <p>Votre Prénom<input type="text" name="prenom_util"></p>
        <p>Votre adresse Mail<input type="email" name="mail_util"pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" 
        name="email" required></p>
        <p>Votre Mot de passe<input type="password" name="mdp_util" required></p>
        <p>êtes vous Administrateur?<input type="checkbox" id="status" name="check"></p>
        <!-- <p>vas y mets une dickPic!!<input type="file" name="img" accept="image/png, image/jpeg"></p> -->
        <p><input type="submit" value="Ajouter utilisateur" name="addUser"></p>
    </form>
</body>
</html>