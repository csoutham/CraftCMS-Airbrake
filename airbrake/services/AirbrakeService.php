<?php


/**
 * Airbrake plugin for Craft CMS
 *
 * Plugin that allows you to log errors/exceptions in Craft to Airbrake.
 *
 * @author    Chris Southam
 * @copyright Copyright (c) 2017 Chris Southam
 * @link      http://www.csoutham.com
 * @package   Craft-Airbrake
 * @since     1.0.0
 */


namespace Craft;


class AirbrakeService extends BaseApplicationComponent
{
	protected $airbrake;
	
	
	/**
	 * Init Airbrake.
	 */
	public function init()
	{
		parent::init();
		
		
		// Require Airbrake vendor code
		require_once __DIR__ . '/../vendor/autoload.php';
		
		
		$environment = craft()->config->get('environment', 'airbrake') ?? CRAFT_ENVIRONMENT;
		
		
		// Init Airbrake
		$host = craft()->config->get('host', 'airbrake');
		$projectKey = craft()->config->get('projectKey', 'airbrake');
		$projectId = craft()->config->get('projectId', 'airbrake');
		
		
		$this->airbrake = new \Airbrake\Notifier([
			'environment' => $environment,
			'projectId' => $projectId,
			'projectKey' => $projectKey,
			'host' => $host
		]);
	}
	
	
	public function notify()
	{
		$handler = new \Airbrake\ErrorHandler($this->airbrake);
		$handler->register();
	}
	
}