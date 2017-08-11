<?php
/**
 * Created by PhpStorm.
 * User: stagiaire3.web
 * Date: 11/08/2017
 * Time: 08:58
 */

session_start();

?>

<div class="band_div">
    <h1>Rabouletune</h1>
    <?php
        if (!isset($_SESSION['user_name'])){
            include ("login.php");
        }
    ?>
</div>
