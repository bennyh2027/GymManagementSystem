<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
		</script>
		
		<title> Gym Management System </title>
		<style>
			
			body{
				background-image: url("https://www.crunch.com/wp-content/uploads/2023/02/CR011SLTH_Feb-20_Hub-Images_02.21.235.jpg");
				background-repeat: no-repeat;
				background-size: cover;
				margin: 0;  
				padding: 0; 
			}

			.card{
				background-color: black;
				height: 10%; 
				width: 100%;
				opacity: 0.8; 
				z-index: 1;
			}

			.headertext{
				color: white;
				font-size: clamp(45px, 1.5vw, 55px);
				font-family: georgia;
				font-weight: bolder;
				position: absolute;
				z-index: 2;
				padding: 5px; 
			}

			.headertext a{
				transition: 0.5s; 
				font-size: 16px; 
			}

			.headertext a:hover {
				background-color: orange;
				padding: 5px;
				border-radius: 10px;
				border: 1px dotted black;
				transition: 0.5s; 
			}

			.card2{
				height: 100%;
				width: 100%;
				background-color: rgba(192, 192, 192, 0.35); 
			}

			#form{
				color: white;
				height: 48%;
				width: 40%;
				position: absolute; 
				margin-left: 3rem;
			}

			#MemberName, #MemberID{
				width: 85%;
				height: 8%;
				border-radius: 6px;
				color: black;
				font-weight: bolder;
				font-family: Fantasy;
				font-size: clamp(10px, 1vw, 40px);
			}

			#SubmitMembership{
				font-size: 15px; 
				font-weight: bolder;
				font-family: cursive;
				background-color: tomato;
				padding: 5px;
				color: black;
				margin-left: 65%;
				width: 20%;
			}

			.phone{
				position: absolute; 
				left: 40%; 
			}

			.phone img{
				max-width: 100%; 
			}

			#phonecontent{
				background-color: black;
				width: 26%;
				height: 64%;
				position: absolute;
				top: 20.5%;
				left: 36%;
				font-size: clamp(8px, 0.75vw, 12px);
				padding-top: 5px;
				padding-left: 10px;
				font-family: courier;
				border: 1px dotted black;
				color: white;
			}

			a{
				text-decoration: none !important;
				color: white;
			}	
			/*--------Media Queries starting from 1050 since website is first created for 1024px screens*/
			@media (min-width: 1050px) {
				.headertext a{
					font-size: clamp(16px, 1.5vw, 40px); 
					margin-left: calc(0vw + 3vw); 
				}

				#phonecontent{
					width: calc(26% + 3.5px); 
					height: calc(64% + 3.1px);
				}
			}

			@media (min-width: 1321px) {
				#phonecontent{
					width: calc(26% + 7px); 
					font-size: clamp(8px, 0.75vw, 12px);
				}
			}

			@media (min-width: 1681px) { /*started at 1681 since no screen widths are of this arbirary size */
				#phonecontent{
					width: calc(26.5% + 7px);
					height: calc(65% + 6px);
					font-size: clamp(12px, 0.75vw, 20px);
				}
			}

			@media (min-width: 2001px) {
				#form{
					font-size: clamp(23px, 1.2vw, 30px);
				}

				#SubmitMembership{
					font-size: clamp(23px, 1.2vw, 30px);
				}

				.headertext a, .headertext{ 
					font-size: clamp(35px, 1.5vw, 50px);
					margin-left: calc(0vw + 7vw); 
					padding-top: 2rem;
				}
			}

			@media (min-width: 3401px) { /*started at 1681 since no screen widths are of this arbirary size */
				#phonecontent{
					width: calc(27% + 7px);
				}
			}

		</style>
	</head>
	<body>

		<div class="card">
			<div class="headertext"> 
				FIT<font style="color: coral;">CENTRAL</font>
				&emsp; &emsp; 
				<a href="GymIndex.php">Home</a> &emsp; 
				<a href="SellMemberships.php">Sell Memberships</a> &emsp; 
				<a href="TotalSalesProfit.php">Total Sales Profit</a>
			</div>
		</div>

		<div class="card2">

			<br><br>
			<div id="form">
				<font style="font-size: 40px; font-weight: bolder; font-style: italic; font-family: Trebuchet MS;">Enter <font color="skyblue">Member</font> Information Below:</font>
				<br><br>

				MemberID: <br>
				<input type="number" id="MemberID" required><br><br>

				<button id = "SubmitMembership" type = "button">Enter</button>
			</div>

			<div class="phone">
				<img src="https://freepngimg.com/save/68671-android-white-iphone-telephone-free-transparent-image-hq/1258x944" id = "phonePic">
				<div id="phonecontent"></div>
			</div>
		</div>

	</body>
</html>

<script> 
	//API call to check status
	$("#SubmitMembership").click(function()
	{
		$('#phonecontent').html(''); 
		$.ajax('MemberStatusAPI.php', 
		{
			type: 'POST',  
			data: { call: 'checkStatus', MemberID: MemberID.value},
			success: function (data, status, xhr) 
			{
				$('#phonecontent').html(data); 
			},
			error: function (jqXhr, textStatus, errorMessage) 
			{
				$('#phonecontent').append('Error' + errorMessage); 
			}
		});
   
	});
	
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