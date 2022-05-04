<?php

    include './utils/connectBdd.php';
    include './model/model_article.php';
    include './view/view_show_all_article.php';

    $article = new Article(null, null,null, null);

    $tab = $article->showAllArticle($bdd);
    
    foreach($tab as $value){
        echo '<li>'.$value->nom_art.'</li>';echo 'bonjour';
    }
?>