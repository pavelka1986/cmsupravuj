<?php



// Step 1: Load Nette Framework
// this allows load Nette Framework classes automatically so that
// you don't have to litter your code with 'require' statements
// require LIBS_DIR . '/Nette/loader.php';
require LIBS_DIR . '/Nette/loader.php';



// Step 2: Configure environment
// 2a) enable Nette\Debug for better exception and error visualisation
Debug::enable();

// 2b) load configuration from config.ini file
Environment::loadConfig();



// Step 3: Configure application
$application = Environment::getApplication();
$application->catchExceptions = FALSE;
// Step 3a: Configure database connection
dibi::connect(Environment::getConfig('database'));

// Step 4: Setup application router
$router = $application->getRouter();

// mod_rewrite detection

    # AdminModule routes
    $router[] = new Route('admin/<presenter>/<action>/<id>', array(
    'module'    => 'Admin',
    'presenter' => 'Default',
    'action'    => 'default',
    'id'        => null
    ));


    $router[] = new Route('index.php', array(
		'module' => 'Front',
		'presenter' => 'Web',
	), Route::ONE_WAY);


	$router[] = new Route('[<presenter>/<action (default)>/]<url>/<id>/', array(
		'presenter' => 'Front:Web',
		'action' => 'default',
		'url' => NULL,
		'id' => 1,
	));
	
	$router[] = new Route('[<presenter>/]<action (clanky)>/<id>/<url>/', array(
		'presenter' => 'Front:Web',
		'action' => 'clanky',
		'id' => 1,
		'url' => NULL,
	));
	
	$router[] = new Route('[<presenter>/]<action (foto)>/<id>/<url>/', array(
		'presenter' => 'Front:Web',
		'action' => 'foto',
		'id' => 1,
		'url' => NULL,
	));
	

	





// Step 5: Run the application!
$application->run();
