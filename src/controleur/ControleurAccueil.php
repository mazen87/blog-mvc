<?php 
     require_once 'model/Model_message.php';
     require_once 'model/Model_commentaire.php';
     require_once 'vue/Vue.php';

    class ControleurAccueil {
        private $message;
        public function __construct()
        {
            $this->message = new Model_message();
        }

        public function accueil(){
            $messages = $this->message->select_toutes_messages();
            $vueAccueil = new Vue("Accueil");
            $vueAccueil->generer(array('messages'=>$messages));
        }

        public function ajouterMessage($message){
            $this->message->insert_message($message);
            $this->accueil();
            header("Location: index.php");
            die;
        }
    }