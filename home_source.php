<?php
/* Some php functions for generating the site */
if (!defined('NDW'))
	die('No direct access...');

// some variables:
$weblink = 'LINK';

// ...html header (<html><body>)...
function html_header()
{
	echo '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<!-- <link rel="icon" type="image/png" href="img/icon.png"/> -->
		<link id="styles" rel="stylesheet" href="res/style.css"/>
		<title>Home</title>
	</head>
	<body>';
}

// ...end of an html page (</body></html>)... AND Disclaimer
function html_bottom()
{
	echo '
	<div class="footer">
		blah...
		</div>
	</body>
</html>';
}

// New website for Dothraki!
function home()
{
	echo '
	<div class="mblock">
		Content
	</div>';
}

// The Na(')vi-gation bar
function navbar()
{
	global $weblink;

	echo '
	<nav>
		<ul class="nav">
			<li>
				<a href="', $weblink ,'">Home</a>
			</li>
			<li>
				<a href="', $weblink ,'?action=media">Media</a>
			</li>
			<li>
				<a href="', $weblink ,'?action=irc_dothraki">IRC</a>
			</li>
			<li>
				<a href="', $weblink ,'?action=staff">Staff</a>
			</li>
			<li>
				<a href="#">Wiki</a>
			</li>
			<li>
				<a href="#">Forum</a>
			</li>
		</ul>
	</nav>';
}

// ...for the IRC page
function d_irc()
{
	echo '
	<div class="mblock">
		Content
	</div>
	</div>';
}

// the media page
function d_media()
{
	echo '
	<div class="mblock">
		Content
	</div>';
}

// ...the Staff page
function d_staff()
{
	echo '
	<div class="mblock">
		Content
	</div>';
}
?>
