<?php
require_once('../Connections/Check.php');
if(isset($_POST['submit']))
{
	$file = $_FILES['file']['tmp_name'];
	$handle = fopen($file,"r");
	$replace = 0;
	$new = 0;
	$unabletoinsert = 0;
	$myfile = fopen("CannotFoundCompanyLatitudeLongitude.txt", "w");
	$fp = count(file($file, FILE_SKIP_EMPTY_LINES));
	$i=1;

	while(($fileop = fgetcsv($handle,1000,";"))!== false)
	{
		$companyname = $fileop[0];
		$companyphone = $fileop[1];
		$companyadd = $fileop[2];
		$companypostcode = $fileop[3];
		$companystate = $fileop[4];

		$fullcompanyinfo = $companyname.$companyadd.$companypostcode.$companystate;
    $partialcompinfo = $companyadd.$companypostcode.$companystate;
		$fullcompanyinfo = str_replace(' ', '+', $fullcompanyinfo);
		$companystate = str_replace(',', '',$companystate);

		$f = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address='.$fullcompanyinfo.'&key=AIzaSyCd319KPTRzC3mSZezb3T2gwwQTnq2vIRM");
		$output= json_decode($f);

		if(!empty($output->results[0]->geometry->location->lat)){
			$lat = $output->results[0]->geometry->location->lat;
			$lng = $output->results[0]->geometry->location->lng;
			$checksame = $db->query('SELECT Company_Latitude FROM company WHERE Company_Latitude="'.$lat.'"');
			$row = mysqli_num_rows($checksame);

			if($row >= 1){
				$sql = $db->query('UPDATE company SET Company_Name="'.$companyname.'",Company_Phone="'.$companyphone.'",Company_Add="'.$companyadd.'",Company_Posscode="'.$companypostcode.'",Company_State="'.$companystate.'",Company_Latitude="'.$lat.'",Company_Longtitude="'.$lng.'" WHERE Company_Latitude="'.$lat.'"');
			    if($sql)
				$replace += 1;
			}
			else{
				$sql = $db->query('INSERT INTO company(Company_Name,Company_Phone,Company_Add,Company_Posscode,Company_State,Company_Latitude,Company_Longtitude) VALUES ("'.$companyname.'","'.$companyphone.'","'.$companyadd.'","'.$companypostcode.'","'.$companystate.'","'.$lat.'","'.$lng.'")');
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

		?>
		<style>
		div.centered {
		  position: fixed;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		}
		</style>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		<div id="progress" class="centered" style="width:100%"></div>
		<div id="information" class="centered" style="width" align="center"></div>


		<?php
		$total = $fp;

    $percent = intval($i/$total * 100)."%";

    echo '<script language="javascript">
    document.getElementById("progress").innerHTML="<div style=\"width:'.$percent.';background-color:#ddd;\">&nbsp;</div>";
    document.getElementById("information").innerHTML="'.$i.'/'.$fp.' data(s) processed.";
    </script>';

    echo str_repeat(' ',1024*64);
    flush();
    sleep(1);
		$i++;
		echo '<script language="javascript">document.getElementById("information").innerHTML="Process completed"</script>';
	}
		echo "<script type='text/javascript'>alert('$new New Data Inserted. \\n$replace Old Data Replaced. \\n$unabletoinsert Company Failed to Find Latitude and Longtitude, \\nPlease Update Company Latitude and Longtitude Manually.');</script>";
		fclose($myfile);
}

echo "<script> location.href='View_CompanyALL.php'; </script>";
exit();
?>
