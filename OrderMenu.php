<?php
include("nav1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ORDER MENU</title>
	<style>
		table{
			border:3px solid black;
			border-collapse: collapse;
			margin-right:80px;
		}
		tr{
			border:2px solid black;
			border-collapse: collapse;
		}
		th,td{
			width:300px;
			text-align: center;
			padding:30px;
		}
		th{
			font-size: 20px;
			
		}
		tr{
			font-size: 19px;
		
		}
		#dp{
			margin-top: 60px;
			/* background-image: url('./images/img6.jpg');
			background-size: cover; */
		}
		tr td button{
			border:1px solid black;
			background-color: black;
			color:white;
			border-radius: 8px;
			height:25px;
			width:120px;
			cursor: pointer;
		}
		.addbag a{
			border: 2px solid black;
			padding: 7px;
			font-weight: bold;
		}
		.addbag b{
			border-top: 2px solid black;
			border-bottom: 2px solid black;
			padding: 7px;
		}
		.basket_div a img{
			height: 30px;
			width: 30px;
		}

	</style>
		<script>
			function addItem(){
				alert("Item added succcesfully to the cart... ");
				// if(confirm("Do you want to place this order ?")){
				// alert("Your order placed succesfully. Do the payment during delivery. Enjoy your food......");
				// window.location="home.php";
			}
		</script>
</head>
<body>
	<div class="basket_div">
			<a href="basket.php" style="float: right;"><img src="images/basket.png"/><p style="margin-top: -23px;
    margin-left: 30px;">Basket</p></a>
	</div>
	<div id="dp">
	<center><h2><i>AVAILABLE ITEMS</i></h2></center>
	<table align="center">
		<tr>
			<th>Item Name</th>
			<th>Cost of item</th>
			<th>No. of items</th>
			<th> </th>
		</tr>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="foodshala";
			// $username="id14719824_root";
			// $password="Farzanaa@123";
			// $dbname="id14719824_foodshala";
			//create connection
			$conn=mysqli_connect($servername,$username,$password,$dbname);
			$q="SELECT * from menuItems ";
			$res=$conn->query($q);
			if(isset($_POST['submit']) && $_POST['cost']>0){
				$updt = $_POST['updt'];
				$item = $_POST['item'];
				$cost = $_POST['cost'];
				$p = "INSERT INTO bagitem(item,quantity,price) VALUES('$item','$updt','$cost')";
				if(!mysqli_query($conn,$p))
				{
				echo "error in updating data : ".mysqli_error($conn);
				}
				else{
				?>
				<script>
					alert('<?php echo $updt>1 ? 'Items added successfully to basket' : 'Item added to basket successfully'; ?>');
				</script>
				<?php
				}
			}
			while($row=$res->fetch_assoc()){
				?>
				<tr>
					<form method='post' action=''>
						<input type='hidden' name='item' value="<?php echo $row['item']?>" />
						<input type='hidden' name='cost' value="<?php echo $row['price']?>" />
						<td><?php echo $row['item']?></td>
						<td><?php echo '£'.$row['price']?></td>
						<td><input type="number" name="updt" value="1"></input></td>
						<td><button type="submit" name="submit">Add Item</button></td>
					</form>
				</tr>

				<?php
			}
		?>
	</table>
</div>
</body>
</html>