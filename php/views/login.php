<?php
$title = 'Login';

$content ='
<div class="row">
<div class="col-md-2"></div> <div class="col-md-8">
    <form method="POST" action="./index.php?action=login">
    <fieldset>
        <legend>Merci de vous connecter.</legend>

        <div>
        <label for="Login - Mail" class="form-label-login">Adresse Mail</label>
        <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Rentrer votre adresse mail" name="email">
        </div>

        <div>
        <label for="Password" class="form-label-login">Mot de Passe</label>
        <input type="password" class="form-control" placeholder="Mot de Passe" name="password">
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Envoyer</button>
        </fieldset>
    </form>
</div>
</div>
';
require_once('./layouts/structure.php');