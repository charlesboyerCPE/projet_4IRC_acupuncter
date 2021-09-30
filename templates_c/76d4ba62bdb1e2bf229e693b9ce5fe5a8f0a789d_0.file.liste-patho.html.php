<?php
/* Smarty version 3.1.39, created on 2021-09-30 11:50:55
  from 'C:\wamp64\www\projet_4IRC_acupuncter\views\liste-patho.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155a49f767b88_17498615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76d4ba62bdb1e2bf229e693b9ce5fe5a8f0a789d' => 
    array (
      0 => 'C:\\wamp64\\www\\projet_4IRC_acupuncter\\views\\liste-patho.html',
      1 => 1633001740,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/structure.html' => 1,
  ),
),false)) {
function content_6155a49f767b88_17498615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../templates/structure.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Consultation des pathologies"), 0, false);
?>
    <div class="row">
        <div class="col">
            <br><br>
            <h1 class="text-center">Consultation des pathologies</h1>
            <br>
        </div>
    </div>

    <div class="row">
        <form method="POST" action="./index.php?action=listepatho">
            <fieldset>
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Filtre des méridiens" for="filterMer" class="noir">Méridien</label>
                        <select class="form-select" id="filterMer" name="mers">
                            <option selected="selected" value="">Aucun filtre</option>
                            <?php echo $_smarty_tpl->tpl_vars['dmers']->value;?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mers']->value, 'mer');
$_smarty_tpl->tpl_vars['mer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mer']->value) {
$_smarty_tpl->tpl_vars['mer']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['dmers']->value == $_smarty_tpl->tpl_vars['mer']->value->code) {?>
                                    <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['mer']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['mer']->value->nom;?>
</option>
                                <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['mer']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['mer']->value->nom;?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-3">
                        <label name="Filtre des pathologies" for="filterPathos" class="noir">Type de pathologie</label>
                        <select class="form-select" id="filterPathos" name="tpathos">
                            <option selected="selected" value="">Aucun filtre</option>
                            <?php echo $_smarty_tpl->tpl_vars['dtpathos']->value;?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tpathos']->value, 'tpatho');
$_smarty_tpl->tpl_vars['tpatho']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tpatho']->value) {
$_smarty_tpl->tpl_vars['tpatho']->do_else = false;
?>
                                <?php if ($_smarty_tpl->tpl_vars['dtpathos']->value == $_smarty_tpl->tpl_vars['tpatho']->value->type) {?>
                                    <option selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['tpatho']->value->type;?>
"><?php echo $_smarty_tpl->tpl_vars['tpatho']->value->desc;?>
</option>
                                <?php } else { ?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['tpatho']->value->type;?>
"><?php echo $_smarty_tpl->tpl_vars['tpatho']->value->desc;?>
</option>
                                <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <br> 
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Filtrer</button>
                    <a href="./index.php?action=listepatho" class="btn btn-dark" type="button">Réinitialiser</a>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="row">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Code méridien</th>
                <th scope="col">Description de la pathologie</th>
              </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pathos']->value, 'patho');
$_smarty_tpl->tpl_vars['patho']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
$_smarty_tpl->tpl_vars['patho']->do_else = false;
?>
                    <tr class="table-active">
                        <td><span class="badge bg-light"><?php echo $_smarty_tpl->tpl_vars['patho']->value->nom;?>
</span></td>
                        <td><span class="badge bg-primary"><?php echo $_smarty_tpl->tpl_vars['patho']->value->desc;?>
</span></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>


    </div>
</body>
</html><?php }
}
