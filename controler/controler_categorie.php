<?php 
    /* ------------------------------ IMPORTS ------------------------------ */
    include './utils/connectBDD.php';
    include './model/model_categorie.php';
    include './view/view_categorie.php';


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
     * logique pour l'ajout d'une categorie
     */
    // on verifie si le champ est rempli est non vide
    if(isset($_POST['nom_cat']) && ($_POST['nom_cat'] != "")){
        $nom = $_POST['nom_cat'];
        // pour avoir la categorie en majuscule
        $nom = mb_strtoupper($nom, "UTF-8");
        // on creer une nouvelle instance de Categorie 
        $newCat = new Categorie($nom);
        // on recupere la liste des categories déjà en BDD
        $data = $newCat->getAllCat($bdd);
        $test = false;
        // on compare la categorie saisie avce chacune des categories en BDD pour eviter les doublons
        foreach($data as $value){
            if($value->nom_cat == $newCat->getNom()){
                $test = true;
            }
        }
        // on verifie si on n'a pas trouver la categorie en BDD
        if(!$test){
            // on l'ajoute en BDD
            $newCat->addCat($bdd);
            echo '<p>La catégorie '.$newCat->getNom().' a été ajouter en BDD</p>';
        }
        else{
            echo "<p>Catégorie déjà existante</p>";
        }
        // on refresh la page après 1s
        echo '
        <script>
            setTimeout(()=>{
            document.location.href="/tpblog/categorie"; 
            }, 1000);
        </script>';
    }
    else{
        echo "<p>Veuillez remplir le formulaire</p>";
    }
?>

