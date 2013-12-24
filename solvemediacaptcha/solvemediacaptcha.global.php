<?php defined('COT_CODE') or die('Wrong URL');
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

require_once $cfg['plugins_dir'] . '/solvemediacaptcha/inc/solvemedia/solvemedialib.php';
require_once cot_langfile('solvemediacaptcha', 'plug');

function solvemediacaptcha_generate()
{
	return solvemedia_get_html(cot::$cfg['plugin']['solvemediacaptcha']['challenge_key']);
}

function solvemediacaptcha_validate($res)
{
	$response = solvemedia_check_answer(
		cot::$cfg['plugin']['solvemediacaptcha']['private_key'],
		$_SERVER['REMOTE_ADDR'],
		$_POST['adcopy_challenge'],
		$_POST['adcopy_response'],
		cot::$cfg['plugin']['solvemediacaptcha']['hash_key']
	);
	return $response->is_valid;
}

$cot_captcha[] = 'solvemediacaptcha';