<?hh // strict
namespace Showcase\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Templates\Twig;

class ApiDocController extends Controller
{
	/**
	 *
	 */
	public function showApiDoc(Twig $twig):string
	{

		return $twig->render('PlentyPluginShowcase::api.classes');
}

	public function showApiModule(Twig $twig, Response $response, string $module):mixed
	{
        try
        {
            $content = $twig->render('PlentyPluginShowcase::api.Modules.' . $module . '.classes');

            return $content;
        }
        catch (\Exception $e)
        {
            return $response->make('', 404);
        }
	}

}