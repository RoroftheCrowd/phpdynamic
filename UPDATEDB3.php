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
</style>
<header>
<h1>Update a Value </h1>
</header>
<?php

// Check if the user has submitted data into the form

if (isset ($_POST ['submit'])){
	$purchase_id = $_POST ['purchase_id'];
	$quantity_purchased = $_POST ['quantity_purchased'];
	
	//Check if both fields have been entered
	if ($purchase_id && $quantity_purchased){
		
			//Connect to the server and the hardware_sales database
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
	
	// Check if that department exists
	$exists= mysqli_query ($conn,"SELECT * FROM purchase WHERE purchase_id = '$purchase_id' ") or die ("Query could not be completed");
	
	// Update the location field 
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE PURCHASE SET quantity_purchased = '$quantity_purchased' WHERE purchase_id = '$purchase_id'") or die ("Update could not be applied");
		echo "Successful Location Updated";
			}else echo "That field No does not exist.  Please re-enter:";
					}else echo "You must enter values for both fields.  Please re-enter";
		
		
		
		
	}
	
?>
<html>
<head>
	<title>Update a Value</title>
</head> 
<body>
<br /><br />
<form action ="UPDATEDB3.php" method ="POST">
<table>
<tr><td>Purchase ID:</td> <td> <input type ="text" id="purchase_id" name="purchase_id"> </td></tr>
<tr><td>Quantity Purchased</td> <td> <input type ="text" id="quantity_purchased" name="quantity_purchased"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Location"></td></tr>
</table>
</form>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>
</body>
</html>