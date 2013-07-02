<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="i18n, internationalization, internationalisation">
        <meta name="description" content="web site internationalization">
        <meta name="author" content="Henry Meinig">
        <title>Form</title>
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
    
  print '<h1>';
  print _("Registration Form");
  print '</h1>';   
  
  // form starts here
  // first action handler was handle_form.php, now we switch to handle_form_3.php.
  print '<form action="handle_form_3.php" method="post">';
  print '<fieldset>';
  print '<legend>';
  print '<p>';
  print _("Please enter the following information :");  
  print '</p>';  
  print '</legend><br>';
  
  // text input fields
  print '<p>';
  print _("Name: ");
  print '<input type="text" name="name" size="20" maxlength="40" />';
  print '</p>';
  print '<p>';
  print _("Email: ");
  print '<input type="text" name="email" size="40" maxlength="60" />';
  print '<p>';
  
  // radio buttons
  print '<p>';
  print _("Gender: ");
  print '<input type="radio" name="gender" value="M" />'; // Note that value must NOT be translated.
  print _("Male");
  print '<input type="radio" name="gender" value="F" />';
  print _("Female");
  print '</p>';
  
  // pulldown
  print '<p>';
  print _("Age: ");
  print '<select name="age"><option value="0-29">';
  print _("Under 30");
  print '</option>';
  print '<option value="30-60">';
  print _("Between 30 and 60");
  print '</option>';
  print '<option value="60+">';
  print _("Over 60");
  print '</option>';
  print '</select>';
  print '</p>';
  
  // input field for house count to test ngettext
  print '<p>';
  print _("Please enter how many houses you own: ");
  print '<input type="number" name="house_count" size="2" maxlength="2" />';
  print '</p>';  
  
  // text box
  print '<p>';
  print _("Comments: ");
  print '<br>';
  print '<textarea name="comments" rows="3" cols="40"></textarea>';
  print '</p>';   
  print '</fieldset>';
  
  // submit button
  print '<div align="center"><input type="submit" name="submit"';
  print ' value="';
  print _("Submit");
  print '"/>';
  print '</div>';  
  print '</form>';    
  ?>


 </body>
</html>


