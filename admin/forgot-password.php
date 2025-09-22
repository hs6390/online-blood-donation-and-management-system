<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
  {
    $email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT Email FROM tbladmin WHERE Email=:email and MobileNumber=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tbladmin set Password=:newpassword where Email=:email and MobileNumber=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('Your Password succesfully changed');</script>";
}
else {
echo "<script>alert('Email id or Mobile no is invalid');</script>"; 
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

	<title>BloodBank & Donor Management System | Forgot Password</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>

<body>
	
	<div style="display:flex; justify-content:center; align-items:center; height:100vh; background:linear-gradient(135deg,#8e2de2,#4a00e0);">

  <div style="width:420px; padding:30px; border-radius:15px; background:rgba(255,255,255,0.15); box-shadow:0 8px 32px rgba(0,0,0,0.3); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.2); transform:perspective(1000px) rotateX(4deg); transition:all 0.3s ease-in-out;">
    
    <h2 style="text-align:center; color:#fff; font-weight:bold; margin-bottom:20px; text-shadow:1px 1px 3px rgba(0,0,0,0.5);">
      Blood Bank & Donor Management System <br> Forgot Password
    </h2>
    
    <form method="post" name="chngpwd" onsubmit="return checkpass();" style="display:flex; flex-direction:column; gap:15px;">
      
      <label style="color:#fff; font-size:14px; font-weight:600;">Email</label>
      <input type="email" name="email" placeholder="Enter Email Address" required
             style="padding:10px; border-radius:8px; border:1px solid rgba(255,255,255,0.3); background:rgba(255,255,255,0.1); color:#fff; outline:none;">
      
      <label style="color:#fff; font-size:14px; font-weight:600;">Mobile Number</label>
      <input type="text" name="mobile" placeholder="Enter Mobile Number" maxlength="10" pattern="[0-9]+" required
             style="padding:10px; border-radius:8px; border:1px solid rgba(255,255,255,0.3); background:rgba(255,255,255,0.1); color:#fff; outline:none;">
      
      <label style="color:#fff; font-size:14px; font-weight:600;">New Password</label>
      <input type="password" name="newpassword" placeholder="Enter New Password" required
             style="padding:10px; border-radius:8px; border:1px solid rgba(255,255,255,0.3); background:rgba(255,255,255,0.1); color:#fff; outline:none;">
      
      <label style="color:#fff; font-size:14px; font-weight:600;">Confirm Password</label>
      <input type="password" name="confirmpassword" placeholder="Confirm Password" required
             style="padding:10px; border-radius:8px; border:1px solid rgba(255,255,255,0.3); background:rgba(255,255,255,0.1); color:#fff; outline:none;">
      
      <button type="submit" name="submit" 
              style="padding:12px; border:none; border-radius:8px; background:linear-gradient(135deg,#ff416c,#ff4b2b); color:#fff; font-weight:bold; cursor:pointer; transition:transform 0.2s;">
        Reset
      </button>
      
      <a href="index.php" style="text-align:center; color:#f1c40f; font-size:13px; text-decoration:none;">Sign in</a>
    </form>
    
    <div style="margin-top:20px; text-align:center;">
      <a href="../index.php" style="display:inline-block; padding:10px 20px; background:linear-gradient(135deg,#00c6ff,#0072ff); color:#fff; border-radius:8px; text-decoration:none; font-weight:600;">
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