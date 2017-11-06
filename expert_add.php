<?
session_start();
ob_start();

include("connect/connect.php");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ระบบการจัดการขอสอบโครงงานนักศึกษา สาขาเทคโนโลยีคอมพิวเตอร์และการสื่อสาร</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<!-- /.navbar -->
          <?
        	include("navbar.php");
		?>

          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
	  <!-- /.online -->
        <?
        	include("online.php");
		?>
      
      <!-- /.search menu -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?
        	include("menu.php");
		?>
	  

    </section>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        กรอกข้อมูลผู้เชี่ยวชาญ
       
      </h1>
     
    </section>
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
			 
									  <br>
  				  <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">

                        	<form method="GET" action="expert.php" >
                            <div class="form-group">
                            	<label> รหัสผู้เชี่ยวชาญ</label><font color="red"> *</font>
                                <input type="text" name="expert_id" class="form-control" required style="box-shadow: 0.1em 0.1em 0.1em #9BC2FF">
                            </div>
                            <div class="form-group">
                            	<label> ตำแหน่ง</label><font color="red"> *</font>
                                <input type="tel" name="admin_location" class="form-control"required style="box-shadow: 0.1em 0.1em 0.1em #9BC2FF" >
                            </div>
							<div class="form-group">
                            	<label>ชื่อ-สกุล</label><font color="red"> *</font>
                                <input type="text" name="expert_name" class="form-control" required style="box-shadow: 0.1em 0.1em 0.1em #9BC2FF">
                            </div>
							
                            
                            
                             <div class="form-group">
                            	<label>วุฒิการศึกษา</label><font color="red"> *</font>
                                <input type="text" name="admin_qualifications" class="form-control" required style="box-shadow: 0.1em 0.1em 0.1em #9BC2FF" >
                            </div>
							
                           
                            <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">บันทึก </button>
                                           <a type="reset" class="btn btn-default "href="expert_home.php">ยกเลิก</a>
                                        </div>
              </form>
							
							<div class="form-group">
                            	<label>&nbsp;</label>
                                
                            </div>
                        </form>
						</fieldset>
					</form>
        </td>
</table>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
            <!-- /block -->
			
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

  
         
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- Main ใส่เนื้อหา -->

    <!-- /.content -->
  </div>
  
  <!-- /.content-footer -->
          <?
        	include("footer.php");
		?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
 
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
    $(document).ready(function() {
        $('#table_admin').DataTable({
                responsive: true
        });
    });
	
    </script>
</body>
</html>
