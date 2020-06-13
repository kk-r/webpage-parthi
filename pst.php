<?php
	$server = "localhost";
	$username = "user name";
	$password = "passwrd";
	$database="databse name"; 

	$str_date = $_GET["dte"];
	$str_imie = $_GET["imi"];
	$str_data = $_GET["dta"];
    
    $str_val = "Received datas \n"	.  $str_date . "\n" . $str_imie . "\n" . $str_data ;
    //echo $str_val;
    
	$flt = floatval($str_data);
    echo $flt;
	$con = mysqli_connect($server,$username ,$password,$database);
		
	if (!$con) {
		 die("Connection failed: " . mysqli_connect_error());
	}
		
	$qry = "INSERT INTO MyLog (log_time, log_imie, log_data) VALUES ($str_date, $str_imie, $flt)";
		
	if (mysqli_query($con, $qry)) {
		echo "S1~";
	} else {
		echo "S0~";
	}
		
	mysqli_close($con);
	
?>
