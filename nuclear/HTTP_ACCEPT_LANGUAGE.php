<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="i18n, internationalization, internationalisation">
        <meta name="description" content="web site internationalization">
        <meta name="author" content="Henry Meinig">
<?php
# Created 2013-02-06 by HM  
/*
  $locale = 'de_DE';
  // Setting a language is not enough for some systems and the putenv() should be used to define the current locale.
  putenv("LANG=".$locale); 
  $directory = dirname(__FILE__).'/locale';
  $domain = 'messages';
  $locale ="de_DE.utf8";
  print '<p>';
  print _("The locale is: ");
  print $locale ."<br>";
  print '</p>';
*/

  // Use the following code to get the preferred locale of the http agent.       
  //$lokal = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // picks up only the language, e.g., fr
  $httpacceptlang5 = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 5); // picks up the full locale, e.g., fr-fr
  print "$httpacceptlang5";
  //print '<br>';
  //$httpacceptlang3 = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 3); // picks up the language up to comma, e.g., de,
  //print "$httpacceptlang3";
  //print '<br>';   
  // use switch-case for locale switching
  $lokal="";
  switch ($httpacceptlang5) {
     case 'de,de'||'de-de':
     $lokal = 'de_de'; // use German translations
     break;
     case 'de-at':
     $lokal = 'de_at'; // use Austrian translations
     break;     
     case 'en-us':
     $lokal = 'en_us'; // use US English translations
     break;       
  }   
  putenv("LANG=".$lokal);   // must set LANG environment variable to switch language resources 
  print '<br>';
  echo $lokal;
  
  // Specify location of translation tables
  //bindtextdomain($domain, $directory);
  // Choose domain 
  //textdomain($domain);
  //bind_textdomain_codeset($domain, 'UTF-8');   
  
   
/*
  $langs = array();

if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    // break up string into pieces (languages and q factors)
    preg_match_all('/([a-z]{1,8}(-[a-z]{1,8})?)\s*(;\s*q\s*=\s*(1|0\.[0-9]+))?/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $lang_parse);

    if (count($lang_parse[1])) {
        // create a list like "en" => 0.8
        $langs = array_combine($lang_parse[1], $lang_parse[4]);
    	
        // set default to 1 for any without q factor
        foreach ($langs as $lang => $val) {
            if ($val === '') $langs[$lang] = 1;
        }

        // sort list based on value	
        arsort($langs, SORT_NUMERIC);
    }
}

// look through sorted list and use first one that matches our languages
foreach ($langs as $lang => $val) {
	if (strpos($lang, 'de') === 0) {
		// show German site
	} else if (strpos($lang, 'en') === 0) {
		// show English site
	} 
}
	print "$lang";
	putenv("LANG=".$lang);

// show default site or prompt for language 

*/

  
  
  # Separating the tags from the resource string. The string is rendered correctly using the style sheet.
  
  print "<title>Nuclear</title>"; // Do not translate site or domain name
  print '<link type="text/css" rel="stylesheet" href="style.css">';
  print "</head>";

  print "<body>";
  print "<h1>Nuclear</h1>"; 
  print "<br>";
  print "<h2>";
  print _("Intro");
  print "</h2>";
 
  print "<p>";
  print _("Paragraph");
  print "</p>";
 
  print "<h2>";
  print _("Objective");
  print "</h2>";
  print "<p>";
  print _("Use 'cannot' instead of can't");
  print "</p>";
  print "<p>";
  print _("Use 'do not' instead of don't");
  print "</p>";
  print "<p>";
  print _("L'apostrophe");
  print "</p>";
   
  print "<p>";
  print _("Here is a link:");
  print "</p>";
  print "<p>";
  print "<a href=\"KonfigurationUSW.pdf\" target=\"_blank\">Drupal-Konfiguration</a>"; // Sample document 
  print "</p>";
  
  print "<h2>";
  print _("message section");
  print "</h2>";
  
  # variables
  $http_user_agent = $_SERVER['HTTP_USER_AGENT']; 
  print "<p>";
  eval('print "' . addslashes(gettext('You are viewing this page using $http_user_agent')) . '";');
  print "</p>";
  
  $script_filename = $_SERVER['SCRIPT_FILENAME'];
  print "<p>";
  eval ('print "' . addslashes(gettext('You are running $script_filename')) . '";');
  print "</p>";
  
  $server_software = $_SERVER['SERVER_SOFTWARE'];
  print "<p>";
  eval('print "' . addslashes(gettext('The server web app that runs PHP is $server_software.')) . '";');
  print "</p>";
  
  $first_name = "Yagyu";
  $last_name = "Munenori";
  print "<p>";
  eval('print "' . addslashes(gettext('Ohaio gozaimasu, $last_name $first_name')) . '";');
  print "</p>";
  print "<p>";  
  eval('print "' . addslashes(gettext('Ohaio gozaimasu')) . '";');
  print "</p>";
  
  # using period as concatenation operator
  $full_name = $last_name . " " . $first_name;
  print "<p>";
  eval('print "' . addslashes(gettext('Ohaio gozaimasu, $full_name')) . '";');
  print "</p>";
  
  # string length function strlen  
  print "<p>";
  print strlen("Buon giorno");
  print "</p>";
  
  # date constant
  define ('TODAY', 'February 6, 2013');
  echo 'Today is ' . TODAY;
 
 ?>

 </body>
</html>


