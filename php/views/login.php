<?php
$title = 'Login';

$content ='
<form method="POST" action="./index.php?action=login>
  <fieldset>
    <legend>Merci de vous connecter.</legend>

    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Adresse Mail</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rentrer votre adresse mail" name="email">
      
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Mot de Passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de Passe" name="password">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
';
require_once('./layouts/structure.php');