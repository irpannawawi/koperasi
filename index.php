<?php
session_start();
include_once("library/koneksi.php");
//jika session sudah ada maka akan di redirect ke halaman yang seharusnya
  
  if(isset($_SESSION['level'])){
   
    if($_SESSION['level'] == "Admin"){
      header("location:admin/index.php");
    }else{
      header("location:public/index.php");
    }
  }
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Admin | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >
<?php
//error_reporting(0);


if(@$_POST["login"]){ //jika tombol Login diklik
	$user   = $_POST["user"];
	$pass   = $_POST["pass"];
    $level  = $_POST['level'];
	if($user!="" OR $pass!="" OR $level != ""){
		include_once("library/koneksi.php");
		$em = $server->query("select * from login where password = '$pass' AND username = '$user' AND level = '$level'");
		$data = $em->fetch_assoc();
		
		if($data["username"] == $user && $data["password"] == $pass){
			echo "<div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Data Telah Ditemukan!!.
                  </div>";
            $_SESSION["user"]=$data["nama"];
            $_SESSION["userId"]=$data["kd_user"];
            $_SESSION["pass"]=$data["password"];
            $_SESSION["level"]=$level;

            if($level=="Admin"){
               header("Location:admin/index.php"); 
            }else{
                header("location:public/index.php");
            }
			
		}else{
			echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Data Tidak Ditemukan!!</b>
                  </div><center>";
		}
	}

}
?>
   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
       
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Login
                </p>
                <input type="text" autofocus required name="user" placeholder="Username" class="form-control" />
                <input type="password" required name="pass" placeholder="Password" class="form-control" />
                <select name="level" id="level" class="form-control" style="margin-top:6px; margin-bottom:6px;">
                    <option value="User">User</option>
                    <option value="Admin">Admin</option>
                </select>
				<input type="submit" name="login" value="Login" class="btn btn-info"/>
				<input type="reset" name="reset" value="Reset" class="btn btn-danger"/>
            </form>
        </div>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="js/jquery-2.0.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
