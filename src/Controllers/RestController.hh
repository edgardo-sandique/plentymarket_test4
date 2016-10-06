<?hh // strict
namespace Showcase\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Response;
use Plenty\Plugin\Templates\Twig;

class RestController extends Controller
{
	/**
	 *
	 */
	public function showRestModule(Twig $twig, Response $response, string $moduleName):mixed
	{
		try
        {
		    $content = $twig->render('PlentyPluginShowcase::rest.intermediate_'.$moduleName);

            return $content;
        }
        catch (\Exception $e)
        {
            return $response->make('', 404);
        }
	}

	/**
	*
	*/
	public function showRestModuleDetail(Twig $twig, Response $response, string $moduleName):mixed
	{
        try
        {
            $content = $twig->render('PlentyPluginShowcase::rest.'.$moduleName);

            return $content;
        }
        catch (\Exception $e)
        {
            return $response->make('', 404);
        }
	}

	public function showRestIntroduction(Twig $twig):string
	{
		return $twig->render('PlentyPluginShowcase::rest.introduction');
	}

}
