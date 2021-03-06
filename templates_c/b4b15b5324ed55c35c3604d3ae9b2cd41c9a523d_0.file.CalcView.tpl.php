<?php
/* Smarty version 3.1.39, created on 2021-08-17 08:29:09
  from 'D:\XAMPP\htdocs\php_kalkulator_kredytowy\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611b57356a0469_57695316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4b15b5324ed55c35c3604d3ae9b2cd41c9a523d' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\php_kalkulator_kredytowy\\app\\views\\CalcView.tpl',
      1 => 1629181677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611b57356a0469_57695316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_841693560611b573567f067_26872196', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1014404899611b5735681014_82212273', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_841693560611b573567f067_26872196 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_841693560611b573567f067_26872196',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p><a href="https://github.com/kamilponikwia/AI" target="_blank">GitHub</a></p><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1014404899611b5735681014_82212273 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1014404899611b5735681014_82212273',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h2 class="content-head is-center">Kalkulator kredytowy</h2>

    <div class="pure-g">
        <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
            <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                <fieldset>

                    <label for="x">Kwota</label>
                    <input id="id_amount" type="text" placeholder="z??" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
">

                    <label for="x">Okres</label>
                    <input id="id_period" type="text" placeholder="lat(a)" name="period" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->period;?>
">

                    <label for="y">Oprocentowanie</label>
                    <input id="id_interest" type="text" placeholder="%" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->interest;?>
">

                    <button type="submit" class="pure-button">Oblicz</button>
                </fieldset>
            </form>
        </div>
                   

        <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

            <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
                <h4>Wyst??pi??y b????dy: </h4>
                <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                <h4>Miesi??czna rata wynosi</h4>
                <p class="res">
                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
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
