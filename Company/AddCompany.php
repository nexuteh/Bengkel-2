<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
$mysqli = new mysqli("localhost","root","","mapping");
 
if(isset($_POST['Submit'])) { 

  
	$replace = 0;
	$new = 0;
	$unabletoinsert = 0;  
	 
    $name = $_POST['Company_Name'];
    $phone = $_POST['Company_Phone'];
    $add = $_POST['Company_Add'];
	$posscode = $_POST['Company_Posscode'];
    $state = $_POST['Company_State'];
	
    $fullcompanyinfo = $name.$add.$posscode.$state;
		$fullcompanyinfo = str_replace(' ', '+', $fullcompanyinfo);
		$companystate = str_replace(',', '',$state);

		$f = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address='.$fullcompanyinfo.'&key=AIzaSyCd319KPTRzC3mSZezb3T2gwwQTnq2vIRM");
		$output= json_decode($f);

		if(!empty($output->results[0]->geometry->location->lat))
		{
			$lat = $output->results[0]->geometry->location->lat;
			$lng = $output->results[0]->geometry->location->lng;
			$checksame = $mysqli->query("SELECT Company_Latitude,Company_Longtitude FROM company WHERE Company_Latitude='$lat' AND Company_Longtitude='$lng'");
			$row = mysqli_num_rows($checksame);

			if($row >= 1)
			{
				$sql = $mysqli->query('UPDATE company SET Company_Name="'.$name.'",Company_Phone="'.$phone.'",Company_Add="'.$add.'",Company_Posscode="'.$posscode.'",Company_State="'.$state.'",Company_Latitude="'.$lat.'",Company_Longtitude="'.$lng.'" WHERE Company_Latitude="'.$lat.'" AND Company_Longtitude="'.$lng.'"');
				if($sql)
				$replace += 1;
			}
			else
			{
				$sql = $mysqli->query('INSERT INTO company(Company_Name,Company_Phone,Company_Add,Company_Posscode,Company_State,Company_Latitude,Company_Longtitude) VALUES ("'.$name.'","'.$phone.'","'.$add.'","'.$posscode.'","'.$state.'","'.$lat.'","'.$lng.'")');
				if($sql)
				$new += 1;
			}
		}
			else{
			
			$sql = $db->query('INSERT INTO company(Company_Name,Company_Phone,Company_Add,Company_Posscode,Company_State,Company_Latitude,Company_Longtitude) VALUES ("'.$companyname.'","'.$companyphone.'","'.$companyadd.'","'.$companypostcode.'","'.$companystate.'",0,0)');
			$txt = $companyname.PHP_EOL;
			fwrite($myfile, $txt);
			$unabletoinsert +=1;
		

		}
	
		echo "<script type='text/javascript'>alert('$new New Data Inserted. \\n$replace Old Data Updated. \\n$unabletoinsert Company Failed to Insert.Please Update The Company Latitude and Longtitude Manually');</script>";
		include('View_CompanyALL.php');
		
}

?>
</body>
</html>
