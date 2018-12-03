<?php
header('Content-Type: text/xml');
require_once('../Connections/Connection.php');

$query = "SELECT * FROM company WHERE Group_Id !=0 ORDER BY Company_Id";
$result = mysqli_query($db,$query);
$num = 1;

echo "<markers>";
while($row = mysqli_fetch_array($result)){
  $lat = $row['Company_Latitude'];
  $lng = $row['Company_Longtitude'];
  $companyname = $row['Company_Name'];
  $companyadd = $row['Company_Add'];
  $companyphone = $row['Company_Phone'];
  $groupid = $row['Group_Id'];
  $companyadd =preg_replace('/&(?!#?[a-z0-9]+;)/', '&amp;', $companyadd);

    echo "<marker id='$num' name='$companyname' address='$companyadd' lat='$lat' lng='$lng' type='$groupid' phone='$companyphone'/>";
    $num++;
}
echo "</markers>"
?>
