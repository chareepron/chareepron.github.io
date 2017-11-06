<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?
 include "connect.php";
		$id=$_GET["expert_id"];
	 	$sql="DELETE FROM expert WHERE expert_id = '$id'";
		$qr=mysqli_query($objConnect,$sql);
			
			echo "<script language='javascript'>
						alert('ลบข้อมูลเรียบร้อยแล้วค่ะ !!');
						window.location = 'expert_home.php';
						</script>";
?>
</body>
</html>