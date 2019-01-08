<?php

		//setting the return type of the content
		#header("Content-type:img/jpeg")

		extract($_GET);

		//if valid username set height and width of image to 1
		if($user=="sai" || $user="rohit")
		{
			//imagecreate(height,width)
			$im=imagecreate(1,1);

			//imagecolorallocate(red,green,blue)
			imagecolorallocate($im, 255, 255, 255);
		}

		//if invalid username set height and width of image to 2
		else
		{
			$im=imagecreate(2,2);
			imagecolorallocate($im, 255, 255, 255);
		}

		//return a jpeg version of the image
		imagejpeg($im);

	?>
