<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
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
    			border-radius: 100px;
    			padding: 7px 45px;
    			margin: 0px 0px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		
	</head>
	<body>
	<nav>
<nav class="navbar">
  <div class="logo">
    <a href="home_page.php">
    <img src="images/tara.png" alt="Logo" style="width:100px"></a>
  </div>
  <div class="brand"><h2>Tara Tours and Travels</h2></div>
  <div class="contact">Phone: 9860168604</div>
</nav>
  <div class="menu"> 

  <ul>
    <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
	<li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
    </li>
    <li><a href="aboutus.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
    <li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
  
    <li>
      <?php
      if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
        echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
      } else if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
        echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
      } else {
        echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
      }
      ?>
    </li>
  </ul>
    </div>
</nav>
	
		<form action="view_flights_form_handler.php" method="post">
			<h2>SEARCH FOR AVAILABLE FLIGHTS</h2>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Origin</td>
					<td class="fix_table">Enter the Destination</td>
				</tr>
				<tr>
					<td class="fix_table">
						<input list="origins" name="origin" placeholder="From" required>
  						<datalist id="origins">
  						  	<option value="bangalore">
  						</datalist>
						<!-- <input type="text" name="origin" placeholder="From" required> --></td>
					<td class="fix_table">
						<input list="destinations" name="destination" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="mumbai">
  						  	<option value="mysore">
  						  	<option value="mangalore">
  						  	<option value="chennai">
  						  	<option value="hyderabad">
  						</datalist>
						<!-- <input type="text" name="destination" placeholder="To" required> --></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Departure Date</td>
					<td class="fix_table">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="date" name="dep_date" min=
						<?php 
							$todays_date=date('Y-m-d'); 
							echo $todays_date;
						?> 
						max=
						<?php 
							$max_date=date_create(date('Y-m-d'));
							date_add($max_date,date_interval_create_from_date_string("90 days")); 
							echo date_format($max_date,"Y-m-d");
						?> required></td>
					<td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Class</td>
				</tr>
				<tr>
					<td class="fix_table">
						<select name="class">
  							<option value="economy">Economy</option>
  							<option value="business">Business</option>
  						</select>
  					</td>
				</tr>
			</table>
		</br>
			<input type="submit" value="Search for Available Flights" name="Search">
		</form>
		<!--Following data fields were empty!
			...
			ADD VIEW FLIGHT DETAILS AND VIEW JETS/ASSETS DETAILS for ADMIN
		--><br>
		<?php include 'footer.php'; ?>
	</body>
</html>