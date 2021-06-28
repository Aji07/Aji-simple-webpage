
<!DOCTYPE html>
<html>
<head>
<title>View Records</title>
</head>
<body>
<div class="form">
<p><a href="index.php">Home</a> 
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Name</strong></th>
<th><strong>MobileNo</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$con=mysqli_connect('localhost','root','','test');
$sel_query="Select * from info;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["Name"]; ?></td>
<td align="center"><?php echo $row["MobileNo"]; ?></td>
<td align="center">

</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
