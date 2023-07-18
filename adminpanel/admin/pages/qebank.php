<!DOCTYPE html>
<html>
<head>
	<style>
		.button1{
			position: absolute; 
			top: 10%;
			right: 50%;
		}
		.input1{
			position: absolute; 
			top: 10%;
			right: 55%;
		}
	</style>	
</head>
<body>
<form action="pages/upload.php" method="POST" enctype="multipart/form-data">
	<input class = "input1" type="file" name="file">
	<button class="button1" type="submit" name="submit">Upload</button>
</form>
</body>
</html>