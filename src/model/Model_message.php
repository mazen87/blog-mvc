<?php 
    /**
     * l'import des classes necéssaires
     */
    
    require_once 'Model.php';
    require_once 'entity/Message.php';

    class Model_message extends Model {
        /**
         * fonction permet de récupérer toutes les messages existent dans la base de données 
         */
        public function select_toutes_messages(){
            $requete = "SELECT * FROM message";
        $stmt= $this->Db_connect->prepare($requete);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Message::class);
        $stmt->execute(); 
        $messages = $stmt->fetchAll();

        return $messages; 
        }
        /**
         * fonction permet de récupérer une message 
         */
        public function select_message_id($id_message){
            $requete = "SELECT * FROM message WHERE id=:id";
            $stmt = $this->Db_connect->prepare($requete);
            $stmt->setFetchMode(PDO::FETCH_CLASS, Message::class);
            $stmt->execute(array(
                ':id'=>$id_message
            ));
            $message = $stmt->fetch();
            return $message;
        }
           /**
         * fonction permet d'ajouter un commentaire pour une message à la base de données 
         */
        public function insert_commentaire($commentaire){
            $requete="INSERT INTO commentaire(com_auteur,com_contenu,id_message)VALUES(:com_auteur,:com_contenu,:id_message)";
            $stmt=$this->Db_connect->prepare($requete);
            $stmt->execute(array(
                ':com_auteur' => $commentaire->get_com_auteur(),
                ':com_contenu'=> $commentaire->get_com_contenu(),
                ':id_message' => $commentaire->get_id_message()
            ));
        }
        /**
         * fonction permet d'ajouter une nouvelle message à la base de données 
         */
        public function insert_message($message) {
            $requete = "INSERT INTO message(titre,auteur,contenu)VALUES(:titre,:auteur,:contenu)";
            $stmt=$this->Db_connect->prepare($requete);
            $stmt->execute(array(
                ':titre'  => $message->get_titre(),
                ':auteur' => $message->get_auteur(),
                ':contenu'=> $message->get_contenu()

            ));
        }
    }