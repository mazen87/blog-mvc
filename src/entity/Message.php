<?php 
    class Message {

        /**
         * déclaration des variables
         */
        public $id;
        public $titre;
        public $auteur;
        public $contenu;
        public $date_message;

        /**
         * constructeur par défault
         */
        public function __construct()
        {
            
        }

        /**
         * générer les getters et les setters 
         */

         public function get_id (){
             return $this->id; 
         }
         public function get_titre (){
            return $this->titre; 
        }
         public function get_auteur (){
            return $this->auteur; 
        }
        public function get_contenu (){
            return $this->contenu; 
        }
        public function get_date_message (){
            return new DateTime($this->date_message); 
        }

        public function set_id($id){
            $this->id = $id;
        }
        public function set_titre($titre){
            $this->titre = $titre;
        }
        public function set_auteur($auteur){
            $this->auteur = $auteur;
        }
        public function set_contenu($contenu){
            $this->contenu = $contenu;
        }
        public function set_date_message($date_message){
            $this->date_message = $date_message;
        }
        
    }