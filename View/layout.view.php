<?php
// Classe d'affichage des fichiers HTML
$vhtml = new VHtml();

// Classe d'affichage des parties gauche et droite
$vaside = new VAside();

// Tableau variable
global $content;
// Classe variable
$vcontent = new $content['class']();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
 <meta charset="utf-8" />
 <title><?= $content['title']?></title>
 <?= $content['meta']?>
 <link rel="icon" type="image/png" href="../Img/e-www.png" />
 <link rel="stylesheet" type="text/css" href="../Css/e-www.css" />
</head>

<body>

 <header>
  <p><?php $vhtml->showHtml('../Html/header.html.php')?></p>
 </header>

 <aside>
  <p><?php $vaside->showAsideLeft() ?></p>
 </aside>

 <div id="content">
  <p><?php $vcontent->{$content['method']}($content['arg']) ?></p>
 </div><!-- id="content" -->

 <aside>
  <p><?php $vaside->showAsideRight() ?></p>
 </aside>

 <footer>
  <p><?php $vhtml->showHtml('../Html/footer.html.php')?></p>
 </footer>
 
 <script src="../Js/e-www.js"></script>

</body>
</html>
