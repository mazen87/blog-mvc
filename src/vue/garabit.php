<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <base href="<?= $racineWeb ?>" >
        <link rel="stylesheet" href="#" />
        <title><?= $title?></title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreSite"> Site de Blog</h1></a>
            </header>
            <div id="contenu">
                <?= $contenu?>
            </div>
            <footer>
                <p> &copycopyright 2020 by Mazen</p>
                <p> Site de Blog - MVC</p>
            </footer>
        
        </div>
    </body>

</html>