<?php

Route::filter('after', function($response)
{
	if ($_SERVER['LARAVEL_ENV'] == 'local') {
		$queries = DB::profile();
		$count = 0;
		$sum = 0;
		$queries = array_map(function ($query) use (&$count, &$sum) {
			$sum += $query['time'];
			return (++$count) . '. ' . $query['sql'] . PHP_EOL . implode(',',$query['bindings']) . PHP_EOL . 'Time: ' . $query['time'] . 'ms' . PHP_EOL . '---';
		}, $queries);

		$queries[] = 'Total time: ' . $sum . 'ms' . PHP_EOL . '---';

		$log_file = path('storage').'queries.txt';
		File::append($log_file, implode(PHP_EOL, $queries) . PHP_EOL);

		if ( Input::has('debug-query') ) {
			echo implode(PHP_EOL, $queries);
			die();
		}

	}
});
