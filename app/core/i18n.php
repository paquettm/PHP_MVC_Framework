<?php


//to accept languages from the querystring as follows: mysite.com?lang=fr_CA
if(isset($_GET['lang'])){ //if there is a language choice in the querystring
	$lang = $_GET['lang'];//use this language
	setcookie("lang",$lang); //set a cookie
}else
	$lang=(isset($_COOKIE["lang"])?$_COOKIE["lang"]:'en'); //from cookie or default
//extract the root language from the complete locale to use with strftime
$rootlang = preg_split('/_/', $lang); $rootlang = (is_array($rootlang)?$rootlang[0]:$rootlang);

//We are removing this because it sets the process locale and not the thread locale. As a result, with multiple threads, we could encounter a race condition bug. Gettext still works the way we set out to use it.
//setlocale(LC_ALL, $rootlang.".UTF8");//which locale to use. .UTF8 is to ensure proper encoding of output

bindtextdomain($lang, "locale"); //pointing to the locale folder for the language of choice
textdomain($lang); //what is the file name to find translations

//for dates, we will use the intl module