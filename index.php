<?php
    // ouverture de la session
    session_start();

    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';


    /*------------------------------------------- ROUTER -------------------------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        // route /tpblog/categorie  ->  ./controler/controler_categorie.php (Admin : liste categories + ajouter categorie)
        case $path === "/tpblog/categorie":
            include './controler/controler_categorie.php';
            break;
        // route /tpblog/shwoAllUser  ->  ./controler/controler_show_all_user_.php  (Admin : liste utilistaeur)
        case $path === "/tpblog/showAllUser":
            include './controler/controler_show_all_user.php';
            break;
        // route /tpblog/showArticle  ->  ./controler/controler_show_article.php (User : article + liste commentaire article)
        case $path === "/tpblog/showArticle":
            include './controler/controler_show_article.php';
            break;
        // route /tpblog/showUser  ->  ./controler/controler_show_user.php (User : detail compte + modif compte)
        case $path === "/tpblog/showUser":
            include './controler/controler_show_user.php';
            break;
        // route /tpblog/addArticle  ->  ./controler/controler_add_categorie.php (Admin : ajouter article)
        case $path === "/tpblog/addArticle":
            include './controler/controler_add_article.php';
            break;
        // route /tpblog/login  ->  ./controler/controler_add_categorie.php (Visiteur : connexion)
        case $path === "/tpblog/login":
            include './controler/controler_connexion.php';
            break;
        // route /tpblog/deco  ->  ./controler/controler_deco.php (User + Admin)
        case $path === "/tpblog/deco":
            include './controler/controler_deco.php';
            break;
        // route /tpblog/  ->  ./controler/controler_show_all_article.php (Visiteur : liste articles)
        case $path === "/tpblog/":
            include './controler/controler_show_all_article.php';
            break;
        // autre route  ->  ./erreur.php
        case $path !== "/tpblog/":
            include './erreur.php';
            break;
        
    }
?>

