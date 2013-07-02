<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="i18n, internationalization, internationalisation">
        <meta name="description" content="web site internationalization">
        <meta name="author" content="Henry Meinig">
<?php
  print '<form action="index2.php" method="post">';       
  print '<p>';
  print '<select name="lokation">';
  
  print '<option value="en_US.utf8">';
  print _("English");
  print '</option>';  
    
  print '<option value="de_DE.utf8">';
  print _("German");
  print '</option>';    
  
  print '<option value="de_AT.utf8>';
  print _("Austrian");
  print '</option>';  
  
  print '<option value="es_MX.utf8>';
  print _("Mexican");
  print '</option>';  
    
  print '</select>';
  print '</p>';    
   // submit button
  print '<div align="center"><input type="submit" name="submit"';
  print ' value="';
  print _("Submit");
  print '"/>';
  print '</div>';  
  print '</form>';    
  $locale = $_POST['lokation'];   
  putenv("LANG=".$locale); 
  $directory = dirname(__FILE__).'/locale';
  $domain = 'messages';     
    
  // Specify location of translation tables
  bindtextdomain($domain, $directory);
  // Choose domain 
  textdomain($domain);
  bind_textdomain_codeset($domain, 'UTF-8');      
  
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
  
 
 ?>

 </body>
</html>


