<?php 
   // if(isset($_GET['id_message']) && $_GET['id_message'] != 0)
    $this->title = $message->get_titre();
?>
<?php //ob_start()?>
<div class="header_message">
    <div class="titre_message">
        <h2><?= $message->get_titre()?></h2>
    </div>
</div>
<?php foreach($commentaires as $commentaire) : ?>
<div class="commentaire">
    <header>
        
        <div class="date_commentaire"><time><?= $commentaire->get_com_date()->format('d/m/Y')?></time></div>
    </header>
    <div class="contenu_commentaire"><?= $commentaire->get_com_contenu()?></div>
</div>
<?php endforeach ?>
<div class="formulaire">
    <h5></h5>
    <form method="POST" action="index.php?action=commenter">
    <input type="text" name="auteur" placeholder="auteur....."/>
    <textarea name="contenu"></textarea>
    <input type="hidden" name="id_message" value="<?=$message->get_id() ?>" />
    <input type="submit" name="commenter" value="commenter" />
    </form>
</div>

<?php //$contenu = ob_get_clean() ?>
<?php //require_once 'garabit.php'?>