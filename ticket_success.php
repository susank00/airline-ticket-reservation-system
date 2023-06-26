<?php
	session_start();
?>
<html>
	<head>
		<title>
			Ticket Booking Successful
		</title>
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
    			margin: 0px 127px
			}
		</style>
	
	</head>
	<body>
	<h1 id="title" class="text-center">
      <a href="home_page.php">
        <img src="images/tara.png" alt="TARA Tours & Travels" style="width: 100px;">
      </a>
      Tara Tours & Travels
    </h1>
	<div class="menu"> 

<ul>
  <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
  </li>
  <li><a href="aboutus.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
  <li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>

  <li class="nav-item"><a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
</ul>
  </div>
		<h2>BOOKING SUCCESSFUL</h2>
		<h3>Your payment of Rs. <?php echo $_SESSION['total_amount']; ?> has been received.<br><br> Your PNR is <strong><?php echo $_SESSION['pnr'];?></strong>. Your tickets have been booked successfully.</h3>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		-->
		<div><br><br><br><br><br><br><br><br><br><br><br><br><?php include 'footer.php'; ?>
					</div>	
	</body>
</html>