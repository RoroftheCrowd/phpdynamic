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
    <form action="SAMPLEINSERT2.php" method="post">

        <p>

            <label for="client_id">Client ID</label>

            <input type="text" name="client_id" id="client_id">

        </p>

        <p>

            <label for="client_name">Client Name:</label>

            <input type="text" name="client_name" id="client_name">

        </p>

        <p>

            <label for="client_address">Client Address:</label>

            <input type="text" name="client_address" id="client_address">

        </p>

        <input type="submit" value="Submit">

    </form>
	<p>
<a href ="http://localhost/phpdynamic/DELETEDB.php">Go back to Homepage</a>
    </body>

    </html>

