<?php 

$con = mysqli_connect('localhost:3308','root','','alcool_db');
if($con)
{
	echo "";
}
else
{
	echo mysqli_error($con);
}

 ?>