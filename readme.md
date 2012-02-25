# Query Viewer

## Installation

### Aritsan

	php artisan bundle:install queryviewer

### Bundle Registration

Add the following to your **application/bundles.php** file:

	'queryviewer' => array(
		'auto' => 'true',
	),

## Usage

To see the queries add "?debug-query=1" in the url and Query Viewer are only enabled in local environment. (LARAVEL_ENV = local)