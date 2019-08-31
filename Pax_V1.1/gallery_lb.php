<?php include($_SERVER[DOCUMENT_ROOT].'/layout/conect.php');
$result = mysql_query("SELECT * FROM Hot_Tubs WHERE Name='$tubname'");
while($row = mysql_fetch_array($result))
{       
$lname = $row['Name']; $lname = strtolower($lname);
        echo "<h1>" . $row['Name'] . "</h1>";

$sql="SELECT * FROM images WHERE page_name='$tubname' ORDER BY thumb_name DESC ";
$result2=mysql_query($sql);

while($row2 = mysql_fetch_array($result2))

  { if ($row2['thumb_name'] == "") {
        echo " "; }
else {
        echo "<div style='width:140px; height:105px; text-align:center; float:left; padding:2px; margin:3px; border:1px solid #666; text-align:center;'><h2>" .$row2 ['img_title']. "</h2><a href='http://www.somerset-hottubs.co.uk/assets/images/upload_pic/".$row2 ['image_name']."' rel='lightbox[Hotub]' title='" .$row2 ['img_title']. "''><img src='http://www.somerset-hottubs.co.uk/assets/images/upload_pic/".$row2 ['thumb_name']."'></a></div>";
	  }}
			
echo "<div class='clear'></div>";   
        } 
?>
</div>