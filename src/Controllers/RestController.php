<?php // strict
namespace Showcase\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class RestController extends Controller
{
	/**
	 * @param Twig $twig
	 * @param string $moduleName
	 * @return string
	 */
	public function showRestModule(Twig $twig, string $moduleName):string
	{
		return $twig->render('PlentyPluginShowcase::rest.intermediate_'.$moduleName);
	}

	/**
	 * @param Twig $twig
	 * @param string $moduleName
	 * @return string
	 */
	public function showRestModuleDetail(Twig $twig, string $moduleName):string
	{
		return $twig->render('PlentyPluginShowcase::rest.'.$moduleName);
	}

	/**
	 * @param Twig $twig
	 * @return string
	 */
	public function showRestIntroduction(Twig $twig):string
	{
		return $twig->render('PlentyPluginShowcase::rest.introduction');
	}
}