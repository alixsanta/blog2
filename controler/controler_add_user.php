<?php
     
     include '../utils/connectBdd.php';
     include '../model/model_user.php';
     include '../view/view_add_user.php';
    
    $message = "";
    
    if(isset($_POST['addUser'])){
        
        if($_POST['nom_util'] !="" AND $_POST['prenom_util'] !=""
        AND $_POST['mail_util'] !="" AND $_POST['mdp_util'] !=""){
            $util = new Utilisateur($_POST['nom_util'], $_POST['prenom_util'],
            $_POST['mail_util'], $_POST['mdp_util']);
            $util->setPwdUtil(password_hash($util->getmdpUtil(),PASSWORD_DEFAULT));
            $mail = $util->showUserByMail($bdd);
            if(empty($mail)){
                $util->createUser($bdd);
                $message = 'Le compte '.$util->getNameUtil().' '.$util->getFirstNameUtil().' à été ajouté en BDD';
            }
            else{
                $message = "les informations sont incorrectes";
            }
        }
        else{
            $message =  "Veuillez compléter tous les champs du formulaire";
        }
    }
    else{
        $message = "Cliquez sur ajouter pour créer un compte utilisateur";
    }
    echo $message;
?>