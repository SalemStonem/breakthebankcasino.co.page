<?php
/* Smarty version 3.1.31, created on 2019-03-17 01:44:43
  from "C:\xampp\htdocs\00\themes\default\TkStarBet2018\modules\payment\transactions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c8d75534674e5_51470522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1013e9abe8e4240e83da334601b84822130296b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\00\\themes\\default\\TkStarBet2018\\modules\\payment\\transactions.tpl',
      1 => 1545505311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/dashboard_menu.tpl' => 1,
  ),
),false)) {
function content_5c8d75534674e5_51470522 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_jdate')) require_once 'C:\\xampp\\htdocs\\00\\TkStarApplication\\smarty\\plugins\\function.jdate.php';
?>
<div class="container" style="width: 100% !important;">
	<div class="page-content light" style="width: auto !important; margin-right: -15px !important; margin-left: -15px !important;">
		<div class="ph15"></div>
		<div class="inline container">
			<?php $_smarty_tpl->_subTemplateRender("file:partials/dashboard_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="left static-content">
				<?php if ($_smarty_tpl->tpl_vars['_GET']->value["pay"] == "true") {?>
				<div style="width:100% !important; background-color:green !important; color:white !important; padding:20px !important;">پرداخت با موفقیت انجام شد . موجودی تراکنش به حساب شما افزوده شد</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['_GET']->value["pay"] == "false") {?>
				<div style="width:100% !important; background-color:#ff6600 !important; color:white !important; padding:20px !important;">خطایی در هنگام انجام تراکنش به وجود آمده است . لطفا مجددا تلاش فرمایید . در صورت کسر وجه از حساب شما تا 72 ساعت آینده مبلغ به حسابتان باز میگردد</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['_GET']->value["pay"] == "cart") {?>
				<div style="width:100% !important; background-color:green !important; color:white !important; padding:20px !important;">فیش واریزی شما ثبت گردید تا چند دقیقه دیگر از طریق پشتیبانی تایید و حساب شما شارژ خواهد شد. با تشکر. شما همچنین میتوانید از منو بخش کارت به کارت ها وضعیت واریزی خود را پی گیری نمایید.</div>
				<?php }?>
				<div class="page-area container inline form-container">
					<div class="page-title">سابقه تراکنش های کارت به کارت</div>
					<div class="p7 inline center" style="width: 100% !important;">
						<table class="table nopointer">
							<thead>
								<tr>
									<th>کد پیگیری</th>
									<th>زمان ثبت</th>
									<th>زمان تراکنش</th>
									<th>شماره کارت(چهار رقم اخر)</th>
									<th>نوع تراکنش</th>
									<th>مبلغ به تومان</th>
									<th>وضعیت</th>
								</tr>
							</thead>
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart_transaction']->value, 'transaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
?>
								<?php $_smarty_tpl->_assignInScope('transaction', (object)$_smarty_tpl->tpl_vars['transaction']->value);
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->paygiricod;?>
</td>
									<td><?php echo smarty_function_jdate(array('format'=>'j F Y H:i','date'=>date('Y/m/d H:i:s',$_smarty_tpl->tpl_vars['transaction']->value->created_at)),$_smarty_tpl);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->time;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->card4;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->description;?>
</td>
									<td style="direction: ltr !important; color: <?php if ($_smarty_tpl->tpl_vars['transaction']->value->price <= -1) {?>orange<?php } else { ?>green<?php }?> !important;"><?php echo number_format($_smarty_tpl->tpl_vars['transaction']->value->price);?>
</td>
									<td><?php if ($_smarty_tpl->tpl_vars['transaction']->value->status == '1' || $_smarty_tpl->tpl_vars['transaction']->value->status == 1) {?><span class="label label-success" style="width: 200px !important; display: inline-block !important; color: white !important;">پرداخت شده</span><?php } else { ?><span class="label label-danger" style="width: 200px !important; display: inline-block !important; color: white !important;"><b>معلق</span><?php }?></td>
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
				<div class="page-area container inline form-container">
					<div class="page-title">سابقه تراکنش های آنلاین</div>
					<div class="p7 inline center" style="width: 100% !important;">
						<table class="table nopointer">
							<thead>
								<tr>
									<th>شماره پیگیری تراکنش</th>
									<th>زمان تراکنش</th>
									<th>نوع تراکنش</th>
									<th>مبلغ به تومان</th>
									<th>وضعیت</th>
								</tr>
							</thead>
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transactions']->value, 'transaction');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transaction']->value) {
?>
								<?php $_smarty_tpl->_assignInScope('transaction', (object)$_smarty_tpl->tpl_vars['transaction']->value);
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->trans_id;?>
</td>
									<td><?php echo smarty_function_jdate(array('format'=>'j F Y H:i','date'=>date('Y/m/d H:i:s',$_smarty_tpl->tpl_vars['transaction']->value->created_at)),$_smarty_tpl);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['transaction']->value->description;?>
</td>
									<td style="direction: ltr !important; color: <?php if ($_smarty_tpl->tpl_vars['transaction']->value->price <= -1) {?>orange<?php } else { ?>green<?php }?> !important;"><?php echo number_format($_smarty_tpl->tpl_vars['transaction']->value->price);?>
</td>
									<td><?php if ($_smarty_tpl->tpl_vars['transaction']->value->status == '1' || $_smarty_tpl->tpl_vars['transaction']->value->status == 1) {?><span class="label label-success" style="width: 200px !important; display: inline-block !important; color: white !important;">پرداخت شده</span><?php } else { ?><span class="label label-danger" style="width: 200px !important; display: inline-block !important; color: white !important;"><b>معلق</span><?php }?></td>
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
        </div>
    </div>
</div><?php }
}
