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
  
  // PHP $_REQUEST variables
  //$name = $_REQUEST['name'];
  //$email = $_REQUEST['email'];
  //$comments = $_REQUEST['comments'];
  $age = $_REQUEST['age'];
  //$house_count = $_REQUEST['house_count'];
  
  // validate the name
  if (!empty($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
  } else {
    $name = NULL;
    echo '<p class="error">';
    print _("You forgot to enter your name.");
    print '</p>';    
  }
  
  // validate house_count
  if (!empty($_REQUEST['house_count'])) {
    $house_count = $_REQUEST['house_count'];
  } else {
    $house_count = NULL;
    echo '<p class="status">';
    print _("You do not own a house.");
    print '</p>';    
  }
  
  // validate the email
  if (!empty($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
  } else {
    $email = NULL;
    echo '<p class="error">You forgot to enter your email.</p>';
  }
  
  // validate the comments
  if (!empty($_REQUEST['comments'])) {
    $comments = $_REQUEST['comments'];
  } else {
    $comments = NULL;
    echo '<p class="error">You forgot to enter your comments.</p>';
  }
  
  // validate gender  
  if (isset($_REQUEST['gender'])) {
    $gender = $_REQUEST['gender'];
  } else {
    $gender = NULL;
  }  
  if ($gender  == 'M') {
      print '<p><b>';
      print _("Good day, Sir!");
      print '</b></p>';
  } elseif ($gender == 'F') {
      print '<p><b>';
      print _("Good day, Madam!");
      print '</b></p>';
  } else { // No gender selected.
      $gender = NULL;
      print '<p><b>';
      print '<p class="error">';
      print _("Please enter your gender.");
      print '</p>';
      print '</b></p>';
  }  
   // validate age  
  if (isset($_REQUEST['age'])) {
    $gender = $_REQUEST['age'];
  } else {
    $gender = NULL;
  }  
  if ($age  == '0-29') {
      print '<p>';
      print _("You are under 30 years old.");
      print '</p>';
  } elseif ($age == '30-60') {
      print '<p>';
      print _("You are between 30 and 60 years old.");
      print '</p>';
  } elseif ($age == '60+') {
      print '<p>';
      print _("You are over 60 years old.");
      print '</p>';
  } else { // No age selected.
      $gender = NULL;      
      print '<p class="error">';
      print _("Please enter your age.");
      print '</p>';      
  }
    
  // If all data is entered, print out the message.
  if ($name && $email && $gender && $age && $comments) {
  eval ('print "' . addslashes(gettext('Thank you, $name, for your comments: <br /> <tt>$comments</tt></p>')) . '";');
  print '<p>';
  eval ('print "' . addslashes(gettext('We will replay to you at $email.')) . '";');
  print '</p>';
  } else { // missing value
  print '<p>';
  print _("Please go back and fill out the form again.");
  }
  
  /*
  print '<p>';
  eval ('print "' . addslashes(gettext('Thank you, $name, for the comments: ')) . '";');
  print '<br>';
  print "<tt>$comments</tt>"; // must use double-quotes here 
  print '</p>';
  print '<p>';
  eval ('print "' . addslashes(gettext('We will reply to you at $email.')) . '";');
  print '</p>';
  
  print '<p>';
  eval ('print "' . addslashes(gettext('Your age is $age and your gender is $gender.')) . '";');
  print '</p>';

  print '<p>';
  eval ('print "' . addslashes(ngettext('You own $house_count house', 'You own $house_count houses', $house_count)) . '";');
  print '</p>';
  */  
      
 ?>

 </body>
</html>


