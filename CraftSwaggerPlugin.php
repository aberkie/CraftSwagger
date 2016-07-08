<?php

/**
 * GamesAppPlugin Main File
 *
 * Author: Aaron Berkowitz <asberkowitz@pbs.org>
 *
 */

namespace Craft;

class CraftSwaggerPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Craft Swagger');
	}

	function getVersion()
	{
		return '0.0.1';
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