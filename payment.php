<?php
include("nav1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>payment</title>
	<style>
        .ord{
            text-align: center;
            padding: 10px 30px;
            color: white;
            background-color: red;
            font-size: 18px;
            border: 1px solid white;
            border-radius: 7px; 
            cursor:pointer;
        }
        form{
			text-align: center;
			margin: auto;
			padding: 10px;
			width: 450px;
			margin-top: 30px;

		}
        input{
		 	padding: 5px;
		 	border-radius: 2px;
		 	font-size:12px;
		 }
		 label{
		 	width:150px;
		 	display: inline-block;
		 }
    </style>
</head>
<body>
<?php
	if(isset($_POST['pay'])){
		?>
		<script>
			alert('Order placed successfully. Will be delivered to your registered address!!!');
            window.location ='home.php';
		</script>
		<?php
	}
?>
    <p><a href="basket.php" style="margin-left:20px; color:black; font-size:20px;">Back</a></p>
    <h1 style="text-align:center;">Payment page</h1>
    <form action="" method="POST">
        <label>Full Name: </label>  <input type="text" name="fname" required/><br><br>
        <label>Card number</label>  <input type="number" name="numb" required/><br><br>
        <label>Expiry </label>  <input type="text" name="exp" required/><br><br>
        <label>Postcode </label>  <input type="text" name="pcode"><br><br>
        <input type="submit" class="ord" name="pay" value="Complete payment"/>
    </form>
</body>
</html>