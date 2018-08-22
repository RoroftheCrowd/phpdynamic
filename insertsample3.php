<!DOCTYPE html>
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
    <html lang="en">

    <head>

    <meta charset="UTF-8">

    <title>Add Record Form</title>

    </head>

    <body>
<header>
<h1>Insert a new Value </h1>
</header>
    <form action="SAMPLEINSERT3.php" method="post">

        <p>

            <label for="purchase_id">Purchase ID:</label>

            <input type="text" name="purchase_id" id="purchase_id">

        </p>

        <p>

            <label for="date_of_purchase">Date of Purchase:</label>

            <input type="text" name="date_of_purchase" id="date_of_purchase">

        </p>

        <p>

            <label for="quantity_purchased">Quantity Purchased:</label>

            <input type="text" name="quantity_purchased" id="quantity_purchased">

        </p>
		
		<p>

            <label for="other_purchase_details">Other Purchase Details:</label>

            <input type="text" name="other_purchase_details" id="other_purchase_details">

        </p>

        <input type="submit" value="Submit">

    </form>
	<p>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>
    </body>

    </html>

