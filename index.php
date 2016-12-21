<?php
// For some reasons, we will have to set up a memory limit to keep the server happy
@ini_set('memory_limit', '8M');

// This is kind of important.
define('NDW', 1);

// Emit some headers for some modicum of protection against nasties.
if (!headers_sent())
{
	// Future versions will make some of this configurable. This is primarily a 'safe' configuration for most cases for now.
	header('X-Frame-Options: SAMEORIGIN');
	header('X-XSS-Protection: 1');
	header('X-Content-Type-Options: nosniff');
}

// Let's require the source file!
require_once(dirname(__FILE__) . '/home_source.php');

//$sourcedir = 'D:\\server\\htdocs\\dothraki_site';

// Call the main functions, woo!
// The <html> start tag and the buttors for Na'vigation
html_header();
navbar();

// The Homepage
// What function shall we execute? (done like this for memory's sake.)
call_user_func(hp_main());

// The main controlling function.
function hp_main()
{
	// Check if we view an action else we view the homepage
	if (empty($_REQUEST['action']))
	{
		home();
	}

	// Here's the $_REQUEST['action'] array - $_REQUEST['action'] => array($file, $function).
	$actionArray = array(
		'irc_dothraki' => array('home_source.php', 'd_irc'),
		'media' => array('home_source.php', 'd_media'),
		'staff' => array('home_source.php', 'd_staff'),
	);

	// Otherwise, it was set - so let's go to that action.
	require_once(dirname(__FILE__) . '/' . $actionArray[$_REQUEST['action']][0]);
	return $actionArray[$_REQUEST['action']][1];
}

// HTML end </html> plus the disclaimer
html_bottom();


?>
