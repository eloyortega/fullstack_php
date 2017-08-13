<html>
<head>
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php require_once('nav.php'); ?>
	<h1>Cheat Sheet</h1>
	<hr>
	<h2>Variables</h2>
	<?php
		$n = 2;
		$m = $n + 2;
		$s = "Hello World!";
		$b = TRUE;
		$a = array(1,2,3);
		echo "echos display simple datatypes in HTML <br>";
		echo "math works like js: 2 + 2 = $m<br>";

		echo "<hr>";
		echo "note the difference using a variable with double quote: $m<br>";
		echo 'and single quotes: $m<br>';
		echo "Concatinate Strings with a \".\" like so: ". $s;

		echo "<hr>";
		echo "Note how booleans display true: $b<br />";
		echo "and false: ".!$b;
		echo "<hr>";
		echo "try to echo an array: $a<br />";
		echo "To display an array use print_r<br />";
		print_r($a);
		echo "<br>or call a value by its index: ".$a['1']."<br>";
		echo "<hr>";
	?>
	<h2>Objects</h2>
	<?php
		class User {
			function save_user() {
				echo 'hi '.$this->name." | ".$this->password."<br>";
			}
		}

		$object1 = new User;
		$object1->name = "Sam";
		$object1->password = "12345";
		$object1->gender = "female";

		print_r($object1);
		echo '<br>';
		echo $object1->name;
		echo '<br>';
		echo $object1->gender;
		echo '<br>';
		$object1->save_user();
	?>
	<hr>
	<h2>Comparisons, Logicals, Conditionals, and Functions</h2>
	<?php
		function dolunch(){
			echo "lets eat!";
		}
		$hour = 13;
		if ($hour >= 12 && $hour <= 13) {
			dolunch();
		};
	?>
	<hr>
	<h2>Loops</h2>
	<?php
		for ($monkeys = 5 ; $monkeys > 0 ; --$monkeys) {
			echo $monkeys." little monkeys jumping on the bed<br>
			One fell off and bumped her head<br>
			Momma called the doctor and the doctor said<br>
			No more monkeys jumping on the bed<br><br>";
		}
	
	$arr = array(
		"p1" => "Moe",
		"p2" => "Larry",
		"p3" => "Curly"
	);
	
	echo "<ul>";

	foreach($arr as $k => $v){
			echo "<li><b>$k:</b> $v</l1>";
		}

	echo "</ul>";
	?>


	<hr>
	<?php require_once('footer.php'); ?>
</body>
</html>