<?php
/* Smarty version 3.1.39, created on 2021-07-20 17:56:05
  from 'D:\XAMPP\htdocs\php_kalkulator_kredytowy\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f6f21508a031_56169206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e94d8ccddc99106105e349ed27d64b8e3ea47c7' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\php_kalkulator_kredytowy\\app\\views\\CalcView.tpl',
      1 => 1626796563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f6f21508a031_56169206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156344139860f6f21506da46_40260903', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120896934760f6f21506e465_36627860', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/views/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_156344139860f6f21506da46_40260903 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_156344139860f6f21506da46_40260903',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<p><a href="https://github.com/kamilponikwia/AI" target="_blank">GitHub</a></p><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_120896934760f6f21506e465_36627860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_120896934760f6f21506e465_36627860',
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
                    <input id="id_amount" type="text" placeholder="zł" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
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
                <h4>Wystąpiły błędy: </h4>
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
                <h4>Miesięczna rata wynosi</h4>
                <p class="res">
                    <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł
                </p>
            <?php }?>

        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
