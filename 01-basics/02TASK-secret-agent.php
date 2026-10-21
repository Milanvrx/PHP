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
	    // ===========================================================
		// Create a "Secret Agent Profile".
        // Assign variables for: code name, age, favorite gadget, and mission status (true/false). 
        // Then, echo them out as a dossier. 
        // Spare time? Style it with CSS!
	    // ===========================================================
        
		echo "<h1>Secret Agent Profile</h1>";

		$indexArray = ['Milanos','89','Boomerang','true'];

		echo '<pre>';
		print_r($indexArray);


		//$codeName = "Milanos";
		//$age = 89;
		//$favoriteGadget = "Boomerang";
		//$missionStatus = true;

		echo "<p>Codename: " . $codeName . "</p>";



		// Time: 3-10 minutes
		// Ready? Push to GIT!
	?>

    <a href="02-vars-and-datatypes.php" class='previousTopic'>Ga naar vorig topic</a>
    <a href="03-basic-operators.php" class='nextTopic'>Ga naar volgend topic</a>
    <script src="../app.js"></script>
</body>

</html>