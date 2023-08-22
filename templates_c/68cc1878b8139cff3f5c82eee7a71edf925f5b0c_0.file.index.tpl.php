<?php
/* Smarty version 4.3.2, created on 2023-08-22 17:39:49
  from 'D:\IT\PHP\htdocs\task\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e4d6c5e939c5_35610992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68cc1878b8139cff3f5c82eee7a71edf925f5b0c' => 
    array (
      0 => 'D:\\IT\\PHP\\htdocs\\task\\templates\\index.tpl',
      1 => 1692718788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e4d6c5e939c5_35610992 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/tiny-slider.css"> -->
    <link rel="stylesheet" href="css/theme.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"><?php echo '</script'; ?>
>

    <!-- <?php echo '<script'; ?>
 src="/js/jquery-3.6.0.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/tiny-slider.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/theme.js"><?php echo '</script'; ?>
> -->
</head>

<body>
    <!-- <div id="app">
        <?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
    </div> -->
    <div class="container">
        <h1>Best sellers</h1>
        <hr>
        <ul class="controls" id="custom-control">
            <li class="prev">
                <img src="images/prev.svg" alt="">
            </li>
            <li class="next">
                <img src="images/next.svg" alt="">
            </li>
        </ul>
        
        <div class="my-slider">


            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>

            <div class="test">
                <div class="items">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['img_url'];?>
" alt="img-1"> 
                    <p class="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</p>

                    <div class="value">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['specific_price']) {?>

                        <div class="price_new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display_price'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );?>
</div> 
                        <div class="price_old"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display_price'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['specific_price']['priceWithoutReduction']),$_smarty_tpl ) );?>
</div>
                        
                        <?php } else { ?>
                        <div class="price"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['display_price'][0], array( array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl ) );?>
</div> 
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>

    <?php echo '<script'; ?>
>
        var slider = tns({
            container: '.my-slider',
            items: 4,
            // controls: false,
             nav:false,
            edgePadding: 20,
            gutter:30,
            responsive:{
                0:{
                    items:1
                },
                400:{
                    items:2
                },
                800:{
                    items:4
                },
            },
            controlsContainer:'#custom-control'
        })
    <?php echo '</script'; ?>
>

    
</body>

</html><?php }
}
