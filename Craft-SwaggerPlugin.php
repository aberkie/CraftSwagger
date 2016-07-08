<?php

/**
 * GamesAppPlugin Main File
 *
 * Author: Aaron Berkowitz <asberkowitz@pbs.org>
 *
 */

namespace Craft;

class Craft-SwaggerPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Craft Swagger');
	}

	function getVersion()
	{
		return '1.0';
	}

	function getDeveloper()
	{
		return 'Aaron Berkowitz';
	}

	function getDeveloperUrl()
    {
        return 'http://github.com/aberkie';
    }
 	
 	public function hasCpSection()
    {
        return true;
    }
}