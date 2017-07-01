<?php

namespace B2\jQuery;

class Cookie extends \B2\jQuery\Plugin
{
	static function load($attrs = NULL)
	{
		\B2\jQuery::load();

		// If not installed bower-asset/jquery.cookie then using CDN
		if(empty(\bors::$bower_asset_packages['bower-asset/jquery.cookie']))
		{
			\bors_use('https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js');
			return;
		}

		// Package bower-asset/jquery.cookie installed, use them
		$bower_asset_path = \B2\Cfg::get('bower-asset.path', '/bower-asset') . '/jquery.cookie';
		jquery::plugin($bower_asset_path.'/jquery.cookie.js');
	}
}
