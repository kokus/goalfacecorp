<?PHP
/**
 * pingdom-core.php
 *
 * This small application will check your MySQL status by attempting a connection.
 * It will then generate an appropriate XML file for a Pingdom HTTP Custom check.
 *
 * @author Jon Stacey
 * @version 1.0
 * @website http://jonsview.com
 * 
 **/


// *******************************
// MySQL server configuration
// *******************************

$DB_HOST 	 = 'localhost';	// Database host
$DB_USERNAME = 'goalface_user'; 	// Database username
$DB_PASSWORD = 'Pa55w0rd';	// Database password



// End configurations. You probably won't need to make any changes beyond this point.

// Get start time for the execution timer
// Execution time code from http://www.developerfusion.com
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$starttime = $mtime;

// Check MySQL using the provided connection information
if ($rh = mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD))
	$mysqlStatus = 'OK';
else
	$mysqlStatus = 'MySQL DOWN';

// *******************************
// Return XML response for Pingdom
// *******************************
// If this script responds then obviously HTTP services is working ... we can just return the status of MySQL.
// I'll just print the XML directly instead of going through the hassle of learning PHP's XML functions

// Get end time and calculate execution time
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$endtime = $mtime;
$totaltime = round(($endtime - $starttime) * 1000, 3); // Time in milliseconds

// Print the XML response
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<pingdom_http_custom_check>
	<status>$mysqlStatus</status>
	<response_time>$totaltime</response_time>
</pingdom_http_custom_check>"
	
?>
