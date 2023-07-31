<?php
$sports = [
  1 => [
    "title" => "boxe",
    "url" => "https://rmcsport.bfmtv.com/rss/sports-de-combat/boxe/",
  ],
  2 => [
    "title" => "foot",
    "url" => "https://rmcsport.bfmtv.com/rss/football/coupe-du-monde/",
  ],
  3 => [
    "title" => "rugby",
    "url" => "https://rmcsport.bfmtv.com/rss/rugby/",
  ],
  4 => [
    "title" => "sports extrêmes",
    "url" => "https://rmcsport.bfmtv.com/rss/sports-extremes/",
  ],
  5 => [
    "title" => "sports d'hiver",
    "url" => "https://rmcsport.bfmtv.com/rss/sports-d-hiver/",
  ],
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="icon" href="https://www.seekpng.com/png/detail/76-768991_women-sports-icon-png.png" type="image/x-icon">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <header>
    <nav class="navIndex">
      <ul>
        <li><a id="homeBtn" href="index.php">accueil</a></li>
        <li><a href="feed.php?sport=<?= $_SESSION['selected'][0] ?>"><?= $sports[$_SESSION['selected'][0]]['title'] ?></a></li>
        <li> <a href="feed.php?sport=<?= $_SESSION['selected'][1] ?>"><?= $sports[$_SESSION['selected'][1]]['title'] ?></a></li>
        <li><a href="feed.php?sport=<?= $_SESSION['selected'][2] ?>"><?= $sports[$_SESSION['selected'][2]]['title'] ?></a></li>
        <li><a id="parametersBtn" href="parameters.php">Préférences</a></li>
      </ul>
    </nav>
    <a href="index.php">
      <h1 class="headerTitle">Sport<span class="blueText">Actu</span></h1>
    </a>
  </header>