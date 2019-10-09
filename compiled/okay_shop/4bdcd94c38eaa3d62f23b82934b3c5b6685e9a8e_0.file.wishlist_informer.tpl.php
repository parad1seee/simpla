<?php
/* Smarty version 3.1.33, created on 2019-10-09 11:21:36
  from 'D:\OSPanel\domains\simpla\design\okay_shop\html\wishlist_informer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9d9890e363b8_19614609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bdcd94c38eaa3d62f23b82934b3c5b6685e9a8e' => 
    array (
      0 => 'D:\\OSPanel\\domains\\simpla\\design\\okay_shop\\html\\wishlist_informer.tpl',
      1 => 1570609131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9d9890e363b8_19614609 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['wishlist']->value->products) > 0) {?>
    <a class="header_informers__link" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url_generator'][0], array( array('route'=>"wishlist"),$_smarty_tpl ) );?>
">
                <i class="mdi mdi-heart-outline"></i>
                <span class="wishlist_counter"><?php echo count($_smarty_tpl->tpl_vars['wishlist']->value->products);?>
</span>
    </a>
<?php } else { ?>
    <span class="header_informers__link">
                <i class="mdi mdi-heart-outline"></i>
            </span>
<?php }
}
}
