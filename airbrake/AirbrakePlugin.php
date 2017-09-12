<?php


/**
 * Airbrake plugin for Craft CMS
 *
 * Plugin that allows you to log errors/exceptions in Craft to Airbrake.
 *
 * @author    Chris Southam
 * @copyright Copyright (c) 2017 Chris Southam
 * @link      http://www.csoutham.com
 * @package   CraftCMS-Airbrake
 * @since     1.0.1
 */


namespace Craft;


class AirbrakePlugin extends BasePlugin
{
	/**
	 * Initialize Airbrake.
	 */
	public function init()
	{
		// Log Craft Exceptions to Airbrake
		craft()->onException = function ($event) {
			craft()->airbrake->notify($event->exception);
		};
		
		// Log Craft Errors to Airbrake
		craft()->onError = function ($event) {
			craft()->airbrake->notify($event->message);
		};
	}
	
	
	/**
	 * @return mixed
	 */
	public function getName()
	{
		return Craft::t('Airbrake');
	}
	
	
	/**
	 * @return mixed
	 */
	public function getDescription()
	{
		return Craft::t('Allows you to log errors/exceptions in Craft to Airbrake.');
	}
	
	
	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return 'https://github.com/csoutham/Craft-Airbrake/blob/master/README.md';
	}
	
	
	/**
	 * @return string
	 */
	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/csoutham/Craft-Airbrake/master/releases.json';
	}
	
	
	/**
	 * @return string
	 */
	public function getVersion()
	{
		return '1.0.1';
	}
	
	
	/**
	 * @return string
	 */
	public function getSchemaVersion()
	{
		return '1.0.0';
	}
	
	
	/**
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'Chris Southam';
	}
	
	
	/**
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'http://ww.csoutham.com';
	}
}