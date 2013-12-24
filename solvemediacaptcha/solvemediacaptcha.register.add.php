<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=users.register.add.first
[END_COT_EXT]
==================== */

if($cfg['captchamain'] == 'solvemediacaptcha')
{
	if(!cot_captcha_validate(null))
	{
		cot_error('captcha_verification_failed');
	}
}