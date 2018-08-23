<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<head>
<meta charset="utf-8">
<title>Calculator</title>
</head>
<body>
<h1>Lommeregner</h1>
	<form action"<?=$_SERVER['PHP_SELF']?>" method="get">
	<input class="form-control" type="text" name="val1"><br>
	<button class="btn btn-primary" type="submit" name="operator" value="plus">+</button>
	<button class="btn btn-primary" type="submit" name="operator" value="subtract">-</button>
	<button class="btn btn-primary" type="submit" name="operator" value="divide">/</button><br>
	<input class="form-control" type="text" name="val2">
	<?php 
		$v1 = $_GET['val1'];
		$v2 = $_GET['val2'];
		$op = $_GET['operator'];
		 
		  
		switch($op){
			case 'add':
				$res = $v1+$v2;
				break;
			default:
				$res = 'Unknown operator "'.$op.'"';
		}
		
		echo $v1.' '.$op.' '.$v2.' = '.$res;
		
		?>
	
	
</body>
</html>