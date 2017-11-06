<!DOCTYPE>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบการจัดการขอสอบโครงงานนักศึกษา สาขาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร</title>
</head>
 <? $user=$_GET['member_id'];
 	include "connect.php";
	$sql="SELECT * FROM exam_schedule where member_id='$user'";
	$qr = mysqli_query($objConnect,$sql);
	while($rs = mysqli_fetch_array($qr))
			{
?>

<body>
<form method="GET" action="exam_schedule_edit.php">

รหัสนักศึกษา :
   <input type="hidden" name="member_id" value="<?=$rs["member_id"];?>"><?=$rs["member_id"];?>
  <br>
 
     ชื่อ-สกุล :
   <input type="text" name="member_name" value="<?=$rs["member_name"];?>">
  <br>
 วันที่สอบ : <input type="text" name="date" value="<?=$rs["date"]?>"><br>
   เวลา : <input type="text" name="time_picker" value="<?=$rs["time_picker"]?>"><br>
    
  
    <input type="submit" value="บันทึก"><input type="reset" value="ยกเลิก">
</form>

<? }?>
</body>
</html>