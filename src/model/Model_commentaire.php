<?php 
     /**
     * l'import des classes necéssaires
     */
    
    require_once 'Model.php';
    require_once 'entity/Commentaire.php';
    class Model_commentaire extends Model{

         /**
         * fonction permet de récupérer tous les commentaires existent dans la base de données 
         */
        public function select_tous_commentaires(){
            $requete = "SELECT * FROM commentaire";
        $stmt= $this->Db_connect->prepare($requete);
        $stmt->setFetchMode(PDO::FETCH_CLASS, Commentaire::class);
        $stmt->execute(); 
        $commentaires = $stmt->fetchAll();

        return $commentaires; 
        }

        /**
         * fonction permet de récupérer tous les commentaires d'une message 
         */
        public function select_commentaires_idMessage($id_message){
            $requete ="SELECT * FROM commentaire where id_message = :id_message";
            $stmt=$this->Db_connect->prepare($requete);
            $stmt->setFetchMode(PDO::FETCH_CLASS, Commentaire::class);
            $stmt->execute(array(
                ':id_message'=>$id_message
            ));
            $commentaires = $stmt->fetchAll();
            return $commentaires;            
        }

      
    }