<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>All numbers from 1 to $cnt</h1>
	<?php 
	
	$cnt = 25;
	echo 'The varialble $cnt has the value: '.$cnt.'<br>'.PHP_EOL;
	echo 'showing all integers from 1 to '.$cnt.':<br>'.PHP_EOL;
	for ($x = 1; $x <= $cnt; $x++) {
						 echo "The number is: $x <br>";
	}
	
	?>
	
	<h1>min to max</h1>
	
	<?php 
	$min = 10;
	$max = 25;
	echo 'showing all integers from '.$min.' to '.$max.':<br>'.PHP_EOL;
	
	echo '<table border="1"><tr>',PHP_EOL;
	
	
	for ($x=$min; $x<=$max; $x++) {
			if($x % 10 == 0 && $x>0){
				echo'</tr>'.PHP_EOL.'<tr>';
			}
		echo '<td>'.$x.'</td>';
	}
	echo PHP_EOL.'</tr></table>';
	
	?>	
	<h1>Navne</h1>
	<?php 
	$names = array("John", "Max", "Buster", "Hans", "Jesper"); 

	echo '<table border="4"><tr>',PHP_EOL;
	
foreach ($names as $value) {
    if($x % 10 == 0 && $x>0){
				echo'</tr>'.PHP_EOL.'<tr>';
}
	echo '<td>'.$value.'</td>';
}
	echo PHP_EOL.'</tr></table>';
	
	
	?>
	<h1>Plat eller krone</h1>
	
	
	<?php 
	echo(rand(1,2));
	
	?>
	<h1>dage</h1>
	
	
	<?php 

$days = date('D');

switch ($days) {
    case "Mon":
        echo "Today is monday";
        break;
    case "Tue":
        echo "Today is tuesday!";
        break;
    case "Wed":
        echo "Today is wednesday";
        break;
		case "Thu":
        echo "Today is Thursday";
        break;
		case "Fri":
        echo "Today is Friday";
        break;
		case "Sat":
        echo "Today is saturday";
        break;
		case "Sun":
        echo "Today is Sunday";
        break;
    default:
        echo "Today is a day";
}
?>
<br>
	<br>
	<br>
	
</body>
</html>