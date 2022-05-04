<<<<<<< HEAD
<?php 
    class Article{
        /* ------------------------------ ATTRIBUTS ------------------------------ */
        protected $id;
        protected $nom;
        protected $content;
        protected $date;
        protected $cat;



        /* ------------------------------ CONSTRUCTEUR ------------------------------ */
        public function __construct($nom, $content, $date, $cat){
            $this->nom = $nom;
            $this->content = $content;
            $this->date = $date;
            $this->cat = $cat;
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
         * Get the value of content
         */ 
        public function getContent():string{
            return $this->content;
        }

        /**
         * Set the value of content
         */ 
        public function setContent($content):void{
            $this->content = $content;
        }

        /**
         * Get the value of date
         */ 
        public function getDate():string{
            return $this->date;
        }

        /**
         * Set the value of date
         */ 
        public function setDate($date):void{
            $this->date = $date;
        }

        /**
         * Get the value of cat
         */ 
        public function getCat():int{
            return $this->cat;
        }

        /**
         * Set the value of cat
         */ 
        public function setCat($cat):void{
            $this->cat = $cat;
        }



        /* ------------------------------ METHODES ------------------------------ */
        // Fonction qui ajoute un article en BDD
        public function addArticle($bdd):void{
            try{
                $req = $bdd->prepare('INSERT INTO article(nom_art, content_art, date_art, id_cat)
                VALUES(:nom_art, :content_art, :date_art, :id_cat);');
                $req->execute(array(
                    "nom_art" => $this->getNom(),
                    "content_art" => $this->getContent(),
                    "date_art" => $this->getDate(),
                    "id_cat" => $this->getCat()
                ));
            }
            catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }

        public function showAllArticle($bdd):array{
            try{
                $req = $bdd->prepare('SELECT * FROM article');
                $req->execute();
                $data = $req->fetchAll(PDO::FETCH_OBJ);
                return $data;
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
        }
    }
?>



