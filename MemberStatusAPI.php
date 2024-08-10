<?php
	if (isset($_POST['call'])) //requires a post variable call
	{
		if ($_POST['call']=='checkStatus') //requires a post variable call
		{
			$ID=$_POST['MemberID']; 
			
			$conn= new mysqli ("localhost", "root", "", "fitcentral", "80") or die ("connect failed: %s/n".$conn -> error);
			
			$result = $conn->query("SELECT * FROM members WHERE ID = '$ID' LIMIT 1");
			
			if (mysqli_num_rows($result)==0)
			{
				echo "<font style='padding-left: 12px;'>Member does not exist</font>"; 
			}
			
			else 
			{
				$row = mysqli_fetch_array($result);
				$Name = $row['Name']; 
				$Age = $row['Age']; 
				$DOB = $row['DOB']; 
				$Phone = $row['PhoneNumber']; 
				$Email = $row['Email']; 
				$StartDate = $row['StartDate']; 
				$EndDate= $row['EndDate']; 
				$CurrentDate = date("Y-m-d");
				
				$DaysDifference = strtotime($CurrentDate) - strtotime($StartDate);
				$DaysDifference = floor($DaysDifference/86400);  #divides the difference of days which is in seconds by the number of seconds in a day to find out how many days have passed. Floor just meands rounding down the days, example: 2.5 days is equal to 2
				
				if ($DaysDifference >= 30)
				{
					echo "
						MemberID: <br><b>" . $ID . "</b> <br><br>
						Name: <br><b>" . $Name . "</b> <br><br>
						Age: <br><b>" . $Age . "</b> <br><br>
						D.O.B: <br><b>" . $DOB . "</b> <br><br>
						Phone: <br><b>" . $Phone . "</b> <br><br>
						Email: <br><b><font size='1'>" . $Email . "</font></b> <br><br>
						StartDate: <br><b>" . $StartDate . "</b> <br><br>
						EndDate: <br><b>" . $EndDate . "</b> <br><br>
						Status: <br><b><font color='firebrick'> Expired Membership </font></b>
					"; 
				}
				
				else 
				{
					echo "
						MemberID: <br><b>" . $ID . "</b> <br><br>
						Name: <br><b>" . $Name . "</b> <br><br>
						Age: <br><b>" . $Age . "</b> <br><br>
						D.O.B: <br><b>" . $DOB . "</b> <br><br>
						Phone: <br><b>" . $Phone . "</b> <br><br>
						Email: <br><b><font size='1'>" . $Email . "</font></b> <br><br>
						StartDate: <br><b>" . $StartDate . "</b> <br><br>
						EndDate: <br><b>" . $EndDate . "</b> <br><br>
						Status: <br><b><font color='green'> Active Membership </font></b>
					"; 
				}
			}
			
			mysqli_close($conn);
			
		}
	}
?>