<?php
include ('../../../connect.php');
$id = $_GET['id'];
	
	$sql1 = pg_query("Delete from hotel_gallery where id ='$id'");
	$sql2 = pg_query("Delete from detail_facility_hotel where id_hotel = '$id'");
	$sql3 = pg_query("Delete from detail_room where id_hotel = '$id'");
	$sql4 = pg_query($conn,"Delete from information_admin where id_hotel = '$id'");
	$sql   = "Delete from hotel where id='$id'";

	
	$delete = pg_query($sql);
	if ($delete){
		echo "<script>
		alert (' Data Successfully Delete');
		</script>";
	}
	else{
		echo "<script>
		alert ('Error');
		</script>";
	}

echo "<script>eval(\"parent.location='../?page=home'\");</script>";

?>