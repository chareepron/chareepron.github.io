<?
include("connect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
<?       
          $expert_id=$_GET["expert_id"];
		 $expert_name=$_GET["expert_name"];
		 $admin_location=$_GET["admin_location"];
		 $admin_qualifications=$_GET["admin_qualifications"];
		 
		 
		 $sql="UPDATE expert SET expert_name='$expert_name',admin_location='$admin_location',admin_qualifications='$admin_qualifications' WHERE expert_id = '$expert_id'";

		$qr=mysqli_query($objConnect,$sql);
		
			if($qr){
				header("Location: expert_home.php");
			}else{
				header("Location: expert_from_edit.php?error");
				
			}
		
		
?>
</body>
</html>