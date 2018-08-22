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
<h1>Insert a new Value </h1>
</header>
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

// Escape user inputs for security

$item_code = $_POST['item_code'];

$item_name = $_POST['item_name'];

$item_quantity_avalible = $_POST ['item_quantity_avalible'];

 

// attempt insert query execution

mysqli_query($conn, "INSERT INTO STATUS (item_code, item_name, item_quantity_avalible) VALUES ('$item_code', '$item_name', '$item_quantity_avalible')");

if(mysqli_affected_rows($conn)>0){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);

}

 

// close connection

mysqli_close($conn);

?>
<p>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>