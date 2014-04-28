<?php
	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	{
		$name = $_FILES['photoimg']['name'];
		$size = $_FILES['photoimg']['size'];
			
		if(strlen($name))
		{
			list($txt, $ext) = explode(".", $name);
			if(in_array($ext,$valid_formats))
			{
				if($size<(1024*1024))
				{
					$gambarna = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
					$tmp = $_FILES['photoimg']['tmp_name'];
					if(move_uploaded_file($tmp, $gambarna))
					{
						$type = pathinfo($gambarna, PATHINFO_EXTENSION);
						$data = file_get_contents($gambarna);
						$base64 = '<img src="data:image/' . $type . ';base64,' . base64_encode($data).'"/>';
						echo $base64;
						echo "<br><textarea>".htmlentities($base64)."</textarea>";
						unlink($gambarna);
					}
					else{echo "Gagal";}
				}
				else{echo "Ukuran maksimal image 1 MB";	}				
			}
			else{echo "Format image tidak valid..";	}
		}				
		else{echo "Silahkan masukan image..!";	}			
		exit;
	}
?>
