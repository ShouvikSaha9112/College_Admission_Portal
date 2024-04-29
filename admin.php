<!DOCTYPE html>
<html>
<head>
    <style>
        th{
            text-align: center;
            font-size: 25px;
            padding: 10px;
        }
        td{
            text-align: center;
            font-size: 20px;
        
        }
    </style>
</head>
<body>
<h1 align="center" border="1px" style="font-size:40px;"><b>Admin Panel</b><h1>
<table align="center" border="1px" style="width:1200px; line-height:40px">
<tr>
<th colspan="12"><h2><font size=20>To Retrive Student Record</h2></th>
</tr>
<tr>
<th > Sl. No. </th>
<th > Name </th>
<th > Father </th>
<th > Gender </th>
<th > Board </th>
<th > Marks </th>
<th > Percentage </th>
<th > Subject-1 </th>
<th > Subject-2 </th>
<th > Subject-3 </th>
<th > Phone No </th>
<th > Email </th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","project");
$sql="SELECT * From dtbs";
$result=$conn->query($sql);
while($rows=$result->fetch_assoc())
{
?>
<tr>
<td><?php echo $rows['id']; ?></td>
<td><?php echo $rows['Name']; ?></td>
<td><?php echo $rows['Father']; ?></td>
<td><?php echo $rows['Gender']; ?></td>
<td><?php echo $rows['Board']; ?></td>
<td><?php echo $rows['Marks']; ?></td>
<td><?php echo $rows['Percentage']; ?></td>
<td><?php echo $rows['Subjectf']; ?></td>
<td><?php echo $rows['Subjects']; ?></td>
<td><?php echo $rows['Subjectt']; ?></td>
<td><?php echo $rows['Phone']; ?></td>
<td><?php echo $rows['Email']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>