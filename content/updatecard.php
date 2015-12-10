<?php


if(isset($_POST['submit'])){

// Get text file contents as array of lines
$txt = file($getMyFile); 
//check post
	
$search      = $_POST['email'];
$lines2       = file($getMyFile);
$line_number_off = false;

while (list($key, $line) = each($lines2) and !$line_number_off) {
   $line_number_off = (strpos($line, $search) !== FALSE) ? $key + 1 : $line_number_off;
}

$line_number = $line_number_off - 1;

	if (strpos($txt[$line_number],$_POST['email']) !== false) {
		
	$update = "Jean Doe 2";
    // Make the change to line in array
	//echo $txt[$line_number];
	
	//$txt[$line_number] = str_replace("Jean Doe",$update,$txt[$line_number]);
	
	$completeLine = $_POST['name']."{email:".$_POST['email'].", image:".$_POST['image'].", address:".$_POST['address'].", city:".$_POST['city'].", phone:".$_POST['phone']."}; \n";

	$txt[$line_number] = $completeLine;
	
    //$txt[$line_number] = $update; 
    // Put the lines back together, and write back into txt file
	
    file_put_contents($getMyFile, implode("", $txt));
	
    $msg = "Card Updated Successfly";
	
	echo '<script>$(".npt-format-2").load("users.php");</script>';
	
	}else{
		echo "false";
}
}

?>