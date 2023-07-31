<?php
session_start();
unset($_SESSION);
session_destroy();
?>


<section class="destroySection">
    <p>Paramètres Réinitialisés</p>
    <a href="index.php">Retourner à l'accueil</a>
</section>

<?php include 'parts/footer.php'; ?>