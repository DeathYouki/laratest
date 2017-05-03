<!DOCTYPE html>
<html>
<head>
	<title>A View</title>
</head>
<body>
TEST<br>
<p>Parameters : <?php echo($numero); ?> </p>
<!-- Using Blade template engine (needs to have the extension .blade.php)-->
<p>Parameters : {{$numero}} </p> <!-- This one is the most secure -->
<p>Parameters : {!!$numero!!} </p>
</body>
</html>