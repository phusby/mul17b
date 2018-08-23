<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="side.css" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php 
	  $pagetitle = "Min lommeregner";
	  $undertitle = "Den regner sku rigtigt";
	  include ('top.php')
	  ?>
	  
	  <div class="container line"><hr></div>
<div class="container">
	<div class="jumbotron">
	
	
		<form action"<?=$_SERVER['PHP_SELF']?>" method="get">
	<input class="form-control" type="number" name="val1" required><br>
	<button class="btn btn-info" type="submit" name="operator" value="add">+</button>
	<button class="btn btn-info" type="submit" name="operator" value="subtract">-</button>
			<button class="btn btn-info" type="submit" name="operator" value="times">*</button>
	<button class="btn btn-info" type="submit" name="operator" value="divide">/</button><br><br>
	<input class="form-control" type="number" name="val2" required>
	<?php 
		//$v1 = $_GET['val1'];
		//$v2 = $_GET['val2'];
		$v1 = filter_input(INPUT_GET, 'val1', FILTER_VALIDATE_INT) or die ('missing or illegal vall paremeter');
	  	$v2 = filter_input(INPUT_GET, 'val2', FILTER_VALIDATE_INT) or die ('missing or illegal vall paremeter');
		$op = $_GET['operator'];
		 
		  
		switch($op){
			case 'add':
				$res = $v1+$v2;
				$opchar ='+';
				break;
				case 'subtract':
				$res = $v1-$v2;
				$opchar ='-';
				break;
				case 'times':
				$res = $v1*$v2;
				$opchar ='*';
				break;
				case 'divide':
				$res = $v1/$v2;
				$opchar ='/';
				break;
			default:
				$res = 'Unknown operator "'.$op.'"';
		}
		
		echo $v1.' '.$opchar.' '.$v2.' = '.$res;
		
		?>
		
		
		
	<div class="hej2"></div>
	  </div>
	</div>
	  <!-- Footer -->
<?php 
	 include ('footer.php'); 
	  
	  ?>
  <!-- Footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>