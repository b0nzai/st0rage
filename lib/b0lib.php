<?php

// GET FUNCTIONS 

		include (__DIR__ . "/data/b0funcs.php");

		
$st0rage = new st0rage();

$st0rage->checkFiles();

$getb0File = $st0rage->getb0File();
$getMyFile = $getb0File["myfile"];
$getLines = $getb0File["lines"];
?>