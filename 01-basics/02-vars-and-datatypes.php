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
		// var naamVariable = 'word';
		$naamVariable = "word"; // " of ' kan.
		$naamVariable = "nieuweWord";
		

		//========== Datatypes
		$string = 'tekst';
		$int = 42;
		$float = 123.4234234;
		$boolean = false; // or true
		$indexArray = ['een', 'twee','drie'];

        //========== Array uitlezen
		echo $indexArray[2];

		// echo $indexArray; // werkt niet
		echo '<pre>'; //maakt de array mooi
		print_r($indexArray); // toont data uit array
		var_dump($indexArray); // toont data uit array met meer info

		// wanneer je overtypt, doe dit zo bewust mogelijk. Eerst snappen
		// CTRL + / om te commenten
		// commentes gebruiken zodat je het zelf snapt, extra info voor jezelf waar nodig zodat je je eigen helpt

		



	?>



    <a href="_index.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="02TASK-secret-agent.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>