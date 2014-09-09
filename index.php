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
	  
	  <br>
	  
	  <?php 
	  $test = "it";
	  echo "But does $test blend?";
	  ?> 
	 <h2>Stringi funktsioonid</h2> 
	 
	
	 <?php
	 // echo väljastab väärtus stringina
	  echo "string";
	  ?> 
	
	<br>
	
	  <?php
	 // concatenate ühendab
	 $a = "ka";
	 $b = "ss";
	 echo $a . $b;
	  ?> 
	  
	  <?php
      $source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
      $lower = strtolower($source);
      echo "<p>{$lower}</p>";
      ?>
	  
	  <?php
      $source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
      $upper = strtoupper($source);
      echo "<p>{$upper}</p>";
      ?>
	  
	  <?php
      $source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
      $sentence_start = ucfirst($source);
      echo "<p>{$sentence_start}</p>";
      ?>
	  
	  <?php
      $source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
      $capital_letter = ucwords($source);
      echo "<p>{$capital_letter}</p>";
      ?>
	  
	  <?php
      $source = "see Tekst SISALDAB suuri TÄHEMÄRKE!!!";
      $length = strlen($source);
      echo "<p>{$length}</p>";
      ?>
	  
	 <?php echo "A" . trim(" B C D E") . "F"; ?> 
	 
	 <br>
	 <?php echo "Rain" . trim(" bow"); ?> 
	 
	 <h2>Täisrvud</h2>
	 
	  <?php
      $int1 = 20;
	  $int2 = 4;
	  echo $int1 * $int2;
      ?>
	  
	  <br>
	  
	  <?php 
	  // absoluutväärtus
	  echo abs(-14) ?>
	  
	  	<br>
		
	<?php //astendamine
	
	echo pow(5,2) ?>
	
	<br>
	
	  <?php 
	  
	  // ruutjuur
	  echo sqrt(16) ?>
	
	<br>
	
	 <?php 
	 
	// suvaline nr (vahemik)
	
	echo rand(0,10) ?>
	<br>
	
	<?php 
	  
	$start = 2;
    $start = $start + 8;
echo $start;	?>

<br>
<?php 
	$start = 2;
    $start =-8;
echo $start;	?>

<br>
<?php 
	$start = 2;
    $start *= 2;
echo $start;	?>
	
	<br>
<?php 
	$start = 6;
    $start /= 3;
echo $start;	?>
	
		<br>
<?php
    echo 3 . "  kutsikat";
?>


	<br>	
<?php
    echo 3 * "  kutsikat";
?>

<br>

<?php
// tõlgitakse nr-iks
    echo 3 + "3";
?>

<br>	
<?php
// !!! pole hea tava
    echo 3 * " 4 jalgset kutsikat";
?>
</body>
</html>