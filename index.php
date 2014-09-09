<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Harjutus 3. Andmetüübid.</title>
</head>

<body>
    <h1>Muutujad</h1>
	<?php 
	  $variable = "I'm a string";
	  echo $variable;
      $variable = "new value";
	  echo $variable;
	  // ei kuvatud uut, vaid mõlemad?
    ?>
	
	<h2>Stringid</h2>
	<?php 
	  echo "Hello world!" . "<br>";
	  echo 'Hello world!';
	  echo "<br>";
	  $var = "24";
	  echo $var;
	  echo "<br>";
	  $var2 = "26";
	  echo $var2;
	  echo "<br>";
	  echo $var . $var2;
    ?>
	
	
	
	  
</body>
</html>