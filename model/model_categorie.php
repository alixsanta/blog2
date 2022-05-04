<?php 
    class Categorie{
        /* ------------------------------ ATTRIBUTS ------------------------------ */
        protected $id;
        protected $nom;



        /* ------------------------------ CONSTRUCTEUR ------------------------------ */
        public function __construct($nom){
            $this->nom = $nom;
        }



        /* ------------------------------ GETTERS & SETTERS ------------------------------ */
        /**
         * Get the value of id
         */ 
        public function getId():int{
            return $this->id;
        }

        /**
         * Set the value of id
         */ 
        public function setId($id):void{
            $this->id = $id;
        }

        /**
         * Get the value of nom
         */ 
        public function getNom():string{
            return $this->nom;
        }

        /**
         * Set the value of nom
         */ 
        public function setNom($nom):void{
            $this->nom = $nom;
        }



        /* ------------------------------ METHODES ------------------------------ */
        // Fonction qui ajoute une categorie en BDD
        public function addCat($bdd):void{
            try{
                $req = $bdd->prepare('INSERT INTO categorie(nom_cat)
                VALUES(:nom_cat);');
                $req->execute(array(
                    "nom_cat" => $this->getNom()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        // Fonction qui renvoie la liste des categories en BDD
        public function getAllCat($bdd){
            try{
                $req = $bdd->prepare('SELECT * FROM categorie;');
                $req->execute();
                return $req->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        } 
    }
?>

