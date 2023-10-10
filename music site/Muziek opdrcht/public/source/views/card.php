<?php
$username = "Luna";
$password = "FuckingWachtwoord01";
$database = "muziekwebsite";

$mysqli = new mysqli("localhost", $username, $password, $database);
?>


<div class="card">
    <div class="cardbody">
    <p class="genre">
        <?php
         $query = $mysqli->query("SELECT genre FROM songs");
        ?>
    </p>
    </div>
</div>