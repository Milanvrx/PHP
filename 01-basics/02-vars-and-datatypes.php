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
        //========== Variabelen
		// var naam = "Milan";
		$naam = 'mrmr';
		echo $naam;


		//========== Datatypes
		$string = 'Milan';
		$indexedArray = ['naam','leeftijd','lengte'];
		$keyedArray = [ // Assosiative array
			'kleur' => 'geel',
			'aantal' => 5,
		]; 
		$boolean = true; // or false
		$number = 9.02; // decimalen komen na de punt
		$int = 9;

        //========== Array uitlezen

		echo $indexedArray[1];
		echo $keyedArray['aantal'];

		echo "<pre>"; // proper maken
		print_r($keyedArray); //print de hele keyedarray
		var_dump($keyedArray); //print de hele array, met datatypes erbij
		echo "</pre>";



	?>



    <a href="_index.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="02TASK-secret-agent.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>