<?php
  session_start();

  // Database connection configuration
  $dbHost = 'localhost';
  $dbname= 'Harry Roshan';
  $dbpwd = 'passpass';
  $dbName = 'airline_reservation';

  $conn = new mysqli($dbHost, $dbname, $dbpwd, $dbName);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  // Initialize variables for form submission
  $name = $phone = $message = '';

  // Handle form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Insert the form data into the database table
    $sql = "INSERT INTO your_table_name (name, phone, message) VALUES ('$name', '$phone', '$message')";
    if ($conn->query($sql) === TRUE) {
      echo "Message submitted successfully.";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/home_page.css"/>
  <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<body>
  <nav>
    <div>
      <h1 id="title" class="text-center">
        <a href="home_page.php">
          <img src="images/tara.png" alt="TARA Tours & Travels" style="width: 100px;">
        </a>
        Tara Tours & Travels
      </h1>
    </div>
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
<li><a href="pnrall.php"><i class="fa fa-ticket" aria-hidden="true"></i> Check PNR</a></li>
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

<style>
/* Custom CSS */
.map-container {
  position: relative;
  width: 100%;
  padding-bottom: 60%; /* Adjust the aspect ratio as needed */
}

.map-container img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
</style>

<div class="container mt-5">
  <h1 class="text-center mb-4">Contact Us</h1>
  <div class="row">
    <div class="col-md-6">
      <h3>Our Location</h3>
      <div class="map-container">
        <img src="images/taramap.png" alt="Map Screenshot">
      </div>
    </div>
    <div class="col-md-6">
      <h3>Contact Information</h3>
      <ul class="list-unstyled">
        <li><strong>Address:</strong> 123 Main Street, Kathmandu, Nepal</li>
        <li><strong>Email:</strong> info@example.com</li>
        <li><strong>Phone:</strong> +1 234 567 890</li>
      </ul>
      <h3>Send us a message</h3>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
  </div>
</div>

<!-- Custom JavaScript -->
<script>
// JavaScript code
</script>
</body>
</html>

