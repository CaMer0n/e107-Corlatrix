<?php
if (!defined('e107_INIT')) { exit; }
// Dummy Theme Configuration File.
class theme_config implements e_theme_config
{
	function config()
	{
 
		$fields = array(
			'topbar' => array('title' => 'Top Bar (Social Icons)', 'type'=>'boolean', 'help'=>''),
			'phone'         => array('title' => 'Header Phone Number', 'type'=>'text', 'help'=>''),
 		);
		return $fields;

	}
	function help()
	{
	 	return '';
	}
}
?>
