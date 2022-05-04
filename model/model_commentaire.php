<?php 
    class Commentaire{
        /* ------------------------------ ATTRIBUTS ------------------------------ */
        protected $id;
        protected $content;
        protected $date;
        protected $util;
        protected $art;

        

        /* ------------------------------ CONSTRUCTEUR ------------------------------ */
        public function __construct($com, $date, $util, $art){
            $this->content = $com;
            $this->date = $date;
            $this->util = $util;
            $this->art = $art;
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
         * Get the value of util
         */ 
        public function getUtil():int{
            return $this->util;
        }

        /**
         * Set the value of util
         */ 
        public function setUtil($util):void{
            $this->util = $util;
        }

        /**
         * Get the value of art
         */ 
        public function getArt():int{
            return $this->art;
        }

        /**
         * Set the value of art
         */ 
        public function setArt($art):void{
            $this->art = $art;
        }



        /* ------------------------------ METHODES ------------------------------ */
    }
?>

