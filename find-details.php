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
</style>

<body>




	<!-- Blog entries -->
	<div class="w3-col l12 s12">
		<!-- Blog entry -->
		<div class="w3-card-4 w3-margin w3-white">

			</br>
			<div class="w3-container">
				<a href="index.php">return home </a>
				<br />
				<br />

				<h3><b>Find details</b></h3>


				<p>
				<form action="find-details.php" method="post">
					Hostname: <input type="text" name="ID"><br><br>
					<input type="submit">
					</br>
					</br>
				</form>

				<?php
				$name = $_POST['ID'];

				echo "</br>";

				if (empty($name)) {
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

						$sql = "SELECT * FROM Log WHERE Hostname = '$name'	 ";
						$result = $conn->query($sql);

						echo "<br/>";
						echo "<br/>";

						echo "<b>Log</b>";

						echo "<br/>";

						echo "<table>";

						if ($result->num_rows > 0) {

							// output data of each row
							while ($row = $result->fetch_assoc()) {

								echo "<tr>";
								echo "<td> --------- </td>";
								echo "<td> </td>";
								echo "</tr>";

								echo "<tr>";
								echo "<td> <b>Date </b></td>";
								echo "<td>" . $row['Date'] . "</td>";
								echo "</tr>";

								echo "<tr>";
								echo "<td> <b>Work </b></td>";
								echo "<td>" . nl2br($row['Work']) . "</td>";
								echo "</tr>";


								echo "<tr>";
								echo "<td> <b>Remarks </b> </td>";
								echo "<td>" . $row['Remarks'] . "</td>";
								echo "</tr>";
							}

							echo "</table>";
						} else {
							echo "0 results";
						}

						$conn->close();
					}
				}
				?></p>

			</div>
		</div>
		<hr>



</body>

</html>