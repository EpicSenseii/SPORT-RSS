<?php
session_start();
if (count($_POST) > 0) {
    if ($_POST["articlesNumber"] == 6 || $_POST["articlesNumber"] == 9  || $_POST["articlesNumber"] == 12) {

        $_SESSION['articlesNumber'] = $_POST['articlesNumber'];
    }

    if (count($_POST['choiceSport']) == 3) {
        unset($_SESSION['selected']);

        foreach ($_POST['choiceSport'] as $selected) {
            $_SESSION['selected'][] = $selected;
        }
    }
}
$title = 'Préférences';
?>
<?php include_once 'parts/header.php' ?>

<div class="preferencesContainer">
    <form action="parameters.php" method="POST">

        <select name="articlesNumber" id="articlesNumber">
            <option>6</option>
            <option>9</option>
            <option>12</option>
        </select>

        <fieldset>
            <legend> Choisissez trois sports :</legend>
            <div class="labelSeparator">
                <label for="foot">football</label>
                <input type="checkbox" name="choiceSport[]" value="2" id="foot">
            </div>
            <div class="labelSeparator">
                <label for="rugby"> rugby</label>
                <input type="checkbox" name="choiceSport[]" value="3" id="rugby">
            </div>
            <div class="labelSeparator"> <label for="boxe">Boxe</label>
                <input type="checkbox" name="choiceSport[]" value="1" id="boxe">
            </div>
            <div class="labelSeparator"> <label for="extrem">Sports extrêmes</label>
                <input type="checkbox" name="choiceSport[]" value="4" id="extrem">
            </div>
            <div class="labelSeparator"> <label for="wintersport"> Sports d'hiver</label>
                <input type="checkbox" name="choiceSport[]" value="5" id="wintersport">
            </div>
        </fieldset>
        <input type="submit" value="envoyer">

    </form>

    <fieldset>
        <legend>Réinitialisez les préférences :</legend>
        <a id="destroyBtn" href="destroy.php">Réinitialiser</a>
    </fieldset>
</div>

<?php include_once 'parts/footer.php' ?>