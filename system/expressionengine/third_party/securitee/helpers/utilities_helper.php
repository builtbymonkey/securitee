<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Securit:ee - Helper Functions
 *
 * Helper Functions
 *
 * @package 	mithra62\Securitee
 * @author		Eric Lamb
 * @filesource 	./system/expressionengine/third_party/backup_pro/helpers/utilities_helper.php
 */

if(!function_exists('m62_theme_url'))
{
	/**
	 * Sets up the third party theme URL
	 * @return string
	 */
	function m62_theme_url()
	{
		$url = '';
		if(defined('URL_THIRD_THEMES'))
		{
			$url = URL_THIRD_THEMES;
		}
		else
		{
			$url = rtrim(ee()->config->config['theme_folder_url'], '/') .'/third_party/';
		}

		return $url;
	}
}

if(!function_exists('m62_theme_path'))
{
	/**
	 * Sets up the third party themes path
	 * @return string
	 */
	function m62_theme_path()
	{
		$path = '';
		if(defined('PATH_THIRD_THEMES'))
		{
			$path = PATH_THIRD_THEMES;
		}
		else
		{
			$path = rtrim(ee()->config->config['theme_folder_path'], '/') .'/third_party/';
		}

		return $path;
	}
}

if(!function_exists('m62_third_party_path'))
{
	/**
	 * Sets up the third party add-ons path
	 * @return string
	 */
	function m62_third_party_path()
	{
		$path = '';
		if(defined('PATH_THIRD'))
		{
			$path = PATH_THIRD;
		}
		else
		{
			$path = APPPATH.'third_party/';
		}

		return $path;
	}
}