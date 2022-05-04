<?php
    if(isset($_SESSION['connected'])){
        include './utils/connectBdd.php';
        include './model/model_user.php';
        include './view/view_show_user.php';
        //variable message
        $msg = "compte en attente de modification";
        //test si l'id existe
        if(isset($_GET['id']) AND $_GET['id'] !=""){
            $util = new Utilisateur(null, null, null, null);
            $util->setId($_GET['id']);
            $tab = $util->showUserById($bdd);
            $id_util = $tab[0]['id_util'];
            //script JS (injection des valeurs existante de l'utilisateur en bdd)
            echo "<script>
                    let id = '$id';
                    let nom = document.querySelector('#nom');
                    let prénom = document.querySelector('#prenom');
                    mail.value = mail;
                    mdp.value = mdp;
            </script>";
            //test si clic sur modifier
            if(isset($_POST['update'])){
                //test si les champs sont remplies
                if(isset($_POST['mail']) AND isset($_POST['mdp'])
                AND $_POST['mail'] !="" AND $_POST['mdp'] !=""){
                    //instance d'un nouvel objet avec le constructeur
                    $util = new Utilisateur($_POST['mail'], $_POST['mdp']);
                    //affectation de l'id 
                    $util->setId($_GET['id']);
                    //modification 
                    $util->updateUser($bdd);
                    //récupération du nouveau mail et mdp 
                    $newMail = $_POST['mail'];
                    $newMdp = $_POST['mdp'];
                    //message de modification
                    $msg =  "vos informations ont été modifiées";
                    echo "<script>
                    mail.value = '$newMail';
                    pwd.value = '$newMdp';
                    setTimeout(()=>{
                        document.location.href='/blog/'; 
                        }, 1500);
                    </script>";
                }
            }
        }
        else{
            header('Location: /blog/showUser?noId');
        }
        //Affichage en JS des Messages 
        echo "<script>zoneMsg.innerHTML = '$msg';</script>";
        }
        else{
            header('Location:./connexion?nosession');
        }
?>