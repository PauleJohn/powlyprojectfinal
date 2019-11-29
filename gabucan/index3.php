<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM tbl_student ORDER BY studentid DESC");
?>

<html>
<head>	
<title>Homepage</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
	color:green;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}
</style>
<body>
<nav class="navbar navbar-right">
  <ul class="nav navbar-nav">
    <li><a href="add.html">Student</a></li>
     <li><a href="add2.php">Class</a></li>
       <li><a href="index3.php"> View Class</a></li>
     <li><a href="index2.php"> View Student</a></li>

  </ul>
  <ul class="nav navbar-nav navbar-right">
     
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
    </ul>
</nav>

</nav>
	
<a href="add.html">Add New Data</a><br/><br/>

	<table width='70%' border=20>

	<tr bgcolor='#ffff'>
		<td>LRN</td>
		<td>First Name</td>
		<td>Last Namer</td>
		<td>Purpose</td>
		<td>Hours</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['LRN']."</td>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['Purpose']."</td>";	
		echo "<td>".$row['Hours']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[studentid]\">Edit</a> | <a href=\"delete.php?id=$row[studentid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
