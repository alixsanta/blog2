<?php 
    class Role{
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
    }
?>

