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
	$staff_member_code = $_POST ['staff_member_code'];
	$other_staff_member_details = $_POST ['other_staff_member_details'];
	
	//Check if both fields have been entered
	if ($staff_member_code && $other_staff_member_details){
		
			//Connect to the server and the empdept2 database
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
	$exists= mysqli_query ($conn,"SELECT * FROM staffmembers WHERE STAFF_MEMBER_CODE = '$staff_member_code' ") or die ("Query could not be completed");
	
	// Update the location field in the DEPT table
	if (mysqli_num_rows($exists) !=0){
		mysqli_query ($conn,"UPDATE STAFFMEMBERS SET OTHER_STAFF_MEMBER_DETAILS = '$other_staff_member_details' WHERE STAFF_MEMBER_CODE = '$staff_member_code'") or die ("Update could not be applied");
		echo "Successful Location Updated";
			}else echo "That Dept No does not exist.  Please re-enter:";
					}else echo "You must enter values for both fields.  Please re-enter";
		
		
		
		
	}
	
?>
<html>
<head>
	<title>Update a Value</title>
</head> 
<body>
<br /><br />
<form action ="UPDATEDB.php" method ="POST">
<table>
<tr><td>Staff Member Code:</td> <td> <input type ="text" id="staff_member_code" name="staff_member_code"> </td></tr>
<tr><td>Other Staff Member Details</td> <td> <input type ="text" id="other_staff_member_details" name="other_staff_member_details"> </td></tr>
<tr><td><input type ="submit" id="submit" name="submit" value = "Update Location"></td></tr>
</table>
</form>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>
</body>
</html>