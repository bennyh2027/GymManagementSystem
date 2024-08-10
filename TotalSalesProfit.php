<html>
	<head>
		<title> Gym Management System </title>
		<style>
			
			body{
				margin: 0;
				padding: 0;
			}

			.card{
				background-color: black;
				width: 100%;
				height: 12%;
				border-bottom: 1px dashed white;
				position: relative;
				z-index: 1; 
			}

			.headertext{
				color: white;
				font-size: 60px;
				font-family: garamond;
				font-weight: bolder;
				position: absolute;
				z-index: 2;
				padding: 20px;
				top: 0;
				left: 0;
			}

			.headertext a{
				font-family: georgia; 
				font-size: 13.5px; 
				color: white;
			}

			.headertext a:hover{
				color: black;
				background-color: white;
				padding: 10px;
				border-radius: 5px;
			}

			.laptopcontent{
				background-color: black;
				height: 100%;
				width: 100%;
				overflow: scroll;
				color: white;
				display: grid;
				grid-template-columns: 25% 25% 25% 25%; 
				position: relative;
				padding-top: 30px;
			}

			::-webkit-scrollbar{
			  	display: none;
			}

			.laptopcontent>div{
				font-family: Trebuchet MS, sans-serif;
				text-align: center;
				width: 15vw; 
				height: 30vh; 
				color: black;
				margin-left: auto;
				margin-right: auto;
				background-color: white;
				border-radius: 20px;
				padding: 10px 5px 5px 10px; 
				font-size: 13px;
				box-shadow: 10px 8px 0px 0px orange; 
			}
			
			.laptopcontent>div:hover{
				opacity: 0.7;
			}

			a{
				text-decoration: none !important;
				color: white;
			}

			@media(min-width: 1281px) {
				.headertext a{
					font-size: clamp(13.5px, 1.1vw, 20px);
					margin-left: calc(0% + 20px);
				}
			}

			@media(min-width: 1500px) {
				.headertext a{
					font-size: clamp(17px, 1.1vw, 25px);
					margin-left: calc(0% + 4rem);
				}

				.laptopcontent>div{
					font-size: clamp(13px, 1vw, 40px);
				}
			}

			@media(min-width: 2000px) {
				.headertext a{
					font-size: clamp(25px, 1.1vw, 35px);
					margin-left: calc(0% + 10rem);
				}
			}

			@media(min-width: 3000px) {
				.laptopcontent>div{
					height: calc(30vh + 5rem);
				}
			}

		</style>

	</head>

	<body>

		<div class="card"></div>

		<div class="headertext"> 
			FIT<font style="color: orange;">CENTRAL</font>
			&emsp; <a href="GymIndex.php">Home</a> 
			&emsp; <a href="SellMemberships.php">Sell Memberships</a>
			&emsp; <a href="MembershipStatus.php">Membership Status</a>
		</div>

		<div class="laptopcontent">
			<?php
			
				$conn= new mysqli ("localhost", "root", "", "fitcentral", "80") or die ("connect failed: %s/n".$conn -> error);
				
				$result = $conn->query("Select * from purchases ORDER BY PurchaseID"); 
				
				while ($row = mysqli_fetch_array($result))
				{
					echo "<div>
						<img src='https://i.imgflip.com/6yvpkj.jpg' style='height: 40%; width: 65%;'>
						<br><b>PurchaseID: </b>" . $row['PurchaseID'] . 
						"<br><b>MemberID: </b>" . $row['MemberID'] . 
						"<br><b>Purchase: </b>" . $row['Purchase'] . 
						"<br><b>MemberName: </b>" . $row['MemberName'] . 
						"<br><b>Amount: </b>" . $row['Amount'] . "<br>
						</div>"; 
				}
			?>	

		<div>
			<b>Total Sales Profit: 
			
			<?php
				$result = $conn->query("Select Sum(Amount) AS TotalProfit FROM purchases"); 
				$row = mysqli_fetch_array($result); 
				$TotalProfit = $row['TotalProfit']; 
				
				echo "<br><br><i><font color='lawngreen' face='arial black'>$" . $TotalProfit. "</font>"; 
				
				mysqli_close($conn);
			?>
			
		</div>

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
