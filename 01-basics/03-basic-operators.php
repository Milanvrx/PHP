<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    
	<?php 
        //========== Arithmetic operators
		// +, -, x, /, *, %
		$optelling = 10;
		echo $optelling = $optelling + 1;


		//========== Increment and decrement 
		echo $optelling++; //dit word verhoogd met 1 ++ word pas uitgevoerd na de echo
		echo $optelling;
		echo ++$optelling; // word met 1 verhoogd en gebeurd voor de echo



		//========== Assignment (and string) operators
		$variable = "Hello"; // Simpele assignment (operator).
		$variable = $variable . "World"; // Voegt world toe aan de "Hello" erboven ( de . is zoals + in javasript).
		$variable .= '!!!'; // De .= zorgt ervoor dat het aan het einde van de string word toegevoegd.



		//========== Arithmetic assignment operators
		$optelling += 5; // Word opgeteld met 5;
		$optelling -= 5; // Word afgetrokken met 5;


		
		// Later zien we ook comparison operators en logical operators

		// https://www.php.net/manual/en/language.operators.arithmetic.php
	?>

	<a href="02TASK-secret-agent.php"" class='previousTopic'>Ga naar vorig topic</a>
    <a href="03TASK-pizza-shop.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>