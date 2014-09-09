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
	
	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
	
	 <?php 
	  $student1 = "Mihkel";
	  $student2 = "Heiko";
	  $student3 = "Marko";
	  $student4 = "Ingrid";
	  $student5 = "Eve";
	  ?> 
	  
	  <ul>
	    <li> <?php echo $student1; ?> </li>
		<li> <?php echo $student2; ?> </li>
		<li> <?php echo $student3; ?> </li>
		<li> <?php echo $student4; ?> </li>
		<li> <?php echo $student5; ?> </li>
	  </ul>
	  
	 <?php 
	  $firstName = "Cärolin";
	  $lastName = "Karing";
	  $fullName = $firstName . " " . $lastName;
	  echo $fullName;
	  ?>  
	  
</body>
</html>