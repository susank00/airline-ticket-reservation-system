<html>
<head>
  <title>Create New User Account</title>
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
      margin: 0px 135px;
    }
  </style>
  <script>
    function validateForm() {
      // Validate username
      var username = document.forms["new_user_from"]["username"].value;
      if (username.length < 6) {
        alert("Username must be at least 6 characters long");
        return false;
      }

      // Validate password
      var password = document.forms["new_user_from"]["password"].value;
      if (password.length < 8 || !/[A-Z]/.test(password)) {
        alert("Password must be at least 8 characters long and contain an uppercase letter");
        return false;
      }

      // Validate email
      var email = document.forms["new_user_from"]["email"].value;
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!email.match(emailRegex)) {
        alert("Please enter a valid email address");
        return false;
      }

      // Validate phone number
      var phoneNo = document.forms["new_user_from"]["phone_no"].value;
      var phoneRegex = /^\d{10}$/;
      if (!phoneRegex.test(phoneNo)) {
        alert("Please enter a 10-digit phone number");
        return false;
      }
    }
  </script>
</head>
<link rel="stylesheet" type="text/css" href="css/new_user.css" />
<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
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

    </div>
  <br>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
 <form class="float_form" action="new_user_form_handler.php" method="POST" id="new_user_from" onsubmit="return validateForm()">
<div class="login-box">
    <legend>CREATE NEW USER ACCOUNT</legend>
       <strong>Enter a valid username</strong>
        <input type="text" name="username" required><br>
     
        <strong>Enter your desired password</strong>
        <input type="password" name="password" required><br>

        <strong>Enter your email ID</strong>
        <input type="email" name="email" pattern="[^\s@]+@[^\s@]+\.[^\s@]+" required><br>
 
      <br><br><strong>ENTER CUSTOMER'S PERSONAL DETAILS</strong>
  
        <strong>Enter your name</strong>
        <input type="text" name="name" required><br>
    
        <strong>Enter your phone no.</strong>
        <input type="tel" name="phone_no" pattern="[0-9]{10}" required><br><br>
 
        <strong>Enter your address</strong>
        <input type="text" name="address" required> 
		
  <input type="submit" value="Submit" name="Submit"><br>
	</div>
	</form>
	<br>
	</div>
	</div>
	
  <div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
