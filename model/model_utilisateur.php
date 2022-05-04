<?php 
    class Utilisateur{
        /* ------------------------------ ATTRIBUTS ------------------------------ */
        protected $id;
        protected $nom;
        protected $prenom;
        protected $mail;
        protected $mdp;
        protected $img;
        protected $status;
        protected $role;



        /* ------------------------------ CONSTRUCTEUR ------------------------------ */
        public function __construct($nom, $prenom, $mail, $mdp){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->mdp = $mdp;
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

        /**
         * Get the value of prenom
         */ 
        public function getPrenom():string{
            return $this->prenom;
        }

        /**
         * Set the value of prenom
         */ 
        public function setPrenom($prenom):void{
            $this->prenom = $prenom;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail():string{
            return $this->mail;
        }

        /**
         * Set the value of mail
         */ 
        public function setMail($mail):void{
            $this->mail = $mail;
        }

        /**
         * Get the value of mdp
         */ 
        public function getMdp():string{
            return $this->mdp;
        }

        /**
         * Set the value of mdp
         */ 
        public function setMdp($mdp):void{
            $this->mdp = $mdp;
        }

        /**
         * Get the value of img
         */ 
        public function getImg():string{
            return $this->img;
        }

        /**
         * Set the value of img
         */ 
        public function setImg($img):void{
            $this->img = $img;
        }

        /**
         * Get the value of status
         */ 
        public function getStatus():int{
            return $this->status;
        }

        /**
         * Set the value of status
         */ 
        public function setStatus($status):void{
            $this->status = $status;
        }

        /**
         * Get the value of role
         */ 
        public function getRole():int{
            return $this->role;
        }

        /**
         * Set the value of role
         */ 
        public function setRole($role):void{
                $this->role = $role;
        }



        /* ------------------------------ METHODES ------------------------------ */        
    }
?>

