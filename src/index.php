<?php 
    /**
     * l'import des classes nécessaires
     */
    //require_once 'controleur/controleur.php';
    //require_once 'controleur/ControleurAccueil.php';
    //require_once 'controleur/ControleurMessage.php';
    require_once 'controleur/Routeur.php';
    $routeur = new Routeur();
    $routeur->routerRequete();

   /*
    $id_message =0;
    if(isset($_GET['action'])){
        if($_GET['action']=="message"){
            if(isset($_GET["id_message"])){
                if($_GET['id_message']){
                    $id_message = intval($_GET['id_message']);
                    if($id_message != 0){
                        //message($id_message);
                        $controleurMessage = new ControleurMessage();
                        $controleurMessage->message($id_message);

                    }
                }
            }
        }
    }else {
        */
        //accueil();
        /*
        $controleurAccueil = new ControleurAccueil();
        $controleurAccueil->accueil();
    }
    */
    //require_once '../model/Model_message.php';
    //require_once '../model/Model_commentaire.php';

      //  $model_message = new Model_message();
       // $messages = $model_message->select_toutes_messages();
       // $message = $model_message->select_message_id(1);
        //var_dump($message);
        /**
         * intégration de la partie spécifique de la page d'accueil
         */
       // require_once '../vue/vueAccueil.php';
        //var_dump($messages);
       // $model_commentaire = new Model_commentaire();
        //$commentaires = $model_commentaire->select_commentaires_idMessage(1);
        //var_dump($commentaires);

