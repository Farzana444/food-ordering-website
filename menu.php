<?php
include("nav.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>FOODIE ZONE</title>
<style type="text/css">
	.uu11{
		list-style-type: none;
		overflow:hidden;
		padding:0;
		margin-top:2px;
		width:100%;
		margin-left:450px;
	}
	.lll a {
		text-decoration: none;
		color:white;
		display:block;
		height:50px;
		width:500px;
		padding: 10px;
		border:1px solid black;
		background-color: lime;
		border-radius: 20px 0 20px 0;
		font-weight: bold;
	}
	.lll{
		text-align: center;
		padding:10px;
		margin-bottom:5px;
	}
	li:hover{
		opacity:0.8;
	}
	#items{
		height:250px;
		width:310px;
		padding:5px;
		border-radius:10px;
	}
	#items img{
		height:150px;
		width:300px;
		border-radius: 10px;
		display:block;
		text-align: center;
	}
	#items h5{
		text-align: center;
		margin-top:0;
		margin-bottom: 0;
	} 
	#items:hover{
		border:2px solid black;
	}
	.it{
		list-style-type: none;
		display:inline-block;
		padding:22px;
	}
	.it #items button{
		background-color: black;
		border:1px solid white;
		color:white;
		border-radius: 7px;
		padding:3px;
		width:120px;
		cursor:pointer;
	}
</style>
<script>
	// function order(){
	// 	if(confirm("Do you want to place this order ?")){
	// 	alert("Your order placed succesfully.");}
	// }
	function order(){
		alert("Please login to our website to place order!!!!!");
		window.location="login.php";
	}
</script>
</head>
<body>
<li class="it">
	<div id="items">
		<img src="./images/m1.jpg" alt="pic"><hr>
		<h5>SAMOSA - £2 each</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m2.jpg" alt="pic"><hr>
		<h5>SMOKY CHICKEN PIECES - £10</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m3.jpg" alt="pic"><hr>
		<h5>PASTRY - £4</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m4.jpg" alt="pic"><hr>
		<h5>COMBO(NOODLE+MANCHURIAN) - £8</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m5.jpg" alt="pic"><hr>
		<h5>MARGARITA PIZZA(Large) - £10</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m6.jpg" alt="pic"><hr>
		<h5>SPECIAL BIRYANI - £9 </h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m7.jpg" alt="pic"><hr>
		<h5>VEGE BURGER - £4</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m8.jpg" alt="pic"><hr>
		<h5>SOUTH INDIAN THALI - £11</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m9.jpg" alt="pic"><hr>
		<h5>SPECIAL CHICKEN FRY - £10</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m10.jpg" alt="pic"><hr>
		<h5>VEG LOADED PIZZA(Large) - £12</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m11.jpg" alt="pic"><hr>
		<h5>ALOO SNACK - £5 </h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m12.jpg" alt="pic"><hr>
		<h5>NORTH INDIAN THALI - £8</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m13.jpg" alt="pic"><hr>
		<h5>MACRONI - £6</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m14.jpg" alt="pic"><hr>
		<h5>EGG BIRYANI - £5</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m15.jpg" alt="pic"><hr>
		<h5>FISH FRY - £9 </h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m16.jpg" alt="pic"><hr>
		<h5>VEG NOODLE - £7</h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
<li class="it">
	<div id="items">
		<img src="./images/m17.jpg" alt="pic"><hr>
		<h5>VEG FRIED RICE - £5 </h5><hr>
		<center><button onclick="order();">Place Order</button></center>
	</div>
</li>
</body>
</html>