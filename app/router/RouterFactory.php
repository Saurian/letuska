<?php

namespace App;

use Nette,
	Nette\Application\Routers\RouteList,
	Nette\Application\Routers\Route,
	Nette\Application\Routers\SimpleRouter;


/**
 * Router factory.
 */
class RouterFactory
{

	/**
	 * @return \Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList();
		$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');

        $router   = new RouteList();
        $router[] = new Route('index.php', 'App:Homepage:default', Route::ONE_WAY);

        $router[] = $adminRouter = new RouteList('Cms');
        $adminRouter[] = new Route('admin/[<locale=cs cs|en>/]<presenter>/<action>[/<id>]', array(
            'presenter' => 'Dashboard',
            'action'    => 'default'
        ));

        $router[] = $frontRouter = new RouteList('');

        $frontRouter[] = new Route('sitemap.xml', array(
            'presenter' => 'Sitemap',
            'action'    => 'sitemap',
        ));

        $frontRouter[] = new Route('[<locale=cs sk|en|cs|hu|es|ru|uk|pl|fr|de|it>/]<presenter>/<action>[/<id>]', array(
                'presenter' => array(
                    Route::VALUE        => 'Homepage',
                    Route::FILTER_TABLE => array(),
                ),
                'action'    => 'default',
            )
        );

		return $router;
	}

}
