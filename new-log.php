<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
	body {
		border-spacing: 10px 0;
		background-color: #F1F1F1;
	}

	html,
	body,
	h1,
	h2,
	h3,
	h4,
	h5 {
		font-family: "Raleway", sans-serif
	}

	input[type='checkbox'] {

		width: 100px;
		height: 25px;
	}

	input[type='text'] {

		width: 100%;

	}
</style>

<body>

	<!-- Blog entries -->
	<div class="w3-col l12 s12">
		<!-- Blog entry -->
		<div class="w3-card-4 w3-margin w3-white">

			<br />
			<div class="w3-container">
				<a href="index.php">return home </a>
				<br />
				<br />
				<h3><b>New log</b></h3>

				<form action="new-log.php" method="post" onkeydown="return event.key != 'Enter';">

					<table>
						<tr>
							<td>Hostname</td>
							<td><input type="text" name="Hostname"></td>
						</tr>
						
						<tr>
							<td>Issue(s)</td>
							<td><input type="text" name="Issues"></td>
						</tr>
					 
						<tr>
							<td>Remark(s)</td>
							<td><input type="text" name="Remarks"></td>
						</tr>
					 
						<tr>
							<td></td>
							<td><input type="submit"></td>
						</tr>
					</table>



					</br>
					</br>
				</form>

				<?php

				$Hostname = $_POST['Hostname'];
				$Issues = $_POST['Issues'];
				$Remarks = $_POST['Remarks'];
				 

				echo "<br>";

				if (empty($Hostname)) {
					echo '<span style="color:Red;"><b>"Please enter Hostname"</b></span>';
					echo "<br>";
					echo "<br>";
				} else {

					$Servername = "localhost";
					$Username = "admin";
					$Password = "password";
					$Dbname = "CTT";

					// Create connection
					$conn = new mysqli($Servername, $Username, $Password, $Dbname);
					// Check connection
					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} else {

						$TotalRemarks = 'Issue(s): ' . $Issues . '\n\nRemark(s): ' . $Remarks; 

						$TotalWork = ' - ';

						if (empty($TotalWork)) {
							echo '<span style="color:Red;"><b>"Please check a checkbox";</b></span>';
							echo "</br>";
							echo "</br>";
						} else {

							$Sql = "INSERT INTO Log (Hostname,Work,Remarks) VALUES ('$Hostname','$TotalWork','$TotalRemarks' )";
							if ($conn->query($Sql) === TRUE) {

								//inserting of details from checklist into log table successful. 

								echo '<span style="color:Green;"><b>"New record created successfully"</b></span>';
								echo "</br>";
								echo "</br>";

								
								}
							 else {

								//inserting of details from checklist into log table unsuccessful.

								echo "Error: " . $sql . "<br>" . $conn->error;
								echo "</br>";
								echo "</br>";
							}
						}
					}

					$conn->close();
				}

				?>


			</div>
		</div>
	</div>

</body>

</html>