<!DOCTYPE html>

<!--processes the values from "Sign Up" form,
    and inserts them into the finalDB
    accordingly -->

<html>
<head>
    <meta charset = "utf-8">
    <title>Logged In</title>
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
    print("<p>".var_dump($_POST)."</p>");

    // Connect to MySQL
    if ( !( $database = mysqli_connect( "localhost",
        "patrickraphaelperez", "copacetic87!" ) ) )
        die( "Could not connect to database </body></html>" );

    // open finaldb database
    if ( !mysqli_select_db( $database, "finaldb") )
        die( "Could not open finaldb database </body></html>" );

    //variables for username and password entered
    $userName = $_POST["username"];
    $password = $_POST["password"];
    //build a SELECT query to match username
    $selectQuery = mysqli_query($database,"SELECT UserID FROM auth WHERE Username = '$userName' AND Password = '$password'");
    $row=mysqli_fetch_array($selectQuery);
    $count = mysqli_num_rows($selectQuery);
    if ($count == 1){
        print("Welcome back ". $userName ."! Login was successful.");
        //query the user's first name, last name, email, and phone number
        $userQueryResult = mysqli_query($database, "SELECT FirstName, LastName, email, phone FROM auth WHERE Username='$userName' AND Password='$password'");
        //print data
        print("<table><tr><th>FirstName</th><th>LastName</th><th>E-mail</th><th>Phone</th></tr>");
        while($row = mysqli_fetch_row($userQueryResult)) {
            print("<tr>");
            foreach($row as $key => $value)
                print("<td>$value</td>");
            print("</tr>");
        }
    } else {
        echo "Incorrect username or password";
    }
    mysqli_close($database);
    ?>
</body>
</html>