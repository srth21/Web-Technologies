<?php

		header("Content-type:img/jpeg");
		
		extract($_GET);

		if($user=="sai" || $user=="rohit")
		{
			//imagecreate(height,width)
			$im=imagecreate(1,1);

			//imagecolorallocate(red,green,blue)
			imagecolorallocate($im, 255, 255, 255);
		}

		else
		{
			$im=imagecreate(2,2);
			imagecolorallocate($im, 255, 255, 255);
		}

		//convert the image to the jpeg and send it back
		imagejpeg($im);

?>
