<?xml version="1.0" encoding="UTF-8"?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="i18n, internationalization, internationalisation">
        <meta name="description" content="web site internationalization">
        <meta name="author" content="Henry Meinig">
        <title>Regex Test</title>
        <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>

<?php     
                       
  // This script takes a submitted string and checks it against a submitted pattern.
  
  if(isset($_POST['submitted'])) {
  
  // Trim the strings:
  $pattern = trim($_POST['pattern']);
  $email = trim($_POST['email']);
  
  // Print a caption  
  print '<p>';
  print "The result of checking $pattern against $email is ";
  print '</p>';
  
  // Test:  
  if (preg_match ($pattern, $email) ) {
    echo 'TRUE';
    } else {
    echo 'FALSE';
    }
  } // End of submission IF.
  
  // Display the HTML form.
  ?>
 <form action="pcre.php" method="post">
 
 <p>Regular Expression Pattern: <input type="text" name="pattern" value="<?php if (isset($pattern)) echo $pattern; ?>" size="30" /> (include the delimiters)</p>
 <p>Test email: <input type="text" name="email" value="<?php if (isset($email)) echo $email; ?>" size="30" /></p>
 <input type="submit" name="submit" value="Test!" /> 
 <input type="hidden" name="submitted" value="TRUE" />
 
 </form>  

 </body>
</html>


