<html>
<body>
<header>
<h1>Staff Members </h1>
</header>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

header, footer {
    padding: 1em;
    color: white;
    background-color: blue;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
table, th, td {
    border: 3px solid red;
}
</style>
<div class="container">
<nav>
 <h4>
 <ul>
<a href ="http://localhost/phpdynamic/UPDATEDB.php">Update Staffmembers</a>
<p>
<a href ="http://localhost/phpdynamic/insertsample.php">Insert into Staffmembers</a>
 </ul>
</h4>
  </nav>
<article>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardware_sales";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result=mysqli_query($conn, "SELECT * FROM staffmembers");

?>

<table border ="3" bgcolor="#FFFF00">
	<tr>
		<th>Staff Member Code</th>
		<th>Staff Member Name</th>
		<th>Other Staff Member Details</th>
		<th>Delete</th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$staff_member_code = $row['staff_member_code'];
	$staff_member_name = $row['staff_member_name'];
	$other_staff_member_details = $row['other_staff_member_details'];
?>

<tr>
	
	<td><?php echo $staff_member_code;?></td>
	<td><?php echo $staff_member_name;?></td>
	<td><?php echo $other_staff_member_details;?></td>
	
	<td>
		<a href ="DELETEDB.php?delete=<?php echo $staff_member_code;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM staffmembers WHERE staff_member_code = '$delete_id'");
		
		header("location: DELETEDB.php");
	}
	?>
</table>
</article>
</div>

<p>







<header>
<h1>Clients </h1>
</header>
  <div class="container">
<nav>
 <h4>
 <ul>
<a href ="http://localhost/phpdynamic/UPDATEDB2.php">Update Clients</a>
<p>
<a href ="http://localhost/phpdynamic/insertsample2.php">Insert into Clients</a>
 </ul>
</h4>
  </nav>
<article>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardware_sales";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result=mysqli_query($conn, "SELECT * FROM clients");

?>

<table border ="3" bgcolor="#FFFF00">
	<tr>
		<th>Client ID</th>
		<th>Client Name</th>
		<th>Client Address</th>
		<th>Delete</th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$client_id = $row['client_id'];
	$client_name = $row['client_name'];
	$client_address = $row['client_address'];
?>

<tr>
	
	<td><?php echo $client_id;?></td>
	<td><?php echo $client_name;?></td>
	<td><?php echo $client_address;?></td>
	
	<td>
		<a href ="DELETEDB.php?delete=<?php echo $client_id;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM clients WHERE client_id = '$delete_id'");
		
		header("location: DELETEDB.php");
	}
	?>
</table>
</article>
</div>




<p>





<header>
<h1>Purchase</h1>
</header>
  <div class="container">
<nav>
 <h4>
 <ul>
<a href ="http://localhost/phpdynamic/UPDATEDB3.php">Update Purchase</a>
<p>
<a href ="http://localhost/phpdynamic/insertsample3.php">Insert into Purchase</a>
 </ul>
</h4>
  </nav>
<article>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardware_sales";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result=mysqli_query($conn, "SELECT * FROM purchase");

?>

<table border ="3" bgcolor="#FFFF00">
	<tr>
		<th>Purchase ID</th>
		<th>Date of Purchase</th>
		<th>Quantity Purchased</th>
		<th>Other Purchase Details
		<th>Delete</th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$purchase_id = $row['purchase_id'];
	$date_of_purchase = $row['date_of_purchase'];
	$quantity_purchased = $row['quantity_purchased'];
	$other_purchase_details = $row['other_purchase_details'];
?>

<tr>
	
	<td><?php echo $purchase_id;?></td>
	<td><?php echo $date_of_purchase;?></td>
	<td><?php echo $quantity_purchased;?></td>
	<td><?php echo $other_purchase_details;?></td>
	
	<td>
		<a href ="DELETEDB.php?delete=<?php echo $purchase_id;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM purchase WHERE purchase_id = '$delete_id'");
		
		header("location: DELETEDB.php");
	}
	?>
</table>
</article>
</div>



<p>



<header>
<h1>Status</h1>
</header>
  <div class="container">
<nav>
 <h4>
 <ul>
<a href ="http://localhost/phpdynamic/UPDATEDB4.php">Update Status</a>
<p>
<a href ="http://localhost/phpdynamic/insertsample4.php">Insert into Status</a>
 </ul>
</h4>
  </nav>
<article>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hardware_sales";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result=mysqli_query($conn, "SELECT * FROM status");

?>

<table border ="3" bgcolor="#FFFF00">
	<tr>
		<th>Item Code</th>
		<th>Item Name</th>
		<th>Item Quantity Available</th>
		<th>Delete</th>
	<tr>
<?php

$i=1;

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$item_code = $row['item_code'];
	$item_name = $row['item_name'];
	$item_quantity_avalible = $row['item_quantity_avalible'];
?>

<tr>
	
	<td><?php echo $item_code;?></td>
	<td><?php echo $item_name;?></td>
	<td><?php echo $item_quantity_avalible;?></td>
	
	<td>
		<a href ="DELETEDB.php?delete=<?php echo $item_code;?>"onclick="return confirm('Are you sure?');">Delete</a>
	</td>
	
	
</tr>

	<?php

	$i++;
	}
	if(isset($_GET['delete'])){
		$delete_id= $_GET['delete'];
		
		mysqli_query($conn, "DELETE FROM status WHERE item_code = '$delete_id'");
		
		header("location: DELETEDB.php");
	}
	?>
</table>
</article>
</div>
</body>
</html>