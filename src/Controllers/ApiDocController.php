<?php // strict
namespace Showcase\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ApiDocController extends Controller
{
	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function showApiDoc(Twig $twig):string
	{
		return $twig->render('PlentyPluginShowcase::api.classes');
	}

	/**
	 * @param Twig $twig
	 * @param string $module
	 * @return string
	 */
	public function showApiModule(Twig $twig, string $module):string
	{
		return $twig->render('PlentyPluginShowcase::api.Modules.' . $module . '.classes');
	}

}