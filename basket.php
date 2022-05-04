<?php
include("nav1.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>ORDER MENU</title>
	<style>
        table{
			border:1px solid black;
			border-collapse: collapse;
			margin: auto;
		}
		tr{
			border:1px solid black;
			border-collapse: collapse;
		}
		th,td{
			width:180px;
			text-align: center;
			padding:10px;
		}
		th{
			font-size: 20px;
			
		}
		tr{
			font-size: 19px;
		
		}
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
    </style>
</head>
<body>
    <p><a href="OrderMenu.php" style="margin-left:20px; color:black; font-size:20px;">Back</a></p>
    <h1 style="text-align:center;">Your basket details</h1>
    <table>
        <tr>
            <th>Name of item</th>
            <th> Quantity</th>
            <th>Unit Price</th>
            <th> Price</th>
        </tr>
        <?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="foodshala";
            $conn=mysqli_connect($servername,$username,$password,$dbname);
			$q="SELECT * from bagitem";
            $res=$conn->query($q);
            $x=0;
            while($row=$res->fetch_assoc()){
                // $item = $row['item'];
                // $resultprice = mysqli_query($conn, "SELECT price from menuitems where item = '$item' ");
                // while($r = $resultprice->fetch_assoc()){
                //     $price = $r['price'];
                // }
				?>
				<tr>
					<td><?php echo $row['item']?></td>
					<td><?php echo $row['quantity'] ?></td>
                    <td><?php echo '£'.$row['price'] ?></td>
					<td><?php echo '£' .$row['quantity'] * $row['price']; ?></td>
					</form>
				</tr>
            <?php
            $x += $row['quantity'] * $row['price'];
            }
             ?>
<tr style="font-weight:bold;"><td colspan="3">Total cost:</td><td><?php echo '£'.$x; ?></td></tr>
    </table>
    <div style="width:200px;margin:auto;margin-top:30px;">
        <button class="ord" onclick="window.location ='payment.php';">Place Order</button>
    </div>
</body>
</html>