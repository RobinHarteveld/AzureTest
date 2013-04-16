<?php
// Make a MySQL Connection
mysql_connect("eu-cdbr-azure-north-a.cloudapp.net", "b8563c94b46c37", "f673e89a") or die(mysql_error());
mysql_select_db("idpskool01") or die(mysql_error());

// Retrieve all the data from the "user" table
$result = mysql_query("SELECT username,skoolid FROM users")
or die(mysql_error());  

// store the record of the "example" table into $row
////$row = mysql_fetch_array( $result );
// Print out the contents of the entry 
////var_dump($row);
while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("User: %s  SkoolID: %s", $row[0], $row[1]);
}

mysql_free_result($result);
?>
