<?php
$title = 'Register';

$content ='

<div class="container">
       <div class="row align-items-start">
           <div class="col">
               <br><br>
               <h1 class="text-center">Création d\'un compte</h1>
               <br>
          
           </div>
       </div>
       <div class="row align-items-center" >
           <div class="col">
       <form>
           <div class="form-group">    
               <div class="mb-3">
                   <label class="noir" for="firstName">Nom</label>
                   <input id="firstName" class="form-control" required="" type="text" value="" placeholder="Nom" />
                   <div class="invalid-feedback">Un nom valide est requis.</div>
               </div>
           </div>
           <div class="form-group">
               <div class="mb-3">
                   <label class="noir" for="lastName">Prénom</label>
                   <input id="lastName" class="form-control" required="" type="text" value="" placeholder="Prénom" />
                   <div class="invalid-feedback">Un nom valide est requis.</div>
               </div>
           </div>   
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
           <div class="form-group">
               <div class="mb-3">
                   <label class="noir" for="ConfimePassword">Confirmation du mot de passe</label>
                   <input type="password" class="form-control" id="ConfimePassword" placeholder="●●●●●●●●">
                   <div class="invalid-feedback">La confirmation du mot de passe est requise.</div>
               </div>
           </div>
           </div>
           <div class="mb-3">
               <button type="submit" class="btn btn-primary">Envoyer</button>
           </div>
       </div>
       </form>
   </div>
';
require_once('./layouts/structure.php');