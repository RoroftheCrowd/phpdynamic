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
	$item_code = $_POST ['item_code'];
	$item_quantity_avalible = $_POST ['item_quantity_avalible'];
	
	//Check if both fields have been entered
	if ($item_code && $item_quantity_avalible){
		
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
	$exists= mysqli_query ($conn,"SELECT * FROM status WHERE item_code = '$item_code' ") or die ("Query could not be completed");
	
	// Update the location field 
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE STATUS SET item_quantity_avalible = '$item_quantity_avalible' WHERE item_code = '$item_code'") or die ("Update could not be applied");
		echo "Successful Location Updated";
			}else echo "That field No does not exist.  Please re-enter:";
					}else echo "You must enter values for both fields.  Please re-enter";
		
		
		
		
	}
	
?>
<html>
<head>
	<title>Update a Value</title>
</head> 
<body><br /><br />
<form action ="UPDATEDB4.php" method ="POST">
<table>
<tr><td>Item Code:</td> <td> <input type ="text" id="item_code" name="item_code"> </td></tr>
<tr><td>Item Quantity Available</td> <td> <input type ="text" id="item_quantity_avalible" name="item_quantity_avalible"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Location"></td></tr>
</table>
</form>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>
</body>
</html>