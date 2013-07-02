<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="i18n, internationalization, internationalisation">
        <meta name="description" content="web site internationalization">
        <meta name="author" content="Henry Meinig">
        <title>Form Feedback</title>
        <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $locale = 'de_DE';
  // Setting a language is not enough for some systems and the putenv() should be used to define the current locale.
  putenv("LANG=".$locale); 
  $directory = dirname(__FILE__).'/locale';
  $domain = 'messages';
  $locale ="de_DE.utf8"; 
  // Specify location of translation tables
  bindtextdomain($domain, $directory);
  // Choose domain 
  textdomain($domain);
  bind_textdomain_codeset($domain, 'UTF-8'); 
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  
 // Print the submitted information
 if ( !empty($_POST['name']) && !empty($_POST['comments']) && !empty($_POST['email']) && !empty($_POST['gender'])) {
   print '<p>';
   eval ('print "' . addslashes(gettext('Thank you, $name for the following comments:')) . '";');
   
   print '</p>';
   print '<p>';
   print "<tt>{$_POST['comments']}</tt>";
   print '</p>';
   print '<p>';
   eval ('print "' . addslashes(gettext('We will reply to you at $email.')) . '";');
   print '</p>';
   
   } else { // Missing form value.
     print '<p class="error">';
     print _("Please go back and fill out the form again.");
     print '</p>';
   } 
 
 ?>

 </body>
</html>


