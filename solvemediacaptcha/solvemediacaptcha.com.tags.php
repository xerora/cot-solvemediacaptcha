<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=comments.newcomment.tags
Tags=comments.tpl:{COMMENTS_FORM_VERIFYIMG}
[END_COT_EXT]
==================== */

if($cfg['captchamain'] == 'solvemediacaptcha')
{
	$t->assign('COMMENTS_FORM_VERIFYIMG', cot_captcha_generate());
}