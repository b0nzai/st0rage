<?php

class st0rage {
	
	var $basePath = "/home/francojo/public_html/b0nzai.com/st0rage/";
	var $webUrl = "http://st0rage.b0nzai.com/";
	var $b0file = "file";
	
	function checkFiles() {
		
		global $b0data;
		
		$b0data = $this->basePath.'/lib/secret/'.$this->b0file.'.b0';
		$b0access = $this->basePath.'/.htaccess';
		$b0pw = $this->basePath.'/lib/secret/.htpassword';
		
		if(!file_exists($b0data) || !file_exists($b0access) || !file_exists($b0pw)){
			//return header ("Location: ". $this->webUrl. "error.php");
		}
		
	}
	
	function getb0File(){
		
		global $b0data;
		
		$handle = fopen($b0data, "rb");
		$myFile = $b0data;
		$lines = file($myFile);
		
		// Remove first lines
		unset($lines[0]);
		unset($lines[1]);
		unset($lines[2]);
		unset($lines[3]); 
		
		$b0files['myfile'] = $myFile;
		$b0files['lines'] = $lines;
		
		return $b0files;

	}
	
}

?>