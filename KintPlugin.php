<?php
namespace Craft;

/**
* Kint Wrapper Plugin.
*
* @author    Apola Kipso
* @copyright Copyright (c) 2015, Apola Kipso
* @license   MIT
*
* @link      https://github.com/apolakipso/kint
*/
class KintPlugin extends BasePlugin
{
	function getName()
	{
		return Craft::t('Kint');
	}

	function getVersion()
	{
		return '0.0.1';
	}

	function getDeveloper()
	{
		return 'Apola Kipso';
	}

	function getDeveloperUrl()
	{
		return 'https://github.com/apolakipso';
	}

	protected function defineSettings()
	{
		return [
			'mode' => AttributeType::Number,
		];
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('kint/_settings', [
			'settings' => $this->getSettings()
		]);
	}

	function addTwigExtension()
	{
		Craft::import('plugins.kint.twigextensions.KintTwigExtension');
		return new KintTwigExtension();
	}

}
