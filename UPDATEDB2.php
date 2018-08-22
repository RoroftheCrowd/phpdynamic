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
	$client_id = $_POST ['client_id'];
	$client_address = $_POST ['client_address'];
	
	//Check if both fields have been entered
	if ($client_id && $client_address){
		
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
	$exists= mysqli_query ($conn,"SELECT * FROM clients WHERE client_id = '$client_id' ") or die ("Query could not be completed");
	
	// Update the location field 
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE CLIENTS SET client_address = '$client_address' WHERE client_id = '$client_id'") or die ("Update could not be applied");
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
<form action ="UPDATEDB2.php" method ="POST">
<table>
<tr><td>Client ID:</td> <td> <input type ="text" id="client_id" name="client_id"> </td></tr>
<tr><td>Client Address</td> <td> <input type ="text" id="client_address" name="client_address"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Location"></td></tr>
</table>
</form>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>
</body>
</html>