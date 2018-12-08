<!DOCTYPE html>
<html>
<head>
	<title></title>
	

	<?php
	
	extract($_POST);

	#$srn=$_POST["srn"];
	#$class=$_POST["class"];
	
	$name="";
	if($srn=="251" & $class=="e")
	{
		$name="sai";
	}
	if($srn=="251" & $class=="a")
	{
		$name="rohit";
	}

?>

	<script type="text/javascript">
		
		window.onload= function(){

			top.frames["disp"].disp("<?php echo $name ?>");
		};

	</script>
</head>
<body>
</body>
</html>
