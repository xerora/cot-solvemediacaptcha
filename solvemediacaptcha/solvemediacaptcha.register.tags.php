<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.tags
Tags=users.register.tpl:{USERS_REGISTER_VERIFYINPUT}
[END_COT_EXT]
==================== */

if($cfg['captchamain'] == 'solvemediacaptcha')
{
	$t->assign(array(
		'USERS_REGISTER_VERIFYIMG' => cot_captcha_generate(),
	));
}