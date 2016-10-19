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
     * @return BaseResponse
     */
	public function showApiModule(Twig $twig, Response $response, string $module):BaseResponse
	{
        try
        {
            $content = $twig->render('PlentyPluginShowcase::api.Modules.' . $module . '.classes');

            return $response->make($content);
        }
        catch (\Exception $e)
        {
            return $response->make('', 404);
        }
	}

}
