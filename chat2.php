<?php
if (get_magic_quotes_gpc())
{
     // magic_quotes_gpc is ON
     // so we don't need to do anything
     $col2 = $_POST['col2'];
}
else
{
	// if magic quotes is off, we need to add slashes in order to prevent injection attacks.
    $col2  = addslashes($_POST['col2']);
}
// if no input, return no suggestions back to the user
// connect to database
require "dbconnect.php"; 
// suggest table name has "suggest" column with possible suggestion values;
// query to query suggest table
$query = "update chats set chat2 =  '" . $col2 . "' where id = 1";
// execute query
mysql_query($query);  

$query = "select chat2 from chats where id = 1";
// execute query
$result = mysql_query($query);  
// loop through results
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	// print out results to standard out
	echo $row['chat2'];
}


?>