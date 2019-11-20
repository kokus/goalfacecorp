<?PHP
/**
 * pingdom-server.php
 *
 * This application will check your server swap, hard drive, and cpu usage.
 * It will then generate an appropriate XML file for a Pingdom HTTP Custom check.
 *
 * If any usage is above your preset thresholds, then a down message will be returned,
 * indicating that your server may be under more load than usual, hopefully, providing
 * a bit of advanced notice before a failure due to lack of resources
 *
 * @author Jon Stacey
 * @version 1.0
 * @website http://jonsview.com
 * 
 **/

// *******************************
// Configure thresholds
// *******************************

$SWAP_THRESHOLD = 256; 			// The amount of swap usage (mb)
$HD_THRESHOLD 	= 93; 			// The percentage of space used
$HD_MOUNT 		= '/dev/sda1';	// The filesystem mount to check
$CPU_THRESHOLD 	= 7.00;			// The 5 minute CPU load average threshold

// End configurations. You probably won't need to make any changes beyond this point.

// Get start time for the execution timer
// Execution time code from http://www.developerfusion.com
$mtime = microtime();
$mtime = explode(" ",$mtime);
$mtime = $mtime[1] + $mtime[0];
$starttime = $mtime;


$status = 'OK'; // Assume OK unless something is over the threshold

// *******************************
// Swap Usage
// *******************************

$swapUsage = `free -m |grep Swap|perl -pe 's/Swap:\s+\S+\s+(\S+).*/$1/'`;

if ($swapUsage > $SWAP_THRESHOLD)
	$status = 'SWAP OVER THRESHOLD';

// *******************************
// Hard drive usage
// *******************************

$hdUsage = `df -h | grep '/dev/sda1' | awk '{print $5}' | perl -pe 's/%//'`;

if ($hdUsage > $HD_THRESHOLD)
	$status = 'HARD DRIVE OVER THRESHOLD';

// *******************************
// CPU usage
// *******************************

$cpuUsage = `uptime | awk '{print $10}' | perl -pe 's/,//'`;

if ($cpuUsage > $CPU_THRESHOLD)
	$status = 'CPU OVER THRESHOLD';

// *******************************
// Return XML response for Pingdom
// *******************************
// If this script responds then obviously HTTP services is obviously working ... so we can just return the status of MySQL
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
	<status>$status</status>
	<response_time>$totaltime</response_time>
</pingdom_http_custom_check>"


?>
