<?php
namespace Showcase\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Response;
use Symfony\Component\HttpFoundation\Response as BaseResponse;
use Plenty\Plugin\Templates\Twig;

class ApiDocController extends Controller
{
	 /**
     * @param Twig     $twig
     * @param Response $response
     * @param string   $module
     *
     * @return BaseResponse|string
     */
	public function showApiModule(Twig $twig, Response $response, \Plenty\Plugin\Templates\View $view, string $module)
	{
        try
        {
            $content = $twig->render('PlentyPluginShowcase::api.Modules.' . $module . '.classes');

            return $response->make($content);
        }
        catch (\Exception $e)
        {
            return $view->render('PlentyPluginShowcase::api.Modules.' . $module . '.classes');
            //$response->make($e->getMessage(), 418);
        }
	}

	public function showIncludedMarkdown(Twig $twig)
    {
        return $twig->render('PlentyPluginShowcase::api.interfaces_page');
    }

}
