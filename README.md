Lock file
------------

A service provider driver which properly locks the file session driver for Laravel.

History
------------

This issue was resolved with a pull request which was never integrated in the Laravel core, because the Laravel team wasn't able to reproduce it.

https://github.com/laravel/framework/pull/6848

Usage
------------

Add to composer.json.

	"cedricve/lockfile": "1.0.0",
  
Load Service Provider in **app/config/app.config**, immediately after SessionServiceProvider.

    'Illuminate\Session\SessionServiceProvider',
    'Cedricve\Lockfile\LockfileServiceProvider',
    
Load the **lockfile** session provider in **app/config/session.php**.

    'driver' => 'lockfile',
