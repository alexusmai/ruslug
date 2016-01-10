<?php namespace Alexusmai\Ruslug;

use Illuminate\Support\ServiceProvider;

class RuslugServiceProvider extends ServiceProvider{


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
