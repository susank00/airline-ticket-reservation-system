<?php
	session_start();
	// if($_SESSION['login_user']==null)
	{
		// header('location:home_page.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Customer</title>
	<style>
		/* Custom CSS styles */
		/* Update the styles as per your design preferences */
		body {
			font-family: Arial, sans-serif;
		}
		.container {
			max-width: 900px;
			margin: 0 auto;
			padding: 20px;
		}
		.title {
			text-align: center;
			margin-bottom: 40px;
		}
	
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav>
  <table style="width: 100%;">
    <tr>
      <td>
        <a href="home_page.php">
          <img src="images/tara.png" alt="Logo" style="width:100px">
        </a>
      </td>
      <td style="text-align: center;">
        <h2>Tara Tours and Travels</h2>
      </td>
      <td style="text-align: right;">
        Phone: 9860168604<br>
        Address: BASUNDHARA
      </td>
    </tr>
  </table>
</nav>

		<div class="menu"> 

<ul>
  <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li><a href="customer_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
  <li class="nav-item"><a href="pnr.php"><i class="fa fa-print" aria-hidden="true"></hidden="true"></i> Print Ticket</a></li>
  </li>
  <li><a href="aboutus.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
  <li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>

  <li class="nav-item"><a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
</ul>
  </div>
				

</nav>
<div class="container">
<h2 class="title">Welcome <?php echo $_SESSION['login_user']; ?></h2>
<?php
 		require_once('Database Connection file/mysqli_connect.php');
 		$query = "SELECT count(*), frequent_flier_no, mileage FROM Frequent_Flier_Details WHERE customer_id=?";
 		$stmt = mysqli_prepare($dbc, $query);
 		mysqli_stmt_bind_param($stmt, "s", $_SESSION['login_user']);
 		mysqli_stmt_execute($stmt);
 		mysqli_stmt_bind_result($stmt, $cnt, $frequent_flier_no, $mileage);
 		mysqli_stmt_fetch($stmt);
 		if ($cnt == 1) {
 			echo "<h4>Frequent Flier No.: ".$frequent_flier_no."</h4>";
 			echo "<h4>Mileage: ".$mileage." points</h4>";
 		}
 		mysqli_stmt_close($stmt);
 		mysqli_close($dbc);
 	?>
<div class="row mt-4">
<div class="col-md-4">
<div class="card">
<div class="card-body">
<h5 class="card-title">Book Flight Tickets</h5>
<p class="card-text">Book your flight tickets now.</p>
<a href="book_tickets.php" class="card-link btn-custom">Book Now</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body">
<h5 class="card-title">View Booked Flight Tickets</h5>
<p class="card-text">View your booked flight tickets.</p>
<a href="view_booked_tickets.php" class="card-link btn-custom">View Tickets</a>
</div>
</div>
</div>
<div class="col-md-4">
<div class="card">
<div class="card-body">
<h5 class="card-title">Print Booked Ticket</h5>
<p class="card-text">Print your booked ticket.</p>
<a href="pnr.php" class="card-link btn-custom">Print Ticket</a>
</div>
</div>
</div>
</div>
<!-- Add more cards/buttons here -->
</div>
<!-- Add footer or additional content here -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1.1/css/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScv8AjopnFD+iEQ7wo/CG0xlczd+2Ff3w" crossorigin="anonymous"></script>
<h1>Make a Payment</h1>

	<form id="paymentForm" method="POST" action="https://uat.esewa.com.np/epay/main">
		<input type="hidden" name="amt" value="10.00">
		<input type="hidden" name="pdc" value="0">
		<input type="hidden" name="psc" value="0">
		<input type="hidden" name="txAmt" value="0">
		<input type="hidden" name="tAmt" value="10.00">
		<input type="hidden" name="pid" value="123456789">
		<input type="hidden" name="su" value="http://example.com/success">
		<input type="hidden" name="fu" value="http://example.com/failure">
		<input type="submit" value="Pay with eSewa">
	</form>

	<script>
		$(document).ready(function() {
			$('#paymentForm').submit(function(event) {
				event.preventDefault();

				// Perform additional form validation if necessary

				// Submit the form
				$(this).unbind('submit').submit();
			});
		});
	</script>
	<br>
	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>	<br>
	<?php include 'footer.php'; ?>
</body>
</html>