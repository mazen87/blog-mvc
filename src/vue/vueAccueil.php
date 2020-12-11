<?php  $this->title = 'Accueil'; ?>
<?php //ob_start()?>
<?php foreach($messages as $message) : ?>
<div class="message">
    <header>
        <a href='index.php?action=message&id_message=<?= $message->get_id()?>'><h2 class="titreMessage"><?= $message->get_titre()?></h2></a>
        <div class="dateMessage"><time><?= $message->get_date_message()->format('d/m/Y')?></time></div>
    </header>
    <div class="contenuMessage"><?= $message->get_contenu()?></div>
</div>
<?php endforeach ?>
<div class="formulaire">
    <form method="POST" action="index.php?action=ajouterMessage">
        <input type="text" name="titre" placeholder="Titre....."/>
        <input type="text" name="auteur" placeholder="Auteur....."/>
        <textarea name="contenu"></textarea>
        <input type="submit" name="ajouter" value="Ajouter message"/>
    </form>    
</div>
<?php //$contenu = ob_get_clean() ?>
<?php //require_once 'garabit.php' ?>