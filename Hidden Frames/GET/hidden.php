<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		
		window.onload= function(){

			var div=document.getElementById("dispDiv");
			top.frames["disp"].disp(div.innerHTML);
		};

	</script>

	<?php
	
	extract($_GET);
	
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
</head>
<body>
	<div id="dispDiv"> <?php echo $name ?> </div>
</body>
</html>
