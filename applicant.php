<!DOCTYPE html>
<html>
<head>
<title> COLLEGE ADMISSION PORTAL </title>
</head>
<body>
<center>
<h2 align="center"><b>Student Panel</b><h2>
<form style="font-size:15px;" action="insert.php" method="POST">
<table>
<tr>
<td>
Name:
</td>
<td>
<input type="text" placeholder="Enter Full Name" name="Name">
</td>
</tr>
<tr>
<td>
Father:
</td>
<td>
<input type="text" placeholder="Enter Father's Name" name="Father">
</td>
</tr>
<tr>
<td>
Gender:
</td>
<td>
<input type="radio" placeholder="" name="Gender" value="Male">Male
<input type="radio" placeholder="" name="Gender" value="Femal">Female
<input type="radio" placeholder="" name="Gender" value="Others">Others
</td>
</tr>
<tr>
<td>
Board:
</td>
<td>
<select name="Board" id="Board">
<option value="WBCHHSE">WBCHHSE</option>
<option value="CBSE">CBSE</option>
<option value="ICSE">ICSE</option>
<option value="OTHERS">OTHERS</option>
</select>
</td>
</tr>
<tr>
<td>
Marks Obtained:
</td>
<td>
<input type="text" name="Marks" placeholder="Out of 500">
</td>
</tr>
<tr>
<td>
Percentage:
</td>
<td>
<input type="text" name="Percentage" placeholder="Top Five Subjects">
</td>
</tr>
<tr>
<td>
Subjects Applying For:
</td>
</tr>
<tr>
<td>
(i) <input type="text" name="Subjectf" placeholder="Enter 1st Choice">
</td>
</tr>
<tr>
<td>
(ii) <input type="text" name="Subjects" placeholder="Enter 2nd Choice">
</td>
</tr>
<tr>
<td>
(iii) <input type="text" name="Subjectt" placeholder="Enter 3rd Choice">
</td>
</tr>
<tr>
<td>
Contact Number:
</td>
<td>
<input type="number" name="Phone" placeholder="Enter Active Phone Number">
</td>
</tr>
<tr>
<td>
Email:
</td>
<td>
<input type="text" name="Email" placeholder="Enter Unique Email">
</td>
</tr>
<tr>
<td>
<input type="submit" value="submit">
</td>
</tr>
</table>
</form>
</body>
</html>