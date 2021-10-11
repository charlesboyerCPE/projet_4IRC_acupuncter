<?php
/* Smarty version 3.1.39, created on 2021-10-11 15:10:27
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616453e39b0ca3_14139460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b0560685ec9285332b3f7e3da6c91a7950114ac' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\index.html',
      1 => 1633965020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
    'file:../templates/structure-f.html' => 1,
  ),
),false)) {
function content_616453e39b0ca3_14139460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Accueil"), 0, false);
?>

<section>
    <div class="row">
        <div class="col-sm my-4 text-center">
            <h1>Acupunture CPE Lyon</h1>
        </div>
    </div>
</section>

<section id="Information">
    <!-- inforamtion sur Acupunture fonctionnement + image aiguille... section divisé en deux horizontalement -->
    <div class=row>
        <div class="col mx-1">
            <h2>Qu'est-ce que l'acuponcture ?</h2>
            <p>L’acupuncture ou acuponcture est un système thérapeutique dont les origines historiques sont
                très liées avec la tradition médicale chinoise. L'acupuncture consiste en une stimulation de zones
                précises de l'épiderme : les « points d’acupuncture ». Les techniques de stimulation des points
                d’acupuncture sont effectuées avec des moyens divers : des aiguilles le plus souvent, mais aussi
                d'autres moyens physiques (mécaniques, électriques, magnétiques, thermiques, lumineux) ou
                physico-chimiques, voire d'autres méthodes alternatives dangereuses (apipuncture, apithérapie avec
                des piqûres d'abeille).
                L'acupuncture ne s'est pas construite sur le savoir scientifique et ses fondements sont considérés
                comme relevant de la pseudo-science. Certains travaux de chercheurs tendent à montrer que
                l’acuponcture n’a pas d’efficacité propre, mais pourrait agir sur le patient par effet placebo
                entrainant des mécanismes neuropsychologiques, ou neurophysiologiques réels, indiquant une
                efficacité notamment dans le traitement de la douleur. Le risque d'iatrogénie existe, notamment par
                la transmission d'agents pathogènes si les conditions d'asepsie sont insuffisantes. L'utilisation de
                l'acupuncture a été critiquée sur le plan éthique lorsqu'elle se fait au détriment de traitements
                efficaces.
                La pratique de l'acupuncture est attestée depuis plusieurs millénaires en Asie (en particulier en
                Inde, Chine, Corée et Japon), même si son succès a beaucoup fluctué avec le temps. De par ses
                racines historiques, géographiques et culturelles, de ses conditions d’implantation en Occident,
                l’acupuncture n'intéresse pas seulement la médecine mais aussi l'anthropologie, l'histoire des
                sciences, l'épistémologie, la sociologie et ce depuis son introduction en Europe au xviie siècle.
                L'UNESCO l'a inscrite au patrimoine culturel immatériel de l'humanité le 16 novembre 2010.</p>
        </div>
        <div class="col mx-1">
            <img class=imgdesc src="public/img/img_acuponcture1.jpg">
            <img class=imgdesc2 src="public/img/img_acuponcture2.jpg">
        </div>
    </div>
</section>

<section id="Les_bienfaits">
    <!-- Fond plein avec icon + compliment et raison de faire des scéances chez nous -->
    <div class="row">
        <div class="col mx-1 text-center">
            <h2>Avis de nos clients</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class="mb-0 fs-6">Mon experience avec l'acupuncture a été formidable. Je souffrais de migraines
                    ophtalmiques depuis une
                    bonne quinzaine d'années et cela devenait insupportable. Il m'était arrivée de souffrir pendant
                    trois
                    semaines d'affilées. J'avais essayé différents traitements et rien ne pouvait stopper ces
                    douleurs. Je ne dormais plus et je travaillais en école maternelle ! Ma directrice me recommanda
                    ce docteur qui
                    faisait
                    des merveilles. Je ne croyais plus en rien mais j'eu tout de même recours à lui et
                    "merveille"!... il sut
                    placer ses aiguilles et me débarassa de ce fléau !</p>
                
                </blockquote>
                <figcaption class="blockquote-footer">Louis XIV</figcaption>
            </figure>
        </div>
        <div class="col-md-6">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p class="mb-0 fs-6">Cela fait des années que je vois une homéopathe acupuncteur. J'apprécie les
                        médecines douces, un
                        traitement de fond en homéopathie et des séances 2 ou 3 fois par an d'acupuncture qui vient en
                        complément et qui permet une meilleure circulation de l'énergie. J'ai la certitude que ces 2
                        médecines
                        (adaptées à la personnalité de chacun) m'aide à mieux vivre au quotidien, à avoir une meilleure
                        santé et
                        je les conseille donc sans réserve. M.Line</p>
                </blockquote>
                <figcaption class="blockquote-footer">Tom Tonkin</figcaption>
            </figure>
        </div>
    </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:../templates/structure-f.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
