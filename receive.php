<?php
// if no input, return no suggestions back to the user
// connect to database
require "dbconnect.php"; 
// suggest table name has "suggest" column with possible suggestion values;
// query to query suggest table
$query = "select chat1, chat2 from chats where id = 1";

// execute query
$result = mysql_query($query);  
// loop through results
while ($row = mysql_fetch_array($result, MYSQL_NUM))
{
	// print out results to standard out
	echo $row[0] . "|$|" . $row[1];
}


?>