<?php
/* Smarty version 3.1.39, created on 2021-10-11 13:37:44
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61643e28a79708_75094900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e49fccbd64931e9b7cf1801c4c74627a35511b' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\login.html',
      1 => 1633956882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
    'file:../templates/structure-f.html' => 1,
  ),
),false)) {
function content_61643e28a79708_75094900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Connectez-vous"), 0, false);
?>
    
    <section>
        <div class="row">
            <div class="col-sm my-4 text-center">
                <h1>Connexion</h1>
            </div>
        </div>
    </section>
    <section>
        <form class="needs-validation" method="POST" action="./index.php?action=postlogin" novalidate="">
            <fieldset> 
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Adresse mail" class="noir" for="Email">Adresse mail</label>
                        <input type="email" class="form-control" id="Email" placeholder="Adresse mail" name="email_user" required="">
                        <div class="invalid-feedback">Un email valide est requis.</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Mot de passe" class="noir" for="Password">Entrez votre mot de passe</label>
                        <input type="password" class="form-control" id="Password" placeholder="●●●●●●●●●" name="password_user" required="">
                        <div class="invalid-feedback">Un mot de passe est requis.</div>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Se connecter</button>
                </div>
            </fieldset>
            
            <?php echo '<script'; ?>
 type="text/javascript">
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                (function () {
                  'use strict'

                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.querySelectorAll('.needs-validation')

                  // Loop over them and prevent submission
                  Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                      form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                          event.preventDefault()
                          event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                      }, false)
                    })
                })()        
            <?php echo '</script'; ?>
>

        </form>
    </section>
<?php $_smarty_tpl->_subTemplateRender("file:../templates/structure-f.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
