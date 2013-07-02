<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="i18n, internationalization, internationalisation">
        <meta name="description" content="web site internationalization">
        <meta name="author" content="Henry Meinig">
        <title>LocaleForm</title>
        <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>

<input type="hidden" name="submitted" value="1" />

<?php
session_start();
 
//if (isset($_POST['submitted'])) {
    
    
$locales = array ('de_DE' => 'German (Germany)', 
                  'de_AT' => 'German (Austria)',
                  'en_US' => 'English (US)',
                  'es_MX' => 'Spanish (Mexico)');
                  
foreach ($locales as $key => $value) {
        print '<p>';
        print "The value at $key is $value.";
        print '</p>';
        }             
        print '<form action="" method="post">';           
        print '<select name="locales">';
        foreach ($locales as $key => $value) {
        print "<option value=\"$key\">$value</option>\n";
        }
        print '</select>';         
        print '</form>';  
//    }

/*
print "$_SESSION[LANG]";
print "$currLang";

if ($_SESSION[LANG] == "") { 
        $_SESSION[LANG] = "en";
        $currLang = "en"; 
} else { 
        $currLang = $_GET[LANG]; 
        $_SESSION[LANG] = $currLang; 
}   
switch($currLang) { 
	case "en": 
	define("LANG", "en"); 
	break; 
	case "de": 
	define("LANG", "de"); 
	break; 
	case "ja": 
	define("LANG", "ja"); 
	break; 
	default: 
	define("LANG", "en"); 
	break;      
	  } 
*/  

/*
$lang = substr($_SERVER['PHP_SELF'],11,10);
define('LANG', $lang);
switch($lang) {
   case 'fi': {
      define('LOCALE', 'fi_FI');
      setlocale(LC_ALL,'fi_FI.UTF-8');
      break;
   }
   case 'en': {
      define('LOCALE', 'en_US');
      setlocale(LC_ALL,'en_US.UTF-8');
      break;
   }
   default: {
      define('LOCALE', 'fi_FI');
   }
   }
   print $lang . '<br>';
   print LANG . '<br>';
   print LOCALE;
*/

 ?>
 </body>
</html>


