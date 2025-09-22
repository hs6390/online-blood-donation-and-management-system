<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM tbladmin WHERE UserName=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ONLINE BLOOD DONATION AND MANAGEMENT SYSTEM</title>
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.5.3/css/fileinput.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/1.0.2/awesome-bootstrap-checkbox.min.css">
<link rel="stylesheet" href="css/style.css">

</head>

<body>
	
<div style="display:flex; justify-content:center; align-items:center; height:100vh; background:linear-gradient(135deg,#2c3e50,#3498db);">

  <div style="width:400px; padding:30px; border-radius:15px; background:rgba(255,255,255,0.15); box-shadow:0 8px 32px rgba(0,0,0,0.3); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.2); transform:perspective(1000px) rotateX(5deg); transition:all 0.3s ease-in-out;">
    
    <h2 style="text-align:center; color:#fff; font-weight:bold; margin-bottom:20px; text-shadow:1px 1px 3px rgba(0,0,0,0.5);">
      ONLINE BLOOD DONATION <br> & MANAGEMENT SYSTEM
    </h2>
    
    <form method="post" style="display:flex; flex-direction:column; gap:15px;">
      
      <label style="color:#fff; font-size:14px; font-weight:600;">Your Username</label>
      <input type="text" name="username" placeholder="Enter Username" 
             style="padding:10px; border-radius:8px; border:1px solid rgba(255,255,255,0.3); background:rgba(255,255,255,0.1); color:#fff; outline:none;">
      
      <label style="color:#fff; font-size:14px; font-weight:600;">Password</label>
      <input type="password" name="password" placeholder="Enter Password" 
             style="padding:10px; border-radius:8px; border:1px solid rgba(255,255,255,0.3); background:rgba(255,255,255,0.1); color:#fff; outline:none;">
      
      <button type="submit" name="login" 
              style="padding:12px; border:none; border-radius:8px; background:linear-gradient(135deg,#ff4e50,#f9d423); color:#fff; font-weight:bold; cursor:pointer; transition:transform 0.2s;">
        LOGIN
      </button>
      
      <a href="forgot-password.php" style="text-align:center; color:#f1c40f; font-size:13px; text-decoration:none;">Forgot Password?</a>
    </form>
    
    <div style="margin-top:20px; text-align:center;">
      <a href="../index.php" style="display:inline-block; padding:10px 20px; background:linear-gradient(135deg,#00c6ff,#0072ff); color:#fff; border-radius:8px; text-decoration:none; font-weight:600; transition:all 0.3s;">
        Back to Home
      </a>
    </div>
    
  </div>
</div>

	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>