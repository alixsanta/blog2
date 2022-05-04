<?php
    class Utilisateur{
        //attributs
        protected $id_util;
        protected $nom_util;
        protected $prenom_util;
        protected $mail_util;
        protected $mdp_util;

        //constructeur
        public function __construct($name, $first, $mail, $password){
            $this->nom_util = $name;
            $this->prenom_util = $first;
            $this->mail_util = $mail;
            $this->mdp_util = $password;
        }
        //Getter and Setter
        public function getIdUtil():int{
            return $this->id_util;
        }
        public function getNameUtil():string{
            return $this->nom_util;
        }
        public function getFirstNameUtil():string{
            return $this->prenom_util;
        }
        public function getMailUtil():string{
            return $this->mail_util;
        }
        public function getmdpUtil():string{
            return $this->mdp_util;
        }

        public function setIdUtil($id):void{
            $this->id_util = $id;
        }
        public function setNameUtil($name):void{
            $this->nom_util = $name;
        }
        public function setFirstNameUtil($first):void{
            $this->prenom_util = $first;
        }
        public function setMailUtil($mail):void{
            $this->mail_util = $mail;
        }
        public function setPwdUtil($password):void{
            $this->mdp_util = $password;
        }

        
        
        public function createUser($bdd):void{
            $name = $this->getNameUtil();
            $first = $this->getFirstNameUtil();
            $mail = $this->getMailUtil();
            $password = $this->getmdpUtil();
          

            


            try{
                $req = $bdd->prepare('INSERT INTO utilisateur(nom_util, prenom_util,
                mail_util, mdp_util) VALUES (:nom_util, :prenom_util, :mail_util, :mdp_util)');
                $req->execute(array(
                    'nom_util' => $name,
                    'prenom_util' => $first,
                    'mail_util' => $mail,
                    'mdp_util' => $password,
                    ));
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
        //récupérer si l'utilisateur (mail_util) existe en BDD (utilisateur)
        public function showUserByMail($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM utilisateur 
                WHERE mail_util = :mail_util');
                $req->execute(array(
                    'mail_util' => $this->getMailUtil(),
                ));
                $data = $req->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
            catch(Exception $e)
            {
                //affichage d'une exception en cas d’erreur
                die('Erreur : '.$e->getMessage());
            }
        }
    }



?>