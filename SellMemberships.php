<html>
	<head>
		<title> Gym Management System </title>
		<style>
			
			body{
				background-image: url(https://media-cldnry.s-nbcnews.com/image/upload/newscms/2017_36/2144546/170905-working-out-group-ac-512p.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				background-position: center;
			}
			
			.card{
				opacity: 0.65;
				height: 100%;
				width: 100%;
				background-color: black;
				margin-left: auto;
				margin-right: auto;
				color: white;
			}

			.links{
				font-family: Georgia;
				font-size: 20px;
				color: white;
			}

			.card2{ 
				font-family: FreeMono, monospace; 
				font-weight: bold;
				height: 60%;
				max-width: 30rem;
				position: absolute;
				top: 30%;
				left: calc(42% + 5rem);
				color: white;
			}

			#Name, #Age, #Birth, #Phone, #Email{
				width: 90%;
				height: 2rem;
				border-radius: 6px;
				color: black;
				font-weight: bold;
				font-family: Tahoma;
			}

			#SubmitMembership{
				font-size: 15px; 
				font-weight: bolder;
				font-family: cursive;
				background-color: tomato;
				padding: 5px;
				color: black;
				margin-left: 70%;
				width: 20%;
				border: 2px solid white;
			}

			a:hover{
				color: black;
				padding: 10px;
				border-radius: 5px;
				background-color: #fccb06;
				font-weight: bolder;
				transition: 0.5s; 
			}

			a{
				text-decoration: none !important;
				color: white;
				transition: 0.5s; 
			}	

			/*------------------MEDIA QUERIES------------------*/
			@media (min-width: 1400px) {
				.card2{
					left: calc(42% + 10rem);
					font-size: clamp(15px, 1vw, 20px);
					max-width: 40rem; 
				}
			}

			@media (min-width: 2000px) {
				.card2{
					left: calc(42% + 13rem);
					font-size: clamp(18px, 1vw, 24px);
					max-width: 50%; 
				}

				#Name, #Age, #Birth, #Phone, #Email{
					height: 2.5rem; 
				}

				.links{
					font-size: clamp(23px, 1.2vw, 50px);
				}

				#submitMembership{
					font-size: clamp(18px, 1vw, 24px);
				}
			}

			@media (min-width: 3000px) {
				.card2{
					left: calc(42% + 16rem);
					font-size: clamp(20px, 1vw, 28px);
					max-width: 50%; 
				}

				#Name, #Age, #Birth, #Phone, #Email{
					height: 3.5rem; 
				}

				.links{
					font-size: clamp(26px, 1.2vw, 53px);
				}

				#submitMembership{
					font-size: clamp(21px, 1vw, 27px);
				}
			}

		</style>
	</head>
	<body>

		<div class="card">

			<div class="links">

				<br>
				<center><a href="GymIndex.php">Home</a> &emsp; &emsp; &emsp; &emsp; &emsp; <a href="MembershipStatus.php">Membership Status</a> &emsp; &emsp; &emsp; &emsp; &emsp; <a href="TotalSalesProfit.php">Total Sales Profit</a></center>

			</div>

		</div>

		<div class="card2">
				<h2><i>JOIN THE BEST GYM TODAY</i></h2>
				<h4><i>*Enter customer information below to purchase/renew their membership*</i></h4>
				<br>

				<form action="" method="POST" id="form">
					
					<i>
						Name: <br>
						<input type="text" id="Name" name="Name" required><br><br>
						
						Age: <br>
						<input type="number" id="Age" name="Age" required><br><br>
	 
						Date of Birth: <br>
						<input type="date" id="Birth" name="DOB" required><br><br>

						Phone Number: <br>
						<input type="number" id="Phone" name="Phone" required><br><br>

						Email: <br>
						<input type="text" id="Email" name="Email" required><br><br>

						<input type="submit" name="SubmitButton" id="SubmitMembership" value="Submit">
					</i>
				
				</form>
				
		</div>

	</body>
	<script>
		document.addEventListener('contextmenu', function(stopRightClick) {
			stopRightClick.preventDefault();
		});

		// stops different ctrl key combinations to inspect 
		document.addEventListener('keydown', function(Keys) {
			if (Keys.ctrlKey && (Keys.key === 'u' || Keys.key === 'U' || Keys.key === 's' || Keys.key === 'S' || Keys.key === 'a' || Keys.key === 'A' || Keys.key === 'p' || Keys.key === 'P')) {
				Keys.preventDefault();
			}

			// Blocks F12 (Developer Tools)
			if (e.key === 'F12') {
				e.preventDefault();
			}

			// Blocks Ctrl+Shift+I (Inspect Element)
			if (e.ctrlKey && e.shiftKey && e.key === 'I') {
				e.preventDefault();
			}

			// Blocks Ctrl+Shift+C (Inspect Element)
			if (e.ctrlKey && e.shiftKey && e.key === 'C') {
				e.preventDefault();
			}

			// Blocks Ctrl+Shift+J (Open Console)
			if (e.ctrlKey && e.shiftKey && e.key === 'J') {
				e.preventDefault();
			}
		});
				// this code is so that a user cant right click or press ctrl u to view the code casually. 
				// Prevents someone from being able to look and take code
	</script>
</html>
<?php
	if (isset($_POST['SubmitButton']))	
	{
		date_default_timezone_set('America/Belize');
		
		$Name=$_POST['Name']; 
		$Age=$_POST['Age']; 
		$DateofBirth=$_POST['DOB']; 
		$Phone=$_POST['Phone']; 
		$Email=$_POST['Email']; #stores post variables in a variable
		$StartDate = date("Y-m-d"); #this is another way to get the current timestamp without doing it in phpmyadmin
		$EndDate = date("Y-m-d", strtotime("+1 month", strtotime($StartDate))); #converts the date to an actual time and then adds a month to it for the monthly membership
		
		$conn= new mysqli ("localhost", "root", "", "fitcentral", "80") or die ("connect failed: %s/n".$conn -> error);
		
		$result = $conn->query("SELECT ID FROM members WHERE Email = '$Email' LIMIT 1");
		
		if (mysqli_num_rows($result)==1)
		{	
			$sql= "UPDATE members SET Age = '$Age', DOB = '$DateofBirth', PhoneNumber = '$Phone', StartDate = '$StartDate', EndDate='$EndDate' WHERE Email = '$Email'";	
			$conn->query($sql); 
			
			$row = mysqli_fetch_array($result); 
			
			$sql= "INSERT INTO purchases (MemberID, EmployeeID, Purchase, MemberName, Amount)
					VALUES ('".$row['ID'] ."', '1', 'Membership Renewal', '". $Name ."', '120')";
					
			$conn->query($sql); 
			
			echo "<script>alert('Membership Updated');</script>"; 	
		}
		
		else
		{	
			
			$sql= "INSERT INTO members (Name, Age, DOB, PhoneNumber, Email, StartDate, EndDate)
					VALUES ('".$Name ."', '".$Age."', '".$DateofBirth ."', '".$Phone ."' , '".$Email ."', '".$StartDate ."', '".$EndDate ."')";
					
			if ($conn->query($sql) === TRUE)
			{
				$ID = mysqli_insert_id($conn);
				echo "<script>alert('NEW MEMBERSHIP CREATED!! \\nMemberID: " . $ID . "');</script>";
				
				$sql= "INSERT INTO purchases (MemberID, EmployeeID, Purchase, MemberName, Amount)
					VALUES ('".$ID ."', '1', 'Membership Created', '". $Name ."', '120')";
					
				$conn->query($sql); 
			}
		
		}
		
		mysqli_close($conn);
	}
		
?>