# Query Viewer

## Installation

### Aritsan

	php artisan bundle:install queryviewer

### Bundle Registration

Add the following to your **application/bundles.php** file:

	'queryviewer' => array(
		'auto' => 'true',
	),

## Guide

To see the queries add "?debug-query=1" in the url and it will only show in local environment. (LARAVEL_ENV = local)