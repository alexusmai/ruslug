<?php
namespace Alexusmai\Ruslug;

class RuslugServiceProvider extends \Illuminate\Support\ServiceProvider{


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('slug', function($app){
            return new Slug($app);
        });
	}

}
