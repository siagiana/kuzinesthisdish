<?php
    $filename = "userinfo.csv";
    $exists = (file_exists($filename));

 	$handle = fopen($filename, 'a'); // 'a' means write only
	$msg = "Thank you for signing up.\n";//EMail message
	$stringToAdd="";	//File into

	if (!$exists){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";
		}
		$stringToAdd.="\n";
		$new=False;
		fwrite($handle, $stringToAdd);
	}
	$stringToAdd="";
	foreach($_POST as $name => $value) {
		print "$name : $value<br>";
		$msg .="$name : $value\n";
		$stringToAdd.="$value,";
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);
	//now close the file
	fclose($handle); 
	$to = $_POST["email_address"];
	$headers = "From: ". $_POST["first_name"] ."<".$_POST["email_address"]. ">\r\n";
	
	mail($to, 'Welcome to Kuzines!', $msg,$headers);


	echo "Email sent";
?>