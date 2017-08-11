<?php
/**
 * Created by PhpStorm.
 * User: stagiaire3.web
 * Date: 11/08/2017
 * Time: 08:30
 */

?>

<!DOCTYPE html>
<html>
    <div class="login_div">
        <form class="login_form" action="check_login.php">
            <div class="login_input">
                <label class="user_name">Nom d'utilisateur</label><br />
                <input class="login_user" type="text" name="user_name" autofocus required/><br />
                <label class="user_passwd">Mot de passe</label><br />
                <input class="login_passwd" type="password" name="user_passwd" required/>
            </div>
            <input type="submit" class="login_btn" value="Se connecter" />
        </form>
    </div>
</html>