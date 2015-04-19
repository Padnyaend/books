<?php defined('SYSPATH') or die('No direct script access.');
	
	echo ' 
		<!DOCTYPE html>
	    <html xmlns="http://www.w3.org/1999/xhtml">
		<head>
	    <title>Books</title>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
        <meta http-equiv="pragma" content="no-cache" />
        <meta http-equiv="expires" content="0" />
	';		
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/all.css" />
	';
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/demo.css" />
	';	
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/core.css" />
	';	
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/sh.css" />
	';	
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	     'resources/primeui-1.1/primeui-1.1.css" />
	';
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	     'resources/primeui-1.1/themes/aristo/theme.css" />
	';
	echo '<link rel="stylesheet" href="http://'.$_SERVER['SERVER_NAME'].URL::base().
	     'resources/jquery-ui.css" />
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	     'resources/core.js"></script>
	';	
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	     'resources/sh.js"></script>
	';	
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	     'resources/primeui-1.1/primeui-1.1.js"></script>
	';	
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/jquery.js"></script>
	';
	echo '<script src="http://'.$_SERVER['SERVER_NAME'].URL::base().
	'resources/jquery-ui.js"></script>
	';
	
	echo View::factory('bookstable')->set('books', $books);
			
echo '</html>';

