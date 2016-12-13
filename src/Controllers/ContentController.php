<?php //strict

namespace Showcase\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

use Plenty\Modules\Category\Contracts\CategoryRepositoryContract;
use Plenty\Modules\Item\DataLayer\Contracts\ItemDataLayerRepositoryContract;
use Plenty\Modules\Category\Models\Category;

class ContentController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function showLandingPage(Twig $twig):string
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_USERAGENT,'plenty-plugin-showcase-fork-count');
        curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/plentymarkets/plenty-plugin-showcase');
        $result = curl_exec($ch);
        curl_close($ch);
        $payload = json_decode($result, true);
        $templateData = array(
            'curlResult' => $payload,
        );
      return $twig->render('PlentyPluginShowcase::content.LandingPage', $templateData);
    }

    /**
     * @param Twig $twig
     * @param string $pageName
     * @return string
     */
    public function showTutorials(Twig $twig, string $pageName):string
    {
        return $twig->render('PlentyPluginShowcase::content.tutorials.' . $pageName);
    }

    /**
     * @param Twig $twig
     * @param string $pageName
     * @return string
     */
    public function showDevGuidePage(Twig $twig, string $pageName):string
    {
        return $twig->render('PlentyPluginShowcase::content.devguide.' . $pageName);
    }

    /**
     * @param Twig $twig
     * @param string $pageName
     * @return string
     */
    public function showMarketplacePage(Twig $twig, string $pageName):string
    {
        return $twig->render('PlentyPluginShowcase::content.marketplace.' . $pageName);
    }
}
