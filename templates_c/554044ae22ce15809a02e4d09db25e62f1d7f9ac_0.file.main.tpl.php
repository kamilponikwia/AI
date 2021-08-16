<?php
/* Smarty version 3.1.39, created on 2021-08-16 09:09:11
  from 'D:\XAMPP\htdocs\php_kalkulator_kredytowy\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611a0f1777bf00_42559291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554044ae22ce15809a02e4d09db25e62f1d7f9ac' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\php_kalkulator_kredytowy\\app\\views\\templates\\main.tpl',
      1 => 1626801889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611a0f1777bf00_42559291 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">

        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
}/css/main-grid.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/layouts/marketing.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css">
        <?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style_hide_intro.css">
        <?php }?>
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

        <title>Kalkulator kredytowy</title>

    </head>
    <body>

        <div id="app_top" class="header">
            <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
                <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
                <ul>
                    <li class="pure-menu-selected"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#app_top">Strona główna</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#app_content">Kalkulator</a></li>
                </ul>
            </div>
        </div>

        <div class="splash-container">
            <div class="splash">
                <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
                <p class="splash-subhead">
                    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>

                </p>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#app_content" class="pure-button pure-button-primary">Kalkulator kredytowy</a>
                </p>
            </div>
        </div>

        <div class="content-wrapper">

            <div id="app_content" class="content">

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1711975955611a0f17776517_26515810', 'content');
?>


            </div>

            <div class="footer l-box is-center">
                <p>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_375459034611a0f17778e38_43234840', 'footer');
?>

                </p>
                <p>Kalkulator kredytowy. © 2014 - Present Yahoo! Inc. All rights reserved.</p>

            </div>
        </div>
    </body>
</html><?php }
/* {block 'content'} */
class Block_1711975955611a0f17776517_26515810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1711975955611a0f17776517_26515810',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_375459034611a0f17778e38_43234840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_375459034611a0f17778e38_43234840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
