<?php 
    /**
     * l'import des classes nécessaires
     */
    
    
    
    //require_once 'model/Model_message.php';
    //require_once 'model/Model_commentaire.php';
    //require_once 'vue/Vue.php';
    //require_once 'model/Model_message.php';
    //require_once 'model/Model_commentaire.php';

   // $id_message=0;
    //if(isset($_GET['id_message'])&& $_GET['id_message'] != 0 ){
        
      //  $id_message = intval($_GET['id_message']);
   // }
   
   // function message($id_message){
      //  $model_message = new Model_message();
       // $message = $model_message->select_message_id($id_message);
       // $model_commentaire = new Model_commentaire();
       // $commentaires = $model_commentaire->select_commentaires_idMessage($id_message);
        /**
        * intégration de la partie spécifique de la page d'une message
        */
        //require_once 'vue/vueMessage.php';
        
        //$vueMessage = new Vue("Message");
        //$vueMessage->generer(array('message'=>$message,'commentaires'=>$commentaires)); 
   // }
    //function accueil (){
      //  $model_message = new Model_message();
        //$messages = $model_message->select_toutes_messages();
        //$message = $model_message->select_message_id(1);
        //var_dump($message);
        /**
         * intégration de la partie spécifique de la page d'accueil
         */
        //require_once 'vue/vueAccueil.php';
        //$vueAccueil = new Vue("Accueil");
        //$vueAccueil->generer(array('messages'=>$messages));
   // }
      require_once 'controleurAccueil.php';
      require_once 'ControleurMessage.php';
      require_once 'entity/Commentaire.php';
      require_once 'entity/Message.php';
      require_once 'vue/Vue.php';

      class Routeur {

        private $cntrlAccueil;
        private $cntrlMessage;
     

        public function __construct()
        {
          $this->cntrlAccueil = new ControleurAccueil();
          $this->cntrlMessage = new ControleurMessage();
        
          
        }

        public function routerRequete(){
          $id_message =0;
          try{
            if(isset($_GET['action'])){
              if($_GET['action']=="message"){
                
                  $id_message = intval($this-> getParametre($_GET, 'id_message'));
                  if($id_message !=0){
                    $this->cntrlMessage->message($id_message);
                  }else{
                    throw new Exception("identifiant de message non valide");
                  }
          
              }else if($_GET['action']=='commenter'){
                $commentaire = new Commentaire();
                $commentaire->set_com_auteur($this->getParametre($_POST,'auteur'));
                $commentaire->set_com_contenu($this->getParametre($_POST,'contenu'));
                $commentaire->set_id_message($this->getParametre($_POST,'id_message'));
                $this->cntrlMessage->commenter($commentaire);
                
              }else if($_GET['action']=='ajouterMessage') {
                $message = new Message();
                $message->set_titre($this->getParametre($_POST,'titre'));
                $message->set_auteur($this->getParametre($_POST,'auteur'));
                $message->set_contenu($this->getParametre($_POST,'contenu'));
                $this->cntrlAccueil->ajouterMessage($message);
                
              }else{
                throw new Exception("action non valide");

              }
            }else{
              $this->cntrlAccueil->accueil();
            }

          }catch(Exception $e){
            $this->erreur($e->getMessage());
          }

        }

        public function erreur($msgErreur) {
          //require 'vue/vueErreur.php';
          $vueErreur = new Vue("Erreur");
          $vueErreur->generer(array('msgErreur'=>$msgErreur));
        }

        private function getParametre($tableau,$nom){
          if(isset($tableau[$nom]) && !empty($tableau[$nom])){
            return $tableau[$nom];
          }else{
            throw new Exception ("paramètre '$nom' est absent");
          }
        }

      }  

       
      