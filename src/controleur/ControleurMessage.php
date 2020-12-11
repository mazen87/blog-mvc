<?php 
     require_once 'model/Model_message.php';
     require_once 'model/Model_commentaire.php';
     require_once 'vue/Vue.php';
     
    class ControleurMessage {
        private $commentaire;
        private $message;

        public function __construct()
        {
            $this->commentaire = new Model_commentaire();
            $this->message = new Model_message();
        }

        public function message($id_message){
            $message = $this->message->select_message_id($id_message);
            $commentaires =$this->commentaire->select_commentaires_idMessage($id_message);
            $vueAccueil = new Vue("Message");
            $vueAccueil->generer(array('message'=>$message,'commentaires'=>$commentaires));
        }

        public function commenter($commentaire){
            $this->message->insert_commentaire($commentaire);
            $this->message($commentaire->get_id_message());
            header("Location: index.php?action=message&id_message=".$commentaire->get_id_message()." ");
            die;
        }

       
    }