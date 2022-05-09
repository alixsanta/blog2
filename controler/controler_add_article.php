<?php 
    /* ------------------------------ IMPORTS ------------------------------ */
    include './utils/connectBDD.php';
    include './model/model_article.php';
    include './model/model_categorie.php';
    include './view/view_add_article.php';


    /* ------------------------------ LOGIQUE ------------------------------ */
    /**
     * logique pour la liste des categorie
     */
    // on creer une nouvelle instance de Categorie
    $all = new Categorie(null);
    // on recupere la liste des categories en BDD
    $data = $all->getAllCat($bdd);
    foreach($data as $value){
        echo '
        <script>
            addOption("'.$value->nom_cat.'", "'.$value->id_cat.'");
        </script>';
    }

    
    /**
     * logique pour l'ajout d'un article
     */
    // on verifie si les champs osnt remplis et non vide
    if(isset($_POST['nom_art']) && ($_POST['nom_art'] != "") &&
    isset($_POST['content_art']) && ($_POST['content_art'] != "") &&
    isset($_POST['categorie']) && ($_POST['categorie']!= "default")){
        $nom = $_POST['nom_art'];
        $nom = mb_strtoupper($nom, "UTF-8");
        $content = $_POST['content_art'];
        $cat = intval($_POST['categorie']);
        $date = date('Y-m-d'); //récupére la date au format 2022-05-03
        $newArt = new Article($nom, $content, $date, $cat);
        $newArt->addArticle($bdd);
        echo '<p>L\'article : '.$newArt->getNom().' a été ajouter en BDD</p>';
    }
    else{
        echo "<p>Veuillez remplir tous les champs du formulaire</p>";
    }
?>

