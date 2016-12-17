<!DOCTYPE html>

<!--processes the values from "Sign Up" form,
    and inserts them into the finalDB
    accordingly -->

<html>
<head>
    <meta charset = "utf-8">
    <title>Signed Up</title>
    <style>
        body  { font-family: sans-serif;
            background-color: lightyellow; }
        table { background-color: lightblue;
            border-collapse: collapse;
            border: 1px solid gray; }
        td    { padding: 5px; }
        tr:nth-child(odd) {
            background-color: white; }
    </style>
</head>
<body>

    <p>Processed User Data:</p>
    <?php

    //Display the submitted data
    print("<p>".var_dump($_POST)."</p>"); ?>

    <p>Inserting into Database</p>
    <?php

    // Connect to MySQL
    if ( !( $database = mysqli_connect( "localhost",
        "patrickraphaelperez", "copacetic87!" ) ) )
        die( "Could not connect to database </body></html>" );

    // open finaldb database
    if ( !mysqli_select_db( $database, "finaldb") )
        die( "Could not open finaldb database </body></html>" );

    //create variables for all the input
    $firstName = $_POST["FirstName"];
    $lastName = $_POST["LastName"];
    $phoneNumber = $_POST["phone"];
    $emailAddress = $_POST["email"];
    $userName = $_POST["username"];
    $password = $_POST["password"];

    //build the INSERT query
    $insertQuery = "INSERT INTO auth (Username,Password,FirstName,LastName,email,phone) VALUES ('$userName','$password','$firstName','$lastName','$emailAddress','$phoneNumber')";

    //make a new record in the DB with the received information
    mysqli_select_db($database, "finaldb");
    $returnValue = mysqli_query($database, $insertQuery);

    //if submission not successful, error message displays
    if(! $returnValue){
        die('Could not enter data ' . mysqli_error($database));
    }

    echo "Enter data successfully.\n";
    ?>

    <!--DEBUGGING: function queries the DB and displays a
     of all registered users by first and last name' -->
    <br><table>
        <caption>All Registered Users</caption>
        <?php
        function showTable($database){
            $namesQueryResult = mysqli_query($database, "SELECT Firstname,LastName FROM auth");
            while($row = mysqli_fetch_row($namesQueryResult)){
                //build table to display results
                print("<tr>");

                foreach($row as $key => $value)
                    print("<td>$value</td>");

                print("</tr>");
            }
        }
        showTable($database);
        mysqli_close($database);
        ?>
    </table>

</body>
</html>