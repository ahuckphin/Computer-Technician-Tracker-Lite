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
	<div class="w3-col l12	 s12">
		<!-- Blog entry -->
		<div class="w3-card-4 w3-margin w3-white">

			<br />
			<div class="w3-container">
				<a href="index.php">return home </a>
				<br />
				<br />
				<h3><b>Inspector-Checklist</b></h3>

				<form action="inspector-checklist.php" method="post" onkeydown="return event.key != 'Enter';">

					<table>
						<tr>
							<td>Hostname</td>
							<td><input type="text" name="Hostname"></td>
						</tr>
						<tr>
							<td>Work</td>
							<td>
								UEFI BIOS
								<br />
								<input type="checkbox" name="uefiwork[]" value="Disabled legacy boot. ">
								<label for="uefiwork[]">Disabled legacy boot. </label><br>
								<input type="checkbox" name="uefiwork[]" value="Enabled secure boot. ">
								<label for="uefiwork[]">Enabled secure boot. </label><br>
								<input type="checkbox" name="uefiwork[]" value="Disabled fast boot. ">
								<label for="uefiwork[]">Disabled fast boot. </label><br>
								<input type="checkbox" name="uefiwork[]" value="Disabled RAID. ">
								<label for="uefiwork[]">Disabled RAID. </label><br>
								<input type="checkbox" name="uefiwork[]" value="Disabled FN lock. ">
								<label for="uefiwork[]">Disabled FN lock. </label><br>
								<input type="checkbox" name="uefiwork[]" value="Boot menu showing correctly. ">
								<label for="uefiwork[]">Boot menu showing correctly. </label><br>
								<br />
								Windows 10
								<br />
								<input type="checkbox" name="windowswork[]" value="Installed Windows 10 21H2. ">
								<label for="windowswork[]"> Installed Windows 10 21H2. </label><br>
								<input type="checkbox" name="windowswork[]" value="Windows hostname set. ">
								<label for="windowswork[]"> Windows hostname set. </label><br>
								<br />
								Physical Features
								<br />
								<input type="checkbox" name="physicalwork[]" value=" DC power working. ">
								<label for="physicalwork[]"> DC power working. </label><br>
								<input type="checkbox" name="physicalwork[]" value="Battery working. ">
								<label for="physicalwork[]"> Battery working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="USB-A port(s) working. ">
								<label for="physicalwork[]"> USB-A port(s) working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="SD card slot working. ">
								<label for="physicalwork[]">SD card slot working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="Camera working. ">
								<label for="physicalwork[]">Camera working. </label><br>
								<input type="checkbox" name="physicalwork[]" value="Microphone working. ">
								<label for="physicalwork[]">Microphone working. </label><br>
								<input type="checkbox" name="physicalwork[]" value="Speakers working. ">
								<label for="physicalwork[]">Speakers working. </label><br>
								<input type="checkbox" name="physicalwork[]" value="3.5mm jack working. ">
								<label for="physicalwork[]">3.5mm jack working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="Video out port(s) working. ">
								<label for="physicalwork[]">Video out port(s) working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="Wi-Fi working. ">
								<label for="physicalwork[]">Wi-Fi working. </label><br>
								<input type="checkbox" name="physicalwork[]" value="Ethernet working. ">
								<label for="physicalwork[]">Ethernet working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="Trackpad + gestures working. ">
								<label for="physicalwork[]">Trackpad working. </label><br>
								<input type="checkbox" name="physicalwork[]" value="Keyboard working. ">
								<label for="physicalwork[]">Keyboard working. </label><br>
								<br />
								<input type="checkbox" name="physicalwork[]" value="Screen working. ">
								<label for="physicalwork[]">Screen working. </label><br>
								<br />
								Ubuntu
								<br />
								<input type="checkbox" name="ubuntuwork[]" value="Installed Linux Mint 20.03 ">
								<label for="ubuntuwork[]">Installed Linux Mint 20.03 </label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Linux Mint Hostname set. ">
								<label for="ubuntuwork[]">Linux Mint Hostname set.</label><br>


							</td>
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
				$AUefiWork = $_POST['uefiwork'];
				$AWindowsWork = $_POST['windowswork'];
				$APhysicalWork = $_POST['physicalwork'];
				$AUbuntuWork = $_POST['ubuntuwork'];
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


						foreach ($_POST["uefiwork"] as $AUefiWork) {
							$TotalUefiWork = $TotalUefiWork . $AUefiWork;
						}
						foreach ($_POST["windowswork"] as $AWindowsWork) {
							$TotalWindowsWork = $TotalWindowsWork . $AWindowsWork;
						}
						foreach ($_POST["physicalwork"] as $APhyscialWork) {
							$TotalPhysicalWork = $TotalPhysicalWork . $APhyscialWork;
						}
						foreach ($_POST["ubuntuwork"] as $AUbuntuWork) {
							$TotalUbuntuWork = $TotalUbuntuWork . $AUbuntuWork;
						}



						$TotalWork = 'UEFI attribute(s): ' . $TotalUefiWork . '\n\nWindows attribute(s): ' .   $TotalWindowsWork . '\n\nPhysical attribute(s): ' . $TotalPhysicalWork . '\n\nUbuntu attribute(s): ' .  $TotalUbuntuWork;

						if (empty($TotalWork)) {
							echo '<span style="color:Red;"><b>"Please check a checkbox";</b></span>';
							echo "</br>";
							echo "</br>";
						} else {

							$InheritedWork = "Installed software in Windows from Microsoft Store: \nArduino \nBlender \nEV3 Classroom \nMakeCode \nOBS Studio \nScratch \nVisual Studio Code \nVLC \nZoom \n\nInstalled software in Windows from executables: \nAnaconda \nAndroid Studio \nCisco Webex \nEV3 Lab \nDaVinci Resolve \nGDevelop \nGIMP \nJava \nLibreOffice \nProcessing \nSynfig \nTeams \n\nInstalled software in Ubuntu: \nArduino \nSkype \nMicorosft \nTeams \nMicrosoft \nVisual Studio Code \nScratch \nBlender \nZoom \nWebex";

							$TotalTotalWork = $TotalWork . '\n\n' . $InheritedWork;

							$Sql = "INSERT INTO Log (Hostname,Work,Remarks) VALUES ('$Hostname','$TotalTotalWork','$Remarks' )";
							if ($conn->query($Sql) === TRUE) {

								//inserting of details from checklist into log table successful. 

								echo '<span style="color:Green;"><b>"New record created successfully"</b></span>';
								echo "</br>";
								echo "</br>";
							} else {

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