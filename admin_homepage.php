<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome Administrator</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href=" css/home_page.css"/>
</head>
<body>
<nav>
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
        Address: Enter your address here
      </td>
    </tr>
  </table>
</nav>
  <div class="menu"> 

  <ul>
  <li><a class="nav-link" href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
  <li class="nav-item">
				<a class="nav-link" href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a>
			</li>

    <li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
	<li class="nav-item">
				<a class="nav-link" href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
			</li>
    </li>
  </ul>
    </div>
</nav>
    </div>


	<div class="container mt-5">
		<h2 class="text-center mb-4">Welcome Administrator!</h2>
		<div class="row">
			<div class="col-md-6">
				<!-- Option 1 -->
				<div class="card mb-3">
					<div class="card-body">
						<a href="admin_view_booked_tickets.php" class="card-link">
							<i class="fa fa-plane fa-3x mb-3" aria-hidden="true"></i>
							<h5 class="card-title">View List of Booked Tickets for a Flight</h5>
						</a>
					</div>
				</div>
				<!-- Option 2 -->
				<div class="card mb-3">
					<div class="card-body">
						<a href="add_flight_details.php" class="card-link">
							<i class="fa fa-plane fa-3x mb-3" aria-hidden="true"></i>
							<h5 class="card-title">Add Flight Schedule Details</h5>
						</a>
					</div>
				</div>
				<!-- Option 3 -->
				<div class="card mb-3">
					<div class="card-body">
						<a href="delete_flight_details.php" class="card-link">
							<i class="fa fa-plane fa-3x mb-3" aria-hidden="true"></i>
							<h5 class="card-title">Delete Flight Schedule Details</h5>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Option 4 -->
				<div class="card mb-3">
					<div class="card-body">
						<a href="add_jet_details.php" class="card-link">
							<i class="fa fa-plane fa-3x mb-3" aria-hidden="true"></i>
							<h5 class="card-title">Add Aircrafts Details</h5>
						</a>
					</div>
				</div>
				<!-- Option 5 -->
				<div class="card mb-3">
					<div class="card-body">
						<a href="activate_jet_details.php" class="card-link">
							<i class="fa fa-plane fa-3x mb-3" aria-hidden="true"></i>
							<h5 class="card-title">Activate Aircraft</h5>
						</a>
					</div>
				</div>
				<!-- Option 6 -->
				<div class="card mb-3">
					<div class="card-body">
						<a href="deactivate_jet_details.php" class="card-link">
							<i class="fa fa-plane fa-3x mb-3" aria-hidden="true"></i>
							<h5 class="card-title">Deactivate Aircraft</h5>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min
	.js"></script>
</body>
</html>
