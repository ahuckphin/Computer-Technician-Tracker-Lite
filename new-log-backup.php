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
				<h3><b>New log - Backup</b></h3>

				<form action="new-log-backup.php" method="post" onkeydown="return event.key != 'Enter';">

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
								<input type="checkbox" name="windowswork[]" value="Installed Windows 10 21H1. ">
								<label for="windowswork[]"> Installed Windows 10 21H1. </label><br>
								<input type="checkbox" name="windowswork[]" value="Up to date. ">
								<label for="windowswork[]">Up to date.</label><br>
								<input type="checkbox" name="windowswork[]" value="Device Manager cleared. ">
								<label for="windowswork[]">Device Manager cleared.</label><br>
								<input type="checkbox" name="windowswork[]" value="Admin password set. ">
								<label for="windowswork[]"></label>Admin password set.<br>
								<input type="checkbox" name="windowswork[]" value=" Windows hostname set. ">
								<label for="windowswork[]"> Windows hostname set. </label><br>
								<input type="checkbox" name="windowswork[]" value="Admin Bluetooth turned off. ">
								<label for="windowswork[]">Admin Bluetooth turned off.</label><br>
								<input type="checkbox" name="windowswork[]" value="Admin green tick shield. ">
								<label for="windowswork[]">Admin green tick shield.</label><br>
								<input type="checkbox" name="windowswork[]" value="Admin unpin groups from start menu. ">
								<label for="windowswork[]">Admin unpin groups from start menu.</label><br>
								<input type="checkbox" name="windowswork[]" value="Admin uninstall bloatware. ">
								<label for="windowswork[]">Admin uninstall bloatware.</label><br>
								<input type="checkbox" name="windowswork[]" value="Admin dismissed Edge sign in message. ">
								<label for="windowswork[]">Admin dismissed Edge sign in message.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest account created. ">
								<label for="windowswork[]">Guest account created.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed EXE App Inventor. ">
								<label for="windowswork[]">Installed EXE App Inventor.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed EXE EV3 Lab. ">
								<label for="windowswork[]">Installed EXE EV3 Lab.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed EXE Java. ">
								<label for="windowswork[]">Installed EXE Java.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed EXE LibreOffice. ">
								<label for="windowswork[]">Installed EXE LibreOffice.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed EXE SketchUp Make 2017. ">
								<label for="windowswork[]">Installed EXE SketchUp Make 2017.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed EXE Visual Studio Code. ">
								<label for="windowswork[]">Installed EXE Visual Studio Code.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Installed EXE Teams. ">
								<label for="ubuntuwork[]">Installed EXE Teams.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Installed EXE Webex. ">
								<label for="ubuntuwork[]">Installed EXE Webex.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Installed EXE Zoom. ">
								<label for="ubuntuwork[]">Installed EXE Zoom.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed UWP Arduino. ">
								<label for="windowswork[]">Installed UWP Arduino.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed UWP Blender. ">
								<label for="windowswork[]">Installed UWP Blender.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed UWP EV3 Classroom. ">
								<label for="windowswork[]">Installed UWP EV3 Classroom.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed UWP MakeCode. ">
								<label for="windowswork[]">Installed UWP MakeCode.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed UWP Python. ">
								<label for="windowswork[]">Installed UWP Python.</label><br>
								<input type="checkbox" name="windowswork[]" value="Installed UWP Scratch. ">
								<label for="windowswork[]">Installed UWP Scratch.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Installed UWP Skype. ">
								<label for="ubuntuwork[]">Installed UWP Skype.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested App  Inventor. ">
								<label for="windowswork[]">Tested App Inventor.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested EV3 Lab. ">
								<label for="windowswork[]">Tested EV3 Lab.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested LibreOffice. ">
								<label for="windowswork[]">Tested LibreOffice.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested SketchUp Make 2017. ">
								<label for="windowswork[]">Tested SketchUp Make 2017.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested Visual Studio Code. ">
								<label for="windowswork[]">Tested Visual Studio Code.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested Arduino. ">
								<label for="windowswork[]">Tested Arduino.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested Blender. ">
								<label for="windowswork[]">Tested Blender.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested EV3 Classroom. ">
								<label for="windowswork[]">Tested EV3 Classroom.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested MakeCode. ">
								<label for="windowswork[]">Tested MakeCode.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested Python. ">
								<label for="windowswork[]">Tested Python.</label><br>
								<input type="checkbox" name="windowswork[]" value="Tested Scratch. ">
								<label for="windowswork[]">Tested Scratch.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Skype. ">
								<label for="ubuntuwork[]">Tested Skype.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Teams. ">
								<label for="ubuntuwork[]">Tested Teams.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Webex. ">
								<label for="ubuntuwork[]">Tested Webex.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Zoom. ">
								<label for="ubuntuwork[]">Tested Zoom.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest applied PSC wallpaper. ">
								<label for="windowswork[]">Applied PSC wallpaper.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest turned off Bluetooth. ">
								<label for="windowswork[]">Guest turned off Bluetooth.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest green tick shield. ">
								<label for="windowswork[]">Guest green tick shield. </label><br>
								<input type="checkbox" name="windowswork[]" value="Guest unpin groups from start menu. ">
								<label for="windowswork[]">Guest unpin groups from start menu.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest uninstall bloatware. ">
								<label for="windowswork[]">Guest uninstall bloatware.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest dismissed Edge sign in message. ">
								<label for="windowswork[]">Guest dismissed Edge sign in message.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest added Chinese keyboard. ">
								<label for="windowswork[]">Guest added Chinese keyboard.</label><br>
								<input type="checkbox" name="windowswork[]" value="Guest disabled Java update. ">
								<label for="windowswork[]">Guest disabled Java update.</label><br>
								<input type="checkbox" name="windowswork[]" value="Deleted folders from driver installation. ">
								<label for="windowswork[]">Deleted folders from driver installation.</label><br>
								<input type="checkbox" name="windowswork[]" value="Disk Clean-up ">
								<label for="windowswork[]">Disk Clean-up</label><br>
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
								<br/>
								<input type="checkbox" name="physicalwork[]" value="Screen working. ">
								<label for="physicalwork[]">Screen working. </label><br>
								<br />
								Ubuntu
								<br />
								<input type="checkbox" name="ubuntuwork[]" value="Installed Ubuntu 20.04.3. ">
								<label for="ubuntuwork[]">Installed Ubuntu 20.04.3 </label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Run setup script file. - Installed the openssh server, which then automatically enables the sshd service. 
																											Installed tmux. 
																											Updated the repositories and upgraded all available software. 
																											Created rule in the ufw firewall to allow ssh connections. 
																											Disabled screenlock password request when screen goes to sleep. 
																											Disabled screenlock password request when Ubuntu is suspended. 
																											Disabled password authentication logins for ssh. 
																											Installed the Arduino IDE, Skype, Micorosft Teams, Microsoft Visual Studio Code from the Ubuntu Snap repositories. 
																											Added the active user to the dialout group. 
																											Installed Python Idle IDE, Scratch, and Blender. 
																											Downloaded MIT AppInventor, Zoom and Webex deb installer from source to /tmp folder, then installs. 
																											Set Windows 10 as the primary bootable operating system. 
																											Make Linux use local time. 
																											Set PSC wallpaper. 
																											Disabled Teams and Skype from launching on startup. 
																											Replaced #DefaultTimeoutStopSec=90s with DefaultTimeoutStopSec=5s in system.conf.">
								<label for="ubuntuwork[]">Run setup script file.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Arduino. ">
								<label for="ubuntuwork[]">Tested Arduino.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Blender. ">
								<label for="ubuntuwork[]">Tested Blender.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Python. ">
								<label for="ubuntuwork[]">Tested Python.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Scratch. ">
								<label for="ubuntuwork[]">Tested Scratch.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Visual Studio Code. ">
								<label for="ubuntuwork[]">Tested Visual Studio Code.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Skype. ">
								<label for="ubuntuwork[]">Tested Skype.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Teams. ">
								<label for="ubuntuwork[]">Tested Teams.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Webex. ">
								<label for="ubuntuwork[]">Tested Webex.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Tested Zoom. ">
								<label for="ubuntuwork[]">Tested Zoom.</label><br>
								<input type="checkbox" name="ubuntuwork[]" value="Ubuntu Hostname set. ">
								<label for="ubuntuwork[]">Ubuntu Hostname set. </label><br>

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

							$Sql = "INSERT INTO Log (Hostname,Work,Remarks) VALUES ('$Hostname','$TotalWork','$Remarks' )";
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
