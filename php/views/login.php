<?php
$title = 'Login';

$content ='
<class="container">
    <div class="row align-items-start">
        <div class="col">
            <br><br>
            <h1 class="text-center">Connexion</h1>
            <br>
          
        </div>
    </div>


    <form method="POST" action="./index.php?action=login">
    <fieldset>


        
    <div class="row align-items-center">
        <form>
        <div class="col">
            <div class="form-group">
                    <div class="mb-3">
                        <label class="noir" for="Email">Adresse mail</label>
                        <input type="email" class="form-control" id=Email" aria-describedby="emailHelp" placeholder="Adresse mail">
                        <div class="invalid-feedback">Un email valide est requis.</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label class="noir" for="Password">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="Password" placeholder="●●●●●●●●">
                        <div class="invalid-feedback">Un mot de passe est requis.</div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
        </form>
    </div>
    </fieldset>
</div>


';
require_once('./layouts/structure.php');