<?php


// IMPORTANT: GET LIB 

	include ("../lib/b0lib.php");

$searchfor = $_GET['id'];

// get the file contents, assuming the file to be readable (and exist)
$contents = file_get_contents($getMyFile);
// escape special characters in the query
$pattern = preg_quote($searchfor, '/');
// finalise the regular expression, matching the whole line
$pattern = "/^.*$pattern.*\$/m";
// search, and store all matching occurences in $matches
if(preg_match_all($pattern, $contents, $matches)){

   $userResults = implode("\n", $matches[0]);

   $str = $userResults;
   preg_match_all("/\\{(.*?)\\}/", $str, $matches);

   list($email, $image, $address, $city, $phone) = array_pad(explode(",", $matches[1][0]), 5, null);
   
		$userName0 = explode('{', $userResults);
		$userName = reset($userName0);
		
	    $userEmail0 = explode(':', $email);
		$userEmail = end($userEmail0);
		
	    $userImage0 = explode(':', $image);	
		$userImage = end($userImage0);
		
		$userAddress0 = explode(':', $address);
		$userAddress = end($userAddress0);
		
		$userCity0 = explode(':', $city);	
		$userCity = end($userCity0);
		
		$userPhone0 = explode(':', $phone);	
		$userPhone = end($userPhone0);
							
}
else{
   echo "No matches found";
}

?>	
			<!-- Your popup content -->
				<div class="wrap demo-1">
					<div class="title">Card - <?php echo $userName; ?></div>
					<p>Edit all data about this user.</p>
					<form action="" method="POST">
						<input type="text" name="name" class="field" value="<?php echo $userName; ?>" />
						<input type="text" name="email" class="field" value="<?php echo $userEmail; ?>" />
						<input type="text" name="image" class="field" value="<?php echo $userImage; ?>" />
						<input type="text" name="address" class="field" value="<?php echo $userAddress; ?>" />
						<input type="text" name="city" class="field" value="<?php echo $userCity; ?>" />
						<input type="text" name="phone" class="field" value="<?php echo $userPhone; ?>" />
						<input type="submit" name="submit" class="closeModal send" value="Submit" />
					</form>
				</div>
				<div class="cta demo-1">
					<span class="icon"><img src="assets/img/<?php echo $userImage; ?>"></span>
					<p><span><?php echo $userName; ?></span><?php echo $userEmail; ?></p>
				</div>
				<!-- / Your popup content -->
