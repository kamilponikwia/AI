<?php
/* Smarty version 3.1.39, created on 2021-05-18 10:07:08
  from 'D:\XAMPP\htdocs\php_kalkulator_kredytowy\app\calc_cred.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a375ac1d7075_99891154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25513f020d1dddd74c0b9fe8644c19166acdc1d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\php_kalkulator_kredytowy\\app\\calc_cred.html',
      1 => 1621325158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a375ac1d7075_99891154 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202061239560a375ac1b5117_34283504', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87203491660a375ac1b67f0_16624783', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_202061239560a375ac1b5117_34283504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_202061239560a375ac1b5117_34283504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p><a href="https://github.com/kamilponikwia/AI" target="_blank">GitHub</a></p><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_87203491660a375ac1b67f0_16624783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_87203491660a375ac1b67f0_16624783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php" method="post">
            <fieldset>

                <label for="x">Kwota</label>
                <input id="id_amount" type="text" placeholder="z??" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
">

                <label for="x">Okres</label>
                <input id="id_period" type="text" placeholder="lat(a)" name="period" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['period'];?>
">

                <label for="y">Oprocentowanie</label>
                <input id="id_interest" type="text" placeholder="%" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['interest'];?>
">

                <button type="submit" class="pure-button">Oblicz</button>
            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
        <h4>Wyst??pi??y b????dy: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ol>
        <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h4>Miesi??czna rata wynosi</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 z??
        </p>
        <?php }?>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
