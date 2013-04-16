<?php
// Make a MySQL Connection
mysql_connect("localhost", "admin", "1admin") or die(mysql_error());
mysql_select_db("mysql") or die(mysql_error());

// Retrieve all the data from the "user" table
$result = mysql_query("SELECT * FROM user")
or die(mysql_error());  

// store the record of the "example" table into $row
$row = mysql_fetch_array( $result );
// Print out the contents of the entry 
var_dump($row);

