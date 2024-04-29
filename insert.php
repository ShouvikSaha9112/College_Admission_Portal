<?php
@$Name=$_POST['Name'];
@$Father=$_POST['Father'];
@$Gender=$_POST['Gender'];
@$Board=$_POST['Board'];
@$Marks=$_POST['Marks'];
@$Percentage=$_POST['Percentage'];
@$Subjectf=$_POST['Subjectf'];
@$Subjects=$_POST['Subjects'];
@$Subjectt=$_POST['Subjectt'];
@$Phone=$_POST['Phone'];
@$Email=$_POST['Email'];
if(!empty($Name)||!empty($Father)||!empty($Gender)||!empty($Board)||!empty($Marks)||!empty($Percentage)||!empty($Subjectf)||!empty($Subjects)||!empty($Subjectt)||!empty($Phone)||!empty($Email))
{
$host="localhost";
$dbUsername="root";
$dbPassword="";
$dbname="project";
//connection
$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
if(mysqli_connect_error())
{
die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
$SELECT="SELECT Phone From dtbs Where Email=? Limit 1";
$INSERT="INSERT Into dtbs (Name,Father,Gender,Board,Marks,Percentage,Subjectf,Subjects,Subjectt,Phone,Email) values (?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $conn->prepare($SELECT);
$stmt->bind_param("s",$Email);
$stmt->execute();
$stmt->bind_result($Email);
$stmt->store_result();
$rnum=$stmt->num_rows;
if($rnum==0)
{
$stmt->close();
$stmt= $conn->prepare($INSERT);
$stmt->bind_param("sssssssssis",$Name,$Father,$Gender,$Board,$Marks,$Percentage,$Subjectf,$Subjects,$Subjectt,$Phone,$Email);
$stmt->execute();
echo "Applied Successfully";
}
else
{
echo "Someone has Already Registered with this Email";
}
$stmt->close();
$conn->close();
}
}
else{
echo "All the Fields are Required";
die();
}
?>