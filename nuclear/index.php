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
  
  // Use the following code to get the preferred locale of the http agent. 
  // $locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']); 
  
  // Specify location of translation tables
  bindtextdomain($domain, $directory);
  // Choose domain 
  textdomain($domain);
  bind_textdomain_codeset($domain, 'UTF-8');
  
  print '<p>';
  print "Current operating system locale is ". setlocale(LC_ALL, "") . "\n\n";
  print '</p>';
  # Test Strings
  print "<br>";
  print "<p>";
  print gettext("Sample String 1"); // Wrap all text to be externalized with gettext(). Must use double quotes.
  print "</p>";
  print "<p>";
  print _("Sample String 2"); // You can use the _() macro instead.
  print "</p>";
  
  # ngettext
  $number = 2;
  print "<p>";
  print ngettext("house", "houses", $number);
  print "</p>";
  
  # Separating the tags from the resource string. The string is rendered correctly using the style sheet.
  print "<p>";
  print _("Sample String 3");
  print "</p>";

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
  define ('TODAY', 'March 7th, 2013');
  echo 'Heutiges Datum: ' . TODAY;
 
 ?>

 </body>
</html>


