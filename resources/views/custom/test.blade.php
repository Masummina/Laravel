<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<?php 

	echo "Hello, I am form view";	 ?>
		<form method="post" action="user-met">
		@csrf
		@method('delete')
			<input type="text" name="name">
			<input type="submit">
		
		</form>
		<a href="{{route('user_list')}"></a>

</body>
</html>