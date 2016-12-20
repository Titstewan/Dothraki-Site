<?php
@ini_set('memory_limit', '8M');
define('NDW', 1);
require_once(dirname(__FILE__) . '/home_source.php');
html_header();
navbar();
// Just change staff(); to something with another content.
d_staff();
html_bottom();
?>
