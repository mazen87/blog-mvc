<?php 
    class Commentaire {
        /**
         * déclaration des variables
         */
        public $id;
        public $com_auteur;
        public $com_contenu;
        public $com_date;
        public $id_message;

        /**
         * générer les getters et les setters 
         */
        public function get_id (){
            return $this->id;
        }
        public function get_com_auteur (){
            return $this->com_auteur;
        }
        public function get_com_contenu (){
            return $this->com_contenu;
        }
        public function get_com_date (){
            return new DateTime($this->com_date);
        }
        public function get_id_message (){
            return $this->id_message;
        }

        public function set_id($id){
            $this->id = $id;
        }
        public function set_com_auteur($com_auteur){
            $this->com_auteur = $com_auteur;
        }
        public function set_com_contenu($com_contenu){
            $this->com_contenu = $com_contenu;
        }
        public function set_com_date($com_date){
            $this->com_date = $com_date;
        }
        public function set_id_message($id_message){
            $this->id_message = $id_message;
        }
    }