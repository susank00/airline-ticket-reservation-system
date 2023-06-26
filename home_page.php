<?php
    session_start();
?>
<html>
    <head>
	
        <title>
            Welcome to Tara Tours & Travels 
        </title>
        		<link rel="stylesheet" type="text/css" href=" css/home_page.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <!-- Add Owl Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
        Address: Basundhara,kathmandu
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
		<div class="slideshow">
		<?php
			$images = array('images/rara.jpg', 'images/pokhara.jpg', 'images/chitwan.jpg');
			foreach ($images as $image) {
				echo '<img src="'.$image.'" alt="'.$image.'">';
			}
		?>
	
	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("slideshow")[0].getElementsByTagName("img");
			for (i = 0; i < slides.length; i++) {
				slides[i].className = slides[i].className.replace(" active", "");
			}
			slideIndex++;
			if (slideIndex > slides.length) {slideIndex = 1}
			slides[slideIndex-1].className += " active";
			setTimeout(showSlides, 5000); // Change image every 5 seconds
		}
	</script>
<div class="content_form">
  <form action="onlyviewformhandler.php" method="post">
    <h2 style="text-align:center;">SEARCH FOR AVAILABLE FLIGHTS</h2>

    <table cellpadding="1">
      <tr>
        <td class="fix_table"><b>Select Trip Type</b></td>
      </tr>
      <tr>
        <td class="fix_table">
          <input type="radio" id="one_way" name="trip_type" value="one_way" checked>
          <label for="one_way">One-way</label>
          <input type="radio" id="round_trip" name="trip_type" value="round_trip">
          <label for="round_trip">Round Trip</label>
        </td>
      </tr>
    </table>

    <table cellpadding="5">
      <tr>
        <td class="fix_table"><b>Enter the Origin</b></td>
        <td class="fix_table"><b>Enter the Destination</b></td>
      </tr>
      
      <tr>
        <td class="fix_table">
          <input list="origins" name="origin" placeholder="From" required>
          <datalist id="origins">
            <option value="bangalore">
          </datalist>
        </td>
        <td class="fix_table">
          <input list="destinations" name="destination" placeholder="To" required>
          <datalist id="destinations">
            <option value="mumbai">
            <option value="mysore">
            <option value="mangalore">
            <option value="chennai">
            <option value="hyderabad">
          </datalist>
        </td>
      </tr>
    </table>
    <br>
    <table cellpadding="5">
      <tr>
      <td class="fix_table"><b>Enter the No. of Passengers</b></td>
        <td class="fix_table"><b>Enter the Departure Date</b></td>
        <td class="fix_table"><b>Enter the Arrival Date</b></td>
  
      </tr>
      <tr>
      <td class="fix_table"><input type="number" name="no_of_pass" placeholder="Eg. 5" required></td>
        <td class="fix_table">
          <input type="date" name="dep_date" min="<?php echo date('Y-m-d'); ?>" max="<?php echo date('Y-m-d', strtotime('+90 days')); ?>" required>
        </td>
        <td class="fix_table">
          <div id="arrival_date_input" style="display: none;">
            <input type="date" name="arr_date" required>
          </div>
        </td>
       
      </tr>
    </table>
    <br>
    <table cellpadding="5">
      <tr>
        <td class="fix_table"><b>Select class</b></td>
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
    <br>

    <b><input type="submit" value="Search Flights" name="Search" style="background-color: orange; color: white; border-radius: 10px; padding: 20px;"></b>
  </form>
</div>

<!-- this script is for round trip date selection -->
<script>
  var roundTripRadio = document.getElementById("round_trip");
  var arrivalDateInput = document.getElementById("arrival_date_input");

  roundTripRadio.addEventListener("change", function() {
    if (roundTripRadio.checked) {
      arrivalDateInput.style.display = "block";
    } else {
      arrivalDateInput.style.display = "none";
    }
  });

  var oneWayRadio = document.getElementById("one_way");
  oneWayRadio.addEventListener("change", function() {
    if (oneWayRadio.checked) {
      arrivalDateInput.style.display = "none";
    }
  });
  var form = document.querySelector("form");
var roundTripRadio = document.getElementById("round_trip");
var originInput = document.querySelector("input[name='origin']");
var destinationInput = document.querySelector("input[name='destination']");
var hiddenOriginInput = document.createElement("input");
hiddenOriginInput.type = "hidden";
hiddenOriginInput.name = "hidden_origin";
var hiddenDestinationInput = document.createElement("input");
hiddenDestinationInput.type = "hidden";
hiddenDestinationInput.name = "hidden_destination";

form.appendChild(hiddenOriginInput);
form.appendChild(hiddenDestinationInput);

roundTripRadio.addEventListener("change", function() {
  if (roundTripRadio.checked) {
    swapOriginAndDestination();
  } else {
    resetOriginAndDestination();
  }
});

function swapOriginAndDestination() {
  var temp = originInput.value;
  originInput.value = destinationInput.value;
  destinationInput.value = temp;
  hiddenOriginInput.value = originInput.value;
  hiddenDestinationInput.value = destinationInput.value;
}

function resetOriginAndDestination() {
  originInput.value = "";
  destinationInput.value = "";
  hiddenOriginInput.value = "";
  hiddenDestinationInput.value = "";
}

</script>

<!-- end-->


<section class="pattern">
    </section>
	</div>
	<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="aboutt">
        <span><b>Welcome to</b></span>
        <h2><p style="color:red">Tara Tour & Travels</p></h2>
        <p>Exploring the city of Kathmandu is an adventure, where one discovers pockets 
			that offer quiet and solitude. When you want something from your soul, we give you wings to achieve it. The 
			journey of trust since 2007 Roshi Tour and Travels (P) Ltd. we have been committed to providing holistic services and a powerful way to feel the world from a single frame. We are all about travels, tours, and expedition, and we have been at it long enough to perfect it with years of experience well-qualified professionals in the tourism industry. We are dedicated to delivering exclusive, customized experiences that are tailored to your individual tastes.</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="images/mixmax.png" class="img-fluid" alt="Travel Image">
    </div>
  </div>
</div>

<div class="container pt-5">
  <div class="trendPack pt-3">
    <h2 class="mb-4">
      Trending
      <span>Package</span>
    </h2>
    <div class="packSlider owl-carousel">
      <div class="item">
        <div class="packBox">
          <div class="imgHolder">
            <a href="blog.php">
              <img src="images/rhino.png" alt="chitwan Tour">
            </a>
          </div>
          <div class="packDesc">
            <h6><a href="blog.php">Chitwan Tour</a></h6>
            <div>
              <strong>NPR 6799</strong>
              Per Person
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="packBox">
          <div class="imgHolder">
            <a href="https://travelroshi.com/malaysia-singapore-tour/holidayPackage">
              <img src="images/muktinath.jpg" alt="Muktinath Tour">
            </a>
          </div>
          <div class="packDesc">
            <h6><a href="https://travelroshi.com/malaysia-singapore-tour/holidayPackage">Muktinath Tour</a></h6>
            <div>
              <strong>NPR 10500</strong>
              Per Person
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="packBox">
          <div class="imgHolder">
            <a href="https://travelroshi.com/vietnam-cambodia/holidayPackage">
              <img src="images/wildbardiya.jpg" alt="bardiya tour">
            </a>
          </div>
          <div class="packDesc">
            <h6><a href="https://travelroshi.com/vietnam-cambodia/holidayPackage">Wild Bardiya Tour</a></h6>
            <div>
              <strong>NPR 11000</strong>
              Per Person
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="packBox">
          <div class="imgHolder">
            <a href="https://travelroshi.com/turkey-tour/holidayPackage">
              <img src="images/pookhara.jpg" alt="pokhara Tour">
            </a>
          </div>
          <div class="packDesc">
            <h6><a href="blog.php">Pokhara Tour</a></h6>
            <div>
              <strong>NPR 14200</strong>
              Per Person
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- Add Bootstrap JS (place it before Owl Carousel JS) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

  <!-- Add Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Initialize Owl Carousel -->
  <script>
  $(document).ready(function() {
    $(".packSlider").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true, // Add autoplay option
      autoplayTimeout: 5000, // Set autoplay timeout (in milliseconds)
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });
  });
</script>
      <div class="orange-div">
        <h2>Client Reviews</h2>
        <div id="review-carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#review-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#review-carousel" data-slide-to="1"></li>
            <li data-target="#review-carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/pokhara.jpg" class="client-photo" alt="Client Photo">
              <p>I had the pleasure of exploring Kathmandu with XYZ Travel Agency, and it exceeded all my expectations. The agency's attention
                 to detail and excellent service made my trip truly memorable. </p>
            </div>
            <div class="carousel-item">
              <img src="images/travell3.jpg" class="client-photo" alt="Client Photo">
              <p>I recently had the opportunity to visit Chitwan through XYZ Travel Agency, and it was an unforgettable 
                experience. The agency ensured that every aspect of my trip was well taken care of, from transportation to accommodation.</p>
            </div>
            <div class="carousel-item">
              <img src="images/travell1.jpg" class="client-photo" alt="Client Photo">
              <p>I had the pleasure of booking a trip to Pokhara with XYZ Travel Agency, and I must say, it was an incredible experience.
                 The agency took care of every detail, from transportation to accommodation, ensuring a hassle-free journey.

Upon reaching Pokhara, I was mesmerized by its natural beauty. The tranquil lakes, cascading waterfalls, and lush green landscapes were a treat for the eyes. 
The agency had arranged for a knowledgeable guide who took us to all the must-visit places, including the famous Phewa Lake, Davis Falls, and Sarangkot viewpoint.</p>
            </div>
          </div>
          <a class="carousel-control-prev" href="#review-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#review-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div><?php include 'footer.php'; ?>
					</div>	
</body>
</html> 
