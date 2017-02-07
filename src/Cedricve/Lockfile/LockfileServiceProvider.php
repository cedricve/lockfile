<?php namespace Cedricve\Lockfile;

use Session;
use Illuminate\Support\ServiceProvider;

class LockfileServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		Session::extend('lockfile', function($app)
		{
			$path = $this->app['config']['session.files'];
		    return new Lockfile($this->app['files'], $path);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}
}
