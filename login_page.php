<?php
session_start();
?>
<html>
<head>
    <title>Account Login</title>
</head>
<link rel="stylesheet" type="text/css" href="css/loginpage.css" />
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

</nav>
    </div>

    <br>
    <br>
    <br>
    <div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="login-info">
                    <h3>Login Information</h3>
                    <p>Please login before proceeding.</p>
                    <!-- Add your login information here -->
                </div>
            </div>
            <div class="col-md-6">
                <form class="float_form" action="login_handler.php" method="POST">
                    <div class="login-box">
                        <legend>Login Details:</legend>
                        <strong>Username:</strong><br>
                        <input type="text" name="username" placeholder="Enter your username" required><br><br>
                        <strong>Password:</strong><br>
                        <input type="password" name="password" placeholder="Enter your password" required><br><br>
                        <strong>User Type:</strong>
                        <select name="user_type">
                            <option value="Customer">Customer</option>
                            <option value="Administrator">Administrator</option>
                        </select>

                        <?php
                        if (isset($_GET['msg']) && $_GET['msg'] == 'failed') {
                            echo "<strong style='color:red'>Invalid Username/Password</strong><br><br>";
                        }
                        ?><br>
                        <a href="new_user.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Create New User Account?</a>
                        <input type="submit" name="Login" value="Login">

                    </div>

                </form>
                <br>
            </div>
        </div>
					</div>
    </div>
					</div>
          </div>             
	<div><?php include 'footer.php'; ?>
					</div>			
</body
