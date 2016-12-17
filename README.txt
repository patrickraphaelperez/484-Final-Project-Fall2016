/*
 * Patrick-Raphael Perez
 * Professor Babakhanlou
 * COMP 484 FALL 2016
 * Final Assignment
 * December 15, 2016
 *
 */

Part I: Database, final.sql // functionality: COMPLETE
> Created a mysql databases called 'finaldb' which has a table called 'auth'
> Columns are as instructed from project specifications
	- Username
	- Password
	- firstName
	- lastName
	- email
	- phone
> implemented 3 INSERTs in the file

Part II: home.html (EXTRA CREDIT COMPLETE)
> Completed forms for Returning Users and New Users
> Has submit button that will post information to login.php or signup.php as intended
> EXTRA CREDIT: Javascript password validation - WORKING
    - displays an error message in red next to retype passwords if passwords do not match

Part III: signup.php // functionality: COMPLETE
> used a var_dump to display the processed user data
> used "mysqli" in my commands because that worked with my system
    - "mysql_select_db()"" gave me errors -- as a result, I used mysqli and switched my parameters
    - EXAMPLE: mysqli_select_db($database, "finaldb");
> able to display all registered users by first name and last name
    - attached screenshot of final result (signup.php_SCREENSHOT.png)

PART IV: login.php // functionality: COMPLETE
> log in error message works
> log in successful message displays if login was successful
    - Table is created listing the user's First Name, Last Name, E-Mail, and Phone Number

PART V: dbdump.txt
> mysqldump worked
> finaldb is backed up into dbdump.txt (provided)

