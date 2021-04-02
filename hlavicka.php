<?php
function hlavicka($title, $description = "") {
?>
<!doctype html>
<meta charset="utf-8">
<title><?=empty($title) ? "Název webu" : $title . " – Název webu"?></title>
<?php if (!empty($description)) { ?>
<meta name="description" content="<?=$description?>">
<?php } ?>
<rel="stylesheet" type="text/css" href="styl.css">
…
<div class=container>

  <div class=menu>
    <a href="./">Hlavní strana</a>
    <a href="./druha.php">Druhá</a>
    <a href="./treti.php">Třetí</a>
  </div>

<div class=content>
<?php } ?>
