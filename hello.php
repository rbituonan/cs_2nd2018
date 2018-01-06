<html>
<head>
</head>
<body>
<?php
	echo "Hello World";
	$x = 5;
	$y = 10;
	
	
	
	// echo $GLOBALS['x']+$GLOBALS['y'];
	
	$txt1 = "Hello";
	$txt2 = "World";
	
	echo '$txt1 $txt2';
	
	echo '<div id=""></div>';
	$cars = array("volvo","toyota","bmw");
	foreach($cars as $c){
		echo "<br />$c";
	}
	
	$families = array(
						'Griffin'=>array('peter','lois','megan'),
						'Another'=>array('a','b','c'),
					);
	
	
	print_r($GLOBALS);
?>
</body>
</html>