<?php
/*$dbHost = "silo.cs.indiana.edu";
$dbUserAndName = "b561_f11_42";
$dbPass = "stopandshop";

$_TABLE_NAME = "product";
$_PERSON_ID_FIELD = "productID";
$_PERSON_NAME_FIELD = "name";
$_PERSON_USERNAME_FIELD = "description";

mysql_connect ($dbHost, $dbUserAndName, $dbPass) or die ("Cannot connect to host $dbHost with user $dbUserAndName and the password provided.");
mysql_select_db ($dbUserAndName) or die ("Database $dbUserAndName not found on host $dbHost");*/
$user_name = "root";
$password = "";
$database = "db_561";
$server = "127.0.0.1";
$_TABLE_NAME = "laptop";
$_TABLE_ACC = "accessories";
$_TABLE_NAME2 = "product";
$_TABLE_ORDER = "orders";

mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database);
/*if ($db_found) {
print "Database Found";
}
else {
print "Database NOT Found";
}*/
?>