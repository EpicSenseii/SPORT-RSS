<?php
session_start();
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

$title = $sports[$_GET['sport']]["title"];

// on charge un fichier xml
$rss_feed = simplexml_load_file($sports[$_GET['sport']]["url"]);

include_once 'parts/header.php';
?>
<main>
  <div class="cardContainer">
    <?php

    foreach ($rss_feed->channel->item as $item) {

      $dateFr = date("d/m/Y", strtotime($item->pubDate));
    ?>

      <div class="card">
        <a class="itemReadMore" target="_blank" href="<?php echo $item->link; ?>">
          <h2 class="itemTitle">
            <?php echo $item->title; ?>
          </h2>
        </a>
        <div class="itemDescription">
          <?= $item->description; ?>
        </div>

        <div class="itemDateRead">
          <p class="itemDate"><?= $dateFr ?></p>
          <a class="itemReadMore" target="_blank" href="<?php echo $item->link; ?>">Lire la suite</a>
        </div>
      </div>

    <?php

    }

    ?>
  </div>
</main>

<?php include_once 'footer.php'; ?>