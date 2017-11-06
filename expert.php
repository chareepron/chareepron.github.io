<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบการจัดการขอสอบโครงงานนักศึกษา สาขาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร</title>
</head>

<body>
<?
// test
 include "connect.php";
 		 $expert_idValue=$_GET["expert_id"];
		 $expert_nameValue=$_GET["expert_name"];
		 $admin_locationValue=$_GET["admin_location"];
		 $admin_qualificationsValue=$_GET["admin_qualifications"];
		 
		
		 
		 
			$sql="INSERT INTO expert(expert_id,expert_name,admin_location,admin_qualifications) VALUE ('$expert_idValue','$expert_nameValue','$admin_locationValue','$admin_qualificationsValue')";
		 $qr=mysqli_query($objConnect,$sql);
		 
		 if($qr){
			 echo "<script language='javascript'>
				alert('เพิ่มข้อมูลเรียบร้อยแล้ว!!');
				window.location='expert_home.php';
					</script>";
		 }
		
		 else{
			 echo "<script language='javascript'>
			 		alert ('ไม่สามารถเพิ่มข้อมูลได้!!');
					window.history.back();
					</script>";
		 }
		
					
		
		 
?>    

</body>
</html>