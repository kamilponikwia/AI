<?php
/* Smarty version 3.1.39, created on 2021-05-22 12:05:33
  from 'D:\XAMPP\htdocs\php_kalkulator_kredytowy\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a8d76d50c949_23950291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4085398bd620dd21cd1d615ad4ae84fbf8658d4' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\php_kalkulator_kredytowy\\templates\\main.tpl',
      1 => 1621677914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a8d76d50c949_23950291 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59424236660a8d76d509703_40420029', 'content');
?>


            </div>

            <div class="footer l-box is-center">
                <p>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189185330460a8d76d50b674_48374228', 'footer');
?>

                </p>
                <p>Kalkulator kredytowy. © 2014 - Present Yahoo! Inc. All rights reserved.</p>

            </div>
        </div>
    </body>
</html><?php }
/* {block 'content'} */
class Block_59424236660a8d76d509703_40420029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59424236660a8d76d509703_40420029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_189185330460a8d76d50b674_48374228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_189185330460a8d76d50b674_48374228',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
