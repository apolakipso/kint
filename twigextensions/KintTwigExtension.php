<?php
namespace Craft;

class KintTwigExtension extends \Twig_Extension {

	protected $_settings;

	const MODE_ON = 1;
	const MODE_OFF = 0;
	const MODE_DEV = 2;

	public function getName() {
		return 'Kint';
	}

	public function getFunctions() {
		// @see http://craftcms.stackexchange.com/a/8597
		// @see http://craftcms.stackexchange.com/questions/3039/how-do-i-prevent-twig-from-encoding-html
		return [
			'd' => new \Twig_SimpleFunction('d', [$this, 'twig_kint_dump'], ['is_safe' => ['html']]),
			's' => new \Twig_SimpleFunction('s', [$this, 'twig_kint_simple'], ['is_safe' => ['html']]),
		];
	}

	public function initRuntime(\Twig_Environment $env) {
		require CRAFT_PLUGINS_PATH . '/kint/vendor/autoload.php';
		$this->_settings = craft()->plugins->getPlugin('kint')->getSettings();

	}

	public function isEnabled() {
		$mode = $this->_settings->mode;
		return self::MODE_ON == $mode || (self::MODE_DEV == $mode && craft()->config->get('devMode') == 1);
	}

	public function twig_kint_dump($var) {
		if (!$this->isEnabled()) {
			return '';
		}
		return @d($var);
	}

	public function twig_kint_simple($var) {
		if (!$this->isEnabled()) {
			return '';
		}
		return @s($var);
	}
}
