<?php

// Force Vercel-compatible environment variables (overrides user dashboard settings if they conflict)
putenv('LOG_CHANNEL=stderr');
$_ENV['LOG_CHANNEL'] = 'stderr';

putenv('SESSION_DRIVER=cookie');
$_ENV['SESSION_DRIVER'] = 'cookie';

putenv('CACHE_DRIVER=array');
$_ENV['CACHE_DRIVER'] = 'array';

putenv('VIEW_COMPILED_PATH=/tmp');
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

// Forward requests to the Laravel public index.php file
require __DIR__ . '/../public/index.php';
