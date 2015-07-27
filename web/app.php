<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

$loader = require_once __DIR__.'/../app/bootstrap.php.cache';

// env info
$kernelEnvironments = array('dev', 'test');
$kernelEnv = (isset($_COOKIE['env']) && !empty($_COOKIE['env'])) ? $_COOKIE['env'] : false;

// set (override) / delete cookie
if(isset($_GET['env']) && !empty($_GET['env'])) {
    $kernelEnv = in_array($_GET['env'], $kernelEnvironments) ? $_GET['env'] : false;
    setcookie('env', $kernelEnv, ($kernelEnv) ? time()+86400 : time()-60, '/');
}

// begin debug
if (in_array($kernelEnv, $kernelEnvironments)) Debug::enable();

// Enable APC for autoloading to improve performance.
// You should change the ApcClassLoader first argument to a unique prefix
// in order to prevent cache key conflicts with other applications
// also using APC.
/*
$apcLoader = new ApcClassLoader(sha1(__FILE__), $loader);
$loader->unregister();
$apcLoader->register(true);
*/

require_once __DIR__.'/../app/AppKernel.php';
//require_once __DIR__.'/../app/AppCache.php';

in_array($kernelEnv, $kernelEnvironments) ? $kernel = new AppKernel($kernelEnv, true) : $kernel = new AppKernel('prod', false);

$kernel->loadClassCache();
//$kernel = new AppCache($kernel);

// When using the HttpCache, you need to call the method in your front controller instead of relying on the configuration parameter
//Request::enableHttpMethodParameterOverride();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
