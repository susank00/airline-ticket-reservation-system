<?php
    session_start();
?>
<html>
    <head>
	
        <title>
            Welcome to Airlines
        </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3
		.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/home_page.css"/>
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

    </head>
    <body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
    <li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
    <li>
      <?php
      if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Customer') {
        echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
      } else if(isset($_SESSION['login_user']) && $_SESSION['user_type'] == 'Administrator') {
        echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
      } else {
        echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
      }
      ?>
    </li>
    <li><a href="aboutus.php"><i class="fa fa-plane" aria-hidden="true"></i> About Us</a></li>
    <li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
    <li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR </a></li>
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
    </div>

    <title>About Us - Tara Travel Agency</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tara Travel Agency</a>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>About Us</h2>
                <p>Welcome to Tara Travel Agency, your trusted partner in providing unforgettable travel experiences. We are passionate about creating amazing journeys and helping you explore the world with ease.</p>
                <p>With our team of experienced travel experts, we offer a wide range of travel services including flight bookings, hotel reservations, tour packages, and more. We strive to make every trip memorable and tailor it to your unique preferences and interests.</p>
            </div>
            <div class="col-md-6">
                <h2>Photos</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php
                            $photos = array('travell.jpg', 'travell1.jpg', 'travell3.jpg');
                            for ($i = 0; $i < count($photos); $i++) {
                                $active = ($i == 0) ? 'active' : '';
                                echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '" class="' . $active . '"></li>';
                            }
                        ?>
                    </ol>
                    <div class="carousel-inner">
                        <?php
                            foreach ($photos as $index => $photo) {
                                $active = ($index == 0) ? 'active' : '';
                                echo '<div class="carousel-item ' . $active . '">';
                                echo '<img class="d-block w-100" src="images/' . $photo . '" alt="Photo ' . ($index + 1) . '">';
                                echo '</div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2>Customer Reviews</h2>
                <div id="customerReviews" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $reviews = array(
                                array(
                                    'name' => 'John Doe',
                                    'review' => 'Amazing travel agency! They helped me plan the perfect vacation.',
                                ),
                                array(
                                    'name' => 'Jane Smith',
                                    'review' => 'Excellent service and attention to detail. Highly recommended!',
                                ),
                                array(
                                    'name' => 'Mike Johnson',
                                    'review' => 'Tara Travel Agency made our trip unforgettable. Thank you!',
                                ),
                            );
                            foreach ($reviews as $index => $review) {
                                $active = ($index == 0) ? 'active' : '';
                                echo '<div class="carousel-item ' . $active . '">';
                                echo '<blockquote class="blockquote">';
                                echo '<p class="mb-0">' . $review['review'] . '</p>';
                                echo '<footer class="blockquote-footer">' . $review['name'] . '</footer>';
                                echo '</blockquote>';
                                echo '</div>';
                            }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#customerReviews" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customerReviews" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>TARA Travel Agency</h5>
                    <address>
                        123 Main Street<br>
                        City, State ZIP<br>
                        Country
                    </address>
                    <p>Phone: 123-456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Payment Options</h5>
                    <ul class="list-unstyled">
                        <li><i class="fab fa-cc-visa"></i> Visa</li>
                        <li><i class="fab fa-cc-mastercard"></i> Mastercard</li>
                        <li><i class="fab fa-cc-amex"></i> American Express</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center py-3 bg-secondary">
            &copy; <?php echo date("Y"); ?> TARA Travel Agency. All rights reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


		