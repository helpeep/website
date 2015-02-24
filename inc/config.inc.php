<?php

date_default_timezone_set('America/Los_Angeles');

if ( $_SERVER['SERVER_NAME'] == 'ubuntulocal.dev') :
	define('MY_ENV', 'dev');
else :
	define('MY_ENV', 'prod');
endif;

if (MY_ENV == 'dev') :
	define("MY_SITEURL","http://".$_SERVER['HTTP_HOST']."/helpeep/website");
	define("JQUERY", "js/jquery.min.js");
	define("MAILCHIMP", "css/mailchimp.css");
else :
	define("MY_SITEURL","http://".$_SERVER['HTTP_HOST']."");
	define("JQUERY", "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js");
	define("MAILCHIMP", "http://cdn-images.mailchimp.com/embedcode/classic-081711.css");
endif;

define("FACEBOOK", "https://www.facebook.com/helpeep");
define("GITHUB", "https://github.com/helpeep");