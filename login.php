<?php
    if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
		static $id;
		$user=$_POST['username'];
		$pass=$_POST['password'];
		$conn = mysqli_connect("localhost","root","","camping");
    $sql ="SELECT* FROM users WHERE username='$user' and password='$pass' ";
    $kq = mysqli_query($conn,$sql);
    if(mysqli_num_rows($kq)>0){
		setcookie("user_cookie", "$user", time() + 600, '/');
		while ($row = mysqli_fetch_array($kq)){
			 $id= $row['id'];
        header("location: index.php?id=$id");
		}
    }else{
        ?>
    <script>
            Swal.fire({
  icon: "error",
  title: "Lỗi!",
  text: "Mật khẩu không chính xác!",
});
        </script>
<?php 
}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bụi Camp- Đăng nhập</title>
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/stylelogin.css" rel="stylesheet" type="text/css" media="all"/>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!--header start here-->
<div class="header">
	
		<div class="header-main">
			<a href="index.php">
			<img src="favicon.jpg" style="width: 150px; border-radius: 50%; margin-left:155px; margin-top:-70px;" alt="">
		    </a>   
			<h1>Đăng nhập</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					
					<div class="header-left-bottom agileinfo">
						
					 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<input type="text"  value="Tên đăng nhập" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}"/>
					<input type="password"  value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
						<div class="remember">
			             <span class="checkbox1">
						 <h6><a href="#" style="color: white;">Quên mật khẩu?</a></h6>
						 </span>
						 <div class="forgot">
						 	<h6><a href="register.php">Bạn chưa có tài khoản?</a></h6>
						 </div>
						<div class="clear"> </div>
					  </div>
					   
						<input type="submit" name="dangnhap" value="Đăng nhập">
					</form>	
					
						
				</div>
				</div>
			  
			</div>
		</div>
</div>
<!--header end here-->
<div class="copyright">
	<p>© 2016 Classy Login Form. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
</div>
<!--footer end here-->
</body>
</html>