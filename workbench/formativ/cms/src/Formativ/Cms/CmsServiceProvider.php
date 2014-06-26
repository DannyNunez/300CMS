<?php namespace Formativ\Cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
            "Formativ\Cms\CompilerInterface",
            function(){
                return new Compiler\Bade(
                    $this->app->make("files"),
                    $this->app->make("path.storage") . "/views"
                );
            }
        );
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
            "Formative\Cms\CompilerInterface",
            "Formativ\Cms\EngineInterface"
        ];
	}

}
