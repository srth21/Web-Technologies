<?php

		header("Content-type:img/jpeg");
		
		//can set the php file to point to an image rather than returning an image
		//header("Location : myiamge.jpeg");
		extract($_GET);

		if($user=="sai" || $user=="rohit")
		{
			//imagecreate(height,width)
			//returns an image resource id
			$im=imagecreate(1,1);

			//imagecolorallocate(image resource id,red,green,blue)
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
