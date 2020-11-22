<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php 

	echo "Hello, I am form view";	 ?>
		<form method="post" action="delmethode">
		@csrf
		@method('delete')
			<input type="text" name="name">
			<input type="submit">
		
		</form>

</body>
</html>