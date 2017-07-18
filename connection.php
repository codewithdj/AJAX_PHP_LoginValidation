<?php 
/*$con=mysql_connect("localhost:8080","root","");  
if (!$con)
{
    die('Could not connect: ' . mysql_error());
    echo "not connected";
}   
else{
    echo "connected";
}*/

$con = new mysqli("localhost", "root", "","samples");

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "connected";
?>