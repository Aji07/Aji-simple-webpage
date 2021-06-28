<?php
if(isset($_POST['submit']))
{
$Name=$_REQUEST['Name'];
$MobileNo=$_REQUEST['MobileNo'];
$con=mysqli_connect('localhost','root','','test');
$insert=("insert into Info values('$Name',$MobileNo)");
mysqli_query($con,$insert) or die(mysql_error());
echo "Successfull</br><a href='view.php'>View</a>";
}
?>