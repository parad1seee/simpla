<?php
/* Smarty version 3.1.33, created on 2019-10-09 11:21:36
  from 'D:\OSPanel\domains\simpla\design\okay_shop\html\cart_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9d9890e557b9_09528135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '558cef7f6f8c53be1c24f44f7b0135d97c779e1f' => 
    array (
      0 => 'D:\\OSPanel\\domains\\simpla\\design\\okay_shop\\html\\cart_informer.tpl',
      1 => 1570609131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 2,
  ),
),false)) {
function content_5d9d9890e557b9_09528135 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['cart']->value->total_products > 0) {?>
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"cart"),$_smarty_tpl ) );?>
" class="header_informers__link">
        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"cart_icon"), 0, false);
?>
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </a>
<?php } else { ?>
    <div class="header_informers__link">
        <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"cart_icon"), 0, true);
?> 
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
            </div>
<?php }
}
}
