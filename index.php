<?php 
include 'pure_php.php'

 ?>


<!-- html,head and body -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP DEMO NT 3103</title>
</head>
<body>

<!-- <h1>Hello, World</h1> -->
<?php echo "<h1>Hello World</h1>"; ?>



	<h3>
		username: <u><?php echo $username ?> <u>
		<br>
		userid: <u><?php echo $userid; ?> <u>
		<br>
		Your name: <u><?php echo $yourname; ?> <u>
		<br>
		Age: <u><?php echo $age; ?> <u>
		<br>
		Sex: <u><?php echo $sex; ?> <u>
	</h3>

	<a href="next_php.php">Go to Next page</a>
	<br>

	<button type= "button" onclick="greetuser()">Greet User</button>

	<!-- internal java script -->
	<script>
	const username = "<?php echo $username ?>";
	const userid = "<?php echo $userid ?>";
	const yourname = "<?php echo $yourname ?>";
	const age = "<?php echo $age ?>";
	const sex = "<?php echo $sex ?>";


	function greetuser() {
		alert("Hello "+yourname+", Your User ID is "+userid+" ikaw ay "+age+ " na "+sex+ " at ang section mo ay "+username );
	}
	</script>
</body>
</html