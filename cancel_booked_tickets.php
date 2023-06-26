<?php
	session_start();
?>
<html>
<head>
	<title>Cancel Booked Tickets</title>
	<style>
		input {
    		border: 1.5px solid #030337;
    		border-radius: 4px;
    		padding: 7px 30px;
		}

		input[type=submit] {
			background-color: #030337;
			color: white;
    		border-radius: 4px;
    		padding: 7px 45px;
    		margin: 0px 68px;
		}
	</style>
</head>
<link rel="stylesheet" type="text/css" href="css/loginpage.css" />
<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
<body>
<h1 id="title" class="text-center">
		<a href="home_page.php">
			<img src="images/tara.png" alt="TARA Tours & Travels" style="width: 100px;">
		</a>
		Tara Tours & Travels
	</h1>
	<div>
		<ul>
			<li><a href="customer_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
			<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
			<li><a href="home_page.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
			<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
			<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>
	<form action="cancel_booked_tickets_form_handler.php" method="post">
		<h2>CANCEL BOOKED TICKETS</h2>
		<?php
			if(isset($_GET['msg']) && $_GET['msg']=='failed')
			{
				echo "<strong style='color: red'>*Invalid PNR, please enter PNR again</strong>
					<br>
					<br>";
			}
		?>
		<table cellpadding="5" style="padding-left: 30px;">
			<tr>
				<td class="fix_table">Enter the PNR</td>
			</tr>
			<tr>
				<td class="fix_table"><input type="text" name="pnr" required></td>
			</tr>
		</table>
		<br>
		<input type="submit" value="Cancel Ticket" name="Cancel_Ticket">
	</form>
	<br><br><br><br><br><br><br><br><br><br>
	<!--Following data fields were empty!
		...
		ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		PREDEFINED LOCATION WHEN BOOKING TICKETS
	-->
	<?php include 'footer.php'; ?>
</body>
</html>
		</div>