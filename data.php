<?php

include("connection.php");
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];

$result=mysqli_query($con,"select * from login where uname='$uname' AND pwd='$pwd'");


echo "<table border='1' >
<tr>
<td align=center> <b>Username</b></td>
<td align=center><b>Password</b></td>
</tr>";
if (mysqli_num_rows($result) > 0) {
while($data = mysqli_fetch_assoc($result))
{    
  
    echo "Successfully logged In!!";

    
}
}
else {
    echo "conn error";
}
echo "</table>";
?>