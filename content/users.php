<?php 
								
// REPEAT THAT VARIABLES FOR INSTANT UPDATE (without refresh)

	$getb0File = $st0rage->getb0File();
	$getMyFile = $getb0File["myfile"];
	$getLines = $getb0File["lines"];

	foreach($getLines as $line) 
		{
							
		$var = explode(';', $line, 2);
		$arr[$var[0]] = $var[1];
	
		$str = $var['0'];
		preg_match_all("/\\{(.*?)\\}/", $str, $matches);

		list($email, $image, $address, $city, $phone) = array_pad(explode(",", $matches[1][0]), 5, null);
							
		$userName0 = explode('{', $var['0']);
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
							
?>

<div class="col-sm-4 col-xs-6">
   <div class="npt-item npt-item-1">
      <div id="foo" class="npt-plan-top">
	  
		 <!-- /.user-name -->
         <h3 class="npt-plan-name"><?php echo $userName; ?></h3>
		 
		 <!-- /.user-email -->
         <p class="npt-plan-description"><?php echo $userEmail; ?></p>
		 
		 <!-- /.user-image -->
         <img src="assets/img/<?php echo $userImage; ?>">
		 
      </div>
      <!-- /.userCard -->
      <div class="npt-plan-details">
         <ul>
            <li>
               <div class="npt-offer-limit">
                  <span class="npt-count"> address: </span>
               </div>
               <!-- /.user-address -->
               <p><?php echo $userAddress; ?></p>
            </li>
            <li>
               <div class="npt-offer-limit">
                  <span class="npt-count"> city: </span>
               </div>
               <!-- /.user-city -->
               <p><?php echo $userCity; ?></p>
            </li>
            <li>
               <div class="npt-offer-limit">
                  <span class="npt-count"> phone: </span>
               </div>
               <!-- /.user-phone -->
               <p><?php echo $userPhone; ?></p>
            </li>
         </ul>
      </div>
      <!-- /.user-edit -->
      <div class="npt-plan-bottom">
         <a onClick="recp('<?php echo $userEmail; ?>')" class="openSlickModal-1 manualLabel btn npt-btn npt-pricing-btn">View More</a>
      </div>
   </div>
   <!-- /.userCard -->
</div>
					
<?php } ?>
					