<?php
/* Smarty version 3.1.33, created on 2019-10-09 13:26:49
  from 'D:\OSPanel\domains\simpla\design\okay_shop\html\advantages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9db5e98801d1_53455838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37a008897eda387a1ea8f03ba2985a588e533904' => 
    array (
      0 => 'D:\\OSPanel\\domains\\simpla\\design\\okay_shop\\html\\advantages.tpl',
      1 => 1570609131,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:svg.tpl' => 4,
  ),
),false)) {
function content_5d9db5e98801d1_53455838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block block--boxed block--border section_advantages">
    <div class="advantages f_row no_gutters">
        <div class="advantages__item f_col-6 f_col-md-3">
            <div class="advantages__preview d-flex align-items-center">
                <div class="advantages__icon advantages__icon--delivery d-flex align-items-center justify-content-center">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"advantage1_icon"), 0, false);
?>
                </div>
                <div class="advantages__title">
                    <span data-language="advantage_1"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_1;?>
</span>
                </div>
            </div>
        </div>
        <div class="advantages__item f_col-6 f_col-md-3">
            <div class="advantages__preview d-flex align-items-center">
                <div class="advantages__icon d-flex align-items-center justify-content-center">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"advantage2_icon"), 0, true);
?>
                </div>
                <div class="advantages__title">
                    <span data-language="advantage_2"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_2;?>
</span>
                </div>
            </div>
        </div>
        <div class="advantages__item f_col-6 f_col-md-3">
            <div class="advantages__preview d-flex align-items-center">
                <div class="advantages__icon d-flex align-items-center justify-content-center">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"advantage3_icon"), 0, true);
?>
                </div>
                <div class="advantages__title">
                    <span data-language="advantage_3"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_3;?>
</span>
                </div>
            </div>
        </div>
        <div class="advantages__item f_col-6 f_col-md-3">
            <div class="advantages__preview d-flex align-items-center">
                <div class="advantages__icon d-flex align-items-center justify-content-center">
                    <?php $_smarty_tpl->_subTemplateRender("file:svg.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('svgId'=>"advantage4_icon"), 0, true);
?>
                </div>
                <div class="advantages__title">
                    <span data-language="advantage_4"><?php echo $_smarty_tpl->tpl_vars['lang']->value->advantage_4;?>
</span>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
