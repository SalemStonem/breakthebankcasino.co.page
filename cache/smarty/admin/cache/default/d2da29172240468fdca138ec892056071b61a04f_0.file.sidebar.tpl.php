<?php
/* Smarty version 3.1.31, created on 2019-03-19 00:42:36
  from "/home/cupabet/public_html/themes/admin/default/partials/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c9009c480cad5_92074972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2da29172240468fdca138ec892056071b61a04f' => 
    array (
      0 => '/home/cupabet/public_html/themes/admin/default/partials/sidebar.tpl',
      1 => 1545428596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9009c480cad5_92074972 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_module')) require_once '/home/cupabet/public_html/TkStarApplication/smarty/plugins/function.module.php';
?>
<aside id="sidebar_main">
    <a href="#" class="uk-close sidebar_main_close_button"></a>
    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="<?php echo site_url(ADMIN_PATH);?>
"><img src="http://www.richbet.xyz/assets/default/TkStarBet2018/images/main_logo1.png" alt="" height="35" width="130"/></a>
        </div>
    </div>
    <div class="menu_section">
        <?php echo smarty_function_module(array('name'=>"menu",'method'=>"getFormatted",'group'=>"admin_side",'li_active_class'=>"act_item",'icon'=>"1",'icon_tag'=>"span",'icon_position'=>"before",'icon_default_class'=>"menu_icon uk-icon-envelope-o"),$_smarty_tpl);?>

    </div>
</aside> <?php }
}
