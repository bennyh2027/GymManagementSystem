<html>
	<head>
		<title> Gym Management System </title>
		<style>
			
			.firstlayer{
				background-color: #ace600;
				width: 100%;
				height: 4%;
				padding-top: 0.8%;
				font-family: cursive;
				font-size: 15px;
				font-weight: bold;
				font-style: italic;
			}

			.upperlinks{
				margin-left: 28%; 
			}

			.secondlayer{
				display: grid; 
				grid-template-columns: 30% 70%;
				grid-gap: 2rem;
				padding-top: 3%;
				padding-bottom: 4%;
				background-color: seashell;
				height: auto;
				color: black;
			}

			.gymTitle{
				font-family: Courier;
				font-weight: bolder;
				font-style: italic;
				font-size: 40px;
				padding-left: 3rem;
			    background color: black;
			}

			.slogan{
				text-align: center;
				font-size: 15px; 
				font-family: cursive; 
				font-style: italic; 
				font-weight: bolder; 
				border-radius: 5px; 
				background-color: orange; 
				padding: 5px;  
			}

			.navlinks{
				width: 80%;
				text-align: center;
				color: white;
				font-family: courier;
				font-weight: bold;
				font-size: 16px;
			    background-color: black;
			    border-radius: 15px;
			    padding: 10px;
			}

			.mainlayer{
				font-size: 55px;
				color: white;
				font-family: garamond;
				font-weight: bold;
				position: absolute;
				top: 55%;
				left: 25%;
				max-width: 50%; 
			}
			
			a:hover{
				color: salmon; 
			}
			
			a{
				text-decoration: none !important;
				color: white;
			}	

			/*--------------Media Queries--------------
			css is styled for 1024px screens for the smallest laptops which are old*/

			@media (min-width: 1024px) {
			 	.navlinks{
					font-size: clamp(16px, 1.6vw, 24px); /*first value is min, preferred, and max. 
					clamp works by mult. screen width with the preferred value as a percentage, if the value 
					is less than min, then min value is used. if bigger than max val, the max value is used instead*/
				}

				.slogan{
					font-size: clamp(15px, 1.5vw, 25px);
				}

				.gymTitle{
					font-size: clamp(40px, 3.5vw, 48px);
				}
			}

			@media (min-width: 1250px) {
				.upperlinks{
					margin-left: 40%;
				}
			}

			@media (min-width: 1450px) {
				.upperlinks{
					margin-left: 52%;
				}

				.navlinks{
					max-width: 55rem; 
				}
			}

			@media (min-width: 1600px) {
				.mainlayer{
					left: calc(25% + 5px); /*allows the position to move more right as screen increases */
					font-size: clamp(55px, 3.5vw, 75px);
				}
			}

			@media (min-width: 2000px) {
				.gymTitle{
					font-size: clamp(70px, 2.5vw, 100px);
				}

				.navlinks{
					font-size: clamp(22px, 1.6vw, 28px);
					margin-left: calc(5% + 5rem);
					max-width: 65rem; 
				}

				.mainlayer{
					left: calc(20% + 10vw); /*allows the position to move more right as screen increases */
					font-size: clamp(65px, 3.3vw, 100px)
				}
			}

			@media (min-width: 3000px) {
            .gymTitle {
                font-size: clamp(100px, 3vw, 150px);
            }

            .navlinks {
                font-size: clamp(28px, 2vw, 36px);
                margin-left: calc(10% + 10rem);
                max-width: 80rem;
            }

            .mainlayer {
                left: calc(15% + 20vw); /*allows the position to move more right as screen increases */
                font-size: clamp(75px, 4vw, 125px);
            }

            .slogan {
                font-size: clamp(20px, 2vw, 30px);
            }

            .upperlinks {
                margin-left: 60%;
                font-size: clamp(20px, 2vw, 28px);
            }
        }
		</style>
	</head>
	<body>

		<div class="firstlayer">

			&emsp; <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/1024px-Facebook_Logo_%282019%29.png" height="20" width="20">
			&emsp; <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" height="18" width="20">
			&emsp; <img src="https://upload.wikimedia.org/wikipedia/commons/e/ef/Youtube_logo.png" height="18" width="25">
			&emsp; &emsp; (501) 223-1892

			<font size="4" face="Trebuchet MS" class = "upperLinks">
				&emsp; &emsp; NEW MEMBERS
				&emsp; &emsp; LOGIN 
				&emsp; &emsp; REGISTER
			</font>

		</div>

		<div class="secondlayer">
			<div class="gymTitle">FITCENTRAL</div>
			<div class="navlinks">
				<a href="SellMemberships.php">SELL MEMBERSHIPS</a> | <a href="MembershipStatus.php">MEMBERSHIP STATUS</a> | <a href="TotalSalesProfit.php">TOTAL SALES PROFIT</a>
			</div>
		</div>

		<div class = "slogan">FUEL THE FIRE</div>

		<img src="https://www.siroko.com/blog/c/app/uploads/2021/07/fitness_21858fa8-864f-404f-9bf5-c2a7d5f72ed7-1440x900.jpg" style="height: auto; width: 100%; 
		filter: brightness(40%);">

		<div class="mainlayer">

			<div align="center">
				<I>THE NEWEST GYM <br> IN THE CITY</I>
				<br>
				<font size="4" style="font-family: Baskerville;">
					“You’re going to have to let it hurt. Let it suck. The harder you work, <br> the better you will look. Your appearance isn’t parallel to how heavy you lift, it’s parallel to how hard you work.” <br> –Joe Mangianello
					<br><br><br>
					<I>#1 Gym Management System</I>
				</font>
				<br><br>
				<font size="5" style="background-color: #ace600; padding: 10px; border-radius: 0px; color: black;">FitCentral</font> 
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
