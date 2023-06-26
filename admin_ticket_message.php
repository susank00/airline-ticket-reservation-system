<?php
	session_start();
?>
<html>
	<head>
		<title>
			View Available Flights
		</title>

	l

	</head>
	<link rel="stylesheet" type="text/css" href="css/loginpage.css">
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
		<h3>Oops! You need to login with a Customer Account to Book Tickets</h3>
		<footer class="mt-5">
		<?php include 'footer.php'; ?>
	</footer>
	</body>
</html>