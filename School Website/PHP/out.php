<html>
<head>
    <style>

body{
    background: linear-gradient(-45deg, #3f51b1 0%, #5a55ae 13%, #7b5fac 25%, #8f6aae 38%, #a86aa4 50%, #cc6b8e 62%, #f18271 75%, #f3a469 87%, #f7c978 100%);
 
 animation: gradient 15s ease infinite;
 height: 100vh;
 
 background-size:  400% 400%;

 }
 @keyframes gradient {
   0% {
     background-position: 0%;
   }
   50% {
     background-position: 100%;
   }
   100% {
     background-position: 0%;
   }}
  
   table{
     margin-top: 51px;;
 }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
    color:white;
  padding: 7px;
  text-align: left;
}

 </style>
 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div style="background-color: black;">
            <center> <img src="../unnamed.png"></center>
                     </div>
        <header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed ">
                <span class="navbar-brand"  >Menu</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../HTML/Home.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../HTML/Admissions.html">Admissions</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="../HTML/Apply.html">Apply</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="../HTML/Student.html">Student Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="../HTML/Academic.html">Academic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="../HTML/News.html">News</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
<?php 
$username = "root"; 
$password = ""; 
$database = "php1"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM student WHERE ID='10' ";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> ID</font> </td> 
          <td> Name</font> </td> 
          <td> Father</font> </td> 
          <td> Mother</font> </td> 
          <td> DOB</font> </td>
          <td> Building Address</font> </td> 
          <td> Street Address</font> </td> 
          <td> City</font> </td> 
          <td> Tel Number</font> </td>
          <td> Class</font> </td> 
          <td> Email</font> </td> 
          <td> UserName</font> </td> 
          <td> Password</font> </td> 
          <td> Absence History</font> </td> 
          <td> Behaviour History</font> </td>
          <td> Grades</font> </td>
          <td> Weekly Schedule</font> </td> 
          <td> Home works</font> </td>       
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field0name = $row["ID"];
        $field1name = $row["Name"];
        $field2name = $row["Father"];
        $field3name = $row["Mother"];
        $field4name = $row["DOB"];
        $field5name = $row["Building Address"];
        $field6name = $row["Street Address"];
        $field7name = $row["City"];
        $field8name = $row["Tel Number"]; 
        $field9name = $row["Class"]; 
        $field10name = $row["Email"];
        $field11name = $row["UserName"]; 
        $field12name = $row["Password"]; 
        $field13name = $row["Absence History"]; 
        $field14name = $row["Behaviour History"]; 
        $field15name = $row["Grades"];
        $field16name = "Weekly Schedule";
        $field17name ="Home works"; 

        echo '<tr> 
                  <td>'.$field0name.'</td>
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td>'.$field9name.'</td>
                  <td>'.$field10name.'</td> 
                  <td>'.$field11name.'</td>
                  <td>'.$field12name.'</td>
                  <td><a href="../Absence.pdf">'.$field13name.'</a></td>
                  <td><a href="../Behavior.pdf">'.$field14name.'</a></td>
                  <td><a href="../Grades of the student.pdf">'.$field15name.'</a></td>
                  <td><a href="../Grade11.pdf">'.$field16name.'</a></td>
                  <td><a href="../Homework Grade 11.pdf">'.$field17name.'</a></td>
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>