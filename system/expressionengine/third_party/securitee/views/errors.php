<?php
if(count($errors) >= 1)
{
	$parts = parse_url($_SERVER['HTTP_HOST']);
	$url = 'http://';
	if(isset($parts['scheme']) && $parts['scheme'] == 'https')
	{
		$url = 'https://';
	}	
	$url .= 'mithra62.com';
	
	foreach($errors AS $error)
	{
		echo '<div id="m62_system_error">';
		$replace = array('#db_dir#', '#files_dir#', '#config_url#');
		$paths[] = $url_base.'settings';
		$str = str_replace($replace, $paths, lang($error));
		echo $str;
		if(count($errors) > 1)
		{
			echo '<br />';
		}
		echo '</div>';
	}
}
?>