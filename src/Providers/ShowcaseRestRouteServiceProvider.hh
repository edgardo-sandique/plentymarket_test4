<?hh // strict
namespace Showcase\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class ShowcaseRestRouteServiceProvider extends RouteServiceProvider
{
	/**
	 *
	 */
	public function register():void
	{
	}

	/**
	 *
	 */
	public function map(Router $router):void
	{

		$router->get('rest-doc/introduction', 'Showcase\Controllers\RestController@showRestIntroduction')
			->where('moduleName', '[a-zA-Z_]+');

		$router->get('rest-doc/{moduleName}', 'Showcase\Controllers\RestController@showRestModule')
			->where('moduleName', '[a-zA-Z_]+');

		$router->get('rest-doc/{moduleName}/details', 'Showcase\Controllers\RestController@showRestModuleDetail')
			->where('moduleName', '[a-zA-Z_]+');
	}
}