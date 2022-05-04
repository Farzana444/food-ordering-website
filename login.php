<?php
include("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN FORM</title>
	<style type="text/css">		
		input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		}
		label{
		 	width:100px;
		 	display: inline-block;
		}
		#add{
			float:right;
		 	color:black;
		 	padding-right:40px;
		}
		form{
			text-align: center;
			margin: auto;
			padding: 30px;
			width: 400px;
			margin-top: 30px;
    		border-radius: 5px;
			border: 1px solid black;
		}

	</style>
</head>
<body>
<p style="text-align:center;font-weight:bold;">LOGIN TO YOUR ACCOUNT !!!</p>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<?php
if(isset($_POST['submit']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="foodshala";
// $servername="localhost";
// $username="id14719824_root";
// $password="Farzanaa@123";
// $dbname="id14719824_foodshala";
$uname=$_POST['uname'];
$pswd=$_POST['pswd'];
//create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
  die("Connection Failed : ".mysqli_error());
}
$sql="SELECT name,password from customer where name='$uname' AND password='$pswd'";
$run=mysqli_query($conn,$sql);
$row=mysqli_num_rows($run);
if($row<1)
{
	?>
	<script>
		alert('Not found record!!!! Register Now');
		window.location="register.php";
	</script>
	<?php
}
else{
	?>
	<script>
		alert('Logged In Successfully!!!!!');
		window.location="home.php";
	</script>
	<?php
}

mysqli_close($conn);

}
?>
<label>UserName</label><input type="text" name="uname" required><br><br>
<label>Password</label><input type="password" name="pswd" required><br><br>
<label><input type="reset" name="reset"></label>
<label><input type="submit" name="submit"></label>
<br>
<p style="color:red;">Don't have account!!!!<a href="register.php"><b> Register Here</b></a></p>
</form>
</body>
</html>