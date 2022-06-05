<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF']?> method= GET>
name:<input type ="text" name="name"><br>
e-mail:<input type="text" name="email"><br>
<input type ="submit" name="submit">
</form>
</body>
</html>
<?PHP
if(isset($_GET['submit']))
{
	echo$_GET['name'];			
	echo$_GET['email'];
	
}
?>