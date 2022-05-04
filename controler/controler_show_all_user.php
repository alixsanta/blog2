<?php 
    /* ------------------------------ IMPORTS ------------------------------ */
    include './utils/connectBDD.php';
    include './model/model_utilisateur.php';
    include './view/view_show_all_user.php';


    /* ------------------------------ LOGIQUE ------------------------------ */
    $all = new Utilisateur(null, null, null, null);
    $data = $all->getAllUser($bdd);
    foreach($data as $value){
        echo '<p><input type="checkbox" name="idUtil[]" value="'.$value->id_util.'"> ' .$value->nom_util.' '.$value->prenom_util.'</p>';
    }
    echo '<p><input type="submit" value="Bannir"><input type="submit" value="Admin"></p>
    </form>';
?>

