<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=comments.send.first
[END_COT_EXT]
==================== */

if($cfg['captchamain'] == 'solvemediacaptcha')
{
	if(!solvemediacaptcha_validate(null) && $usr['id'] == 0)
	{
		cot_error('captcha_verification_failed');
	}
}