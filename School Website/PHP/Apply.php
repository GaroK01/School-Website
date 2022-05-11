<html>
<head>
    <title> Student info </title>
<style>
body{
   background-color: teal;
}
a{
   text-decoration: underline;
   color:tomato;
}
</style>

</head>

<?php 
  
$con=mysqli_connect('localhost','root','');
if(!$con){
   echo "not connected";
}
if(!mysqli_select_db($con,'php1')) {
   echo 'database not selected';
}

$Name = $_POST['Name'];
$Tel=$_POST['Tel'];
$Address=$_POST['Address'];
$PreviousSchoolName=$_POST['PreviousSchoolName'];
$CurrentClass=$_POST['CurrentClass'];
$AcademicYear=$_POST['AcademicYear'];
$link_address="../HTML/Apply.html";
            $sql = "INSERT INTO application( Name, Tel,Address,PreviousSchoolName,CurrentClass,AcademicYear) VALUES( '$Name','$Tel','$Address','$PreviousSchoolName','$CurrentClass','$AcademicYear')" ;

            if(!mysqli_query($con,$sql)){
               echo 'not inserted';
            }
            else{
               echo 'inserted ';
               echo "<a href='".$link_address."'>Go to Apply</a>";

            }
       
?>


        




</html>