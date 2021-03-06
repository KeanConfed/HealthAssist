
<?php
$servername = "localhost";
$dbusername = "user";
$dbpassword = "user";
$dbname = "healthassist";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if (!$conn) {
	die("Failed to connect to MySQL: ".mysqli_connect_error());
}

$specialization = $_POST['specialization'];  

$sql = "SELECT *
	FROM doctortable
	WHERE Special = '$specialization'";

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error; ' . mysqli_error($conn));
}  
     
?>


<!DOCTYPE html>
<html>
<head>
  <title>Health Assist</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	
<style type="text/css">
		body {
			font-size: 120%;
  			background: #F8F8FF;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
			width:100%;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style> 
</head>
<body>

  <div class="header">
  	<h2>Search Results</h2>
  </div>
<form method="post" action="search.php">
	<table class="data-table">
		<caption class="title">Doctors Found with that Specialization</caption>
		<thead>
			<tr>
				<th>Picture</th>
				<th colspan='2'>Details</th>				
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		$total 	= 0;
		

		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
				<td>'.$no.'</td>
				<td>'.'<strong>Doctors Name: </strong>'.'<br/>
				'.'<strong>Contact Number: </strong>'.'<br/>
				'.'<strong>Address: </strong>'.'</td>


				<td>'.'Dr.'.' '.$row['First_Name']." ".$row['Last_Name'].'<br/>'
				     .$row['Phone_Number'].'<br/>'
				     .$row['address'].
				'</td>					
			      </tr>';
			
			$no++;
		}?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="2">Total Doctors found</th>
				<th><?=number_format($no-1)?></th>
			</tr>
		</tfoot>
	</table>
  
<div class="input-group">
  	  <button type="submit" class="btn" name="backbtn" onclick="history.go(-1);">Back</button>
  	</div>
</div>
</body>
</html>