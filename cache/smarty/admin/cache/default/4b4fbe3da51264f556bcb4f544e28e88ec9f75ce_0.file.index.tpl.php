<?php
/* Smarty version 3.1.31, created on 2020-01-23 04:36:34
  from "/home/gang4bet/public_html/themes/admin/default/modules/content/pages/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5e28f19a7a5210_92008833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b4fbe3da51264f556bcb4f544e28e88ec9f75ce' => 
    array (
      0 => '/home/gang4bet/public_html/themes/admin/default/modules/content/pages/index.tpl',
      1 => 1485234196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e28f19a7a5210_92008833 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_con')) require_once '/home/gang4bet/public_html/TkStarApplication/smarty/plugins/modifier.con.php';
if (!is_callable('smarty_function_site_url')) require_once '/home/gang4bet/public_html/TkStarApplication/smarty/plugins/function.site_url.php';
if (!is_callable('smarty_function_jdate')) require_once '/home/gang4bet/public_html/TkStarApplication/smarty/plugins/function.jdate.php';
?>
<div id="page_content_inner">
    <h3 class="heading_a title-top"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
    <div class="md-card  uk-margin-small-top">
        <div class="md-card-content">
            <div class="uk-width-medium-1-6 uk-margin-small-bottom">
                <a class="md-btn md-btn-success" href="<?php ob_start();
echo smarty_modifier_con(ADMIN_PATH,"/content/pages/edit");
$_prefixVariable1=ob_get_clean();
echo site_url($_prefixVariable1);?>
">افزودن صفحه </a>
            </div>
        </div>
    </div>
    <div class="md-card uk-margin-medium-bottom">
        <div class="md-card-content" id="body_for_ajax_notif">
            <table class="uk-table dataTable uk-table-striped" id="dt_default" role="grid" aria-describedby="dt_default_info">
                <thead>
                    <tr>
                        <th>نمایش</th>
                        <th class="sorting">نام</th>
                        <th class="sorting">آدرس لینک سئو</th>
                        <th class="sorting">وضعیت</th>
                        <th class="sorting">قالب متن</th>
                        <th class="sorting">تاریخ ایجاد</th>
                        <th class="sorting">تاریخ آخرین تغییرات</th>
                        <th class="no-sort">عملیات</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>نمایش</th>
                        <th class="sorting">نام</th>
                        <th class="sorting">آدرس لینک سئو</th>
                        <th class="sorting">وضعیت</th>
                        <th class="sorting">قالب متن</th>
                        <th class="sorting">تاریخ ایجاد</th>
                        <th class="sorting">تاریخ آخرین تغییرات</th>
                        <th class="no-sort">عملیات</th>
                    </tr>
                </tfoot>
                <tbody class="uk-table uk-table-striped">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Pages']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                        <tr>
                            <td><a href="<?php echo smarty_modifier_con(smarty_function_site_url(array(),$_smarty_tpl),$_smarty_tpl->tpl_vars['val']->value->slug);?>
"><i class="material-icons">fullscreen</i></a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value->name;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value->slug;?>
</td>
                            <td>
                                <?php if (($_smarty_tpl->tpl_vars['val']->value->status == 1)) {?>
                                    <?php echo 'فعال';?>

                                <?php } else { ?>
                                    <?php echo 'غیرفعال';?>

                                <?php }?>
                            </td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['val']->value->compiler;?>

                            </td>
                            <td><?php echo smarty_function_jdate(array('format'=>'j F Y - h:i a','date'=>$_smarty_tpl->tpl_vars['val']->value->created_at),$_smarty_tpl);?>
</td>
                            <td>
                                <?php if (isset($_smarty_tpl->tpl_vars['val']->value->updated_at)) {?>
                                    <?php echo smarty_function_jdate(array('format'=>'j F Y - h:i a','date'=>$_smarty_tpl->tpl_vars['val']->value->updated_at),$_smarty_tpl);?>

                                <?php } else { ?>
                                    <?php echo 'بدون تغییرات';?>

                                <?php }?>
                            </td>
                            <td class="right">
                                <a class="md-btn md-btn-primary md-btn-small" href="<?php ob_start();
echo smarty_modifier_con(ADMIN_PATH,'/content/pages/edit/',$_smarty_tpl->tpl_vars['val']->value['id']);
$_prefixVariable2=ob_get_clean();
echo site_url($_prefixVariable2);?>
">ویرایش</a>
                                <a href="<?php ob_start();
echo smarty_modifier_con(ADMIN_PATH,'/content/pages/delete/',$_smarty_tpl->tpl_vars['val']->value['id']);
$_prefixVariable3=ob_get_clean();
echo site_url($_prefixVariable3);?>
" class="md-btn md-btn-small md-btn-danger delete" id="delete-btn">حذف</a>
                                <a href="<?php ob_start();
echo smarty_modifier_con(ADMIN_PATH,'/content/pages/setHomePage/',$_smarty_tpl->tpl_vars['val']->value['id']);
$_prefixVariable4=ob_get_clean();
echo site_url($_prefixVariable4);?>
" class="md-btn md-btn-small md-btn-small set_as_homepage">بعنوان صفحه اصلی</a>
                            </td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                </tbody>
            </table>
        </div>
    </div>
</div>
                <?php }
}
