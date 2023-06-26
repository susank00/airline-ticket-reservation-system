<?php
    session_start();
?>
<html>
    <head>
        <title>Welcome to Airlines</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/home_page.css"/>
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2>Blog</h2>
                    <div class="card mb-3 ">
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/nationalpark.jpg" class="card-img-top" alt="Tour Blog">
                                        <div class="carousel-caption">
                                            <h5 class="card-title">Exploring the Wonders of Nature</h5>
                                            <p style="color:blues" class="card-text">Exploring the Wonders of Chitwan
Welcome to Chitwan, a paradise nestled in the heart of Nepal. With its rich biodiversity, breathtaking landscapes, and unique cultural heritage, Chitwan offers an unforgettable experience for travelers seeking to immerse themselves in nature's embrace. Join us as we embark on a journey through this mesmerizing destination, discovering its hidden gems and marveling at its wonders.

A Tapestry of Natural Beauty
, which is typically during the dry seasonJoin us on a breathtaking journey through the wonders of nature. Experience the beauty of lush forests, majestic mountains, and serene lakes. Immerse yourself in the tranquility of untouched landscapes and discover hidden gems that will leave you in awe.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/hdpokhara.jpg" class="card-img-top" alt="Tour Blog">
                                        <div class="carousel-caption">
                                            <h5 class="card-title">Pokhara: A Serene Retreat in the Himalayas</h5>
                                            <p class="card-text">Pokhara: A Serene Retreat in the Himalayas
Nestled in the lap of the majestic Himalayas, Pokhara is a picturesque city in Nepal that captivates visitors with its breathtaking landscapes, tranquil lakes, and adventure-filled activities. Known as the gateway to the Annapurna mountain range, Pokhara offers a perfect blend of natural beauty, cultural charm, and thrilling experiences.

Lakeside Bliss
Pokhara's star attraction is the enchanting Phewa Lake, a tranquil body of water that reflects the surrounding mountains like a mirror. Take a leisurely boat ride on the lake, surrounded by serene beauty and serenaded by the gentle lapping of the water. As you paddle along, gaze upon the stunning Annapurna and Dhaulagiri mountain ranges that dominate the horizon, creating a postcard-perfect backdrop.

Adventure Awaits
Adventure enthusiasts will find no shortage of adrenaline-pumping activities in Pokhara. The city is renowned for being a hub of paragliding, offering thrilling flights over the valleys and lakes, giving you a bird's-eye view of the breathtaking landscapes below. Feel the rush of wind as you soar through the air, taking in the panoramic vistas that stretch as far as the eye can see.

For those  immersion, Pokhara has something for everyone. Plan your visit, pack your bags, and get ready for an unforgettable journey in the lap of the Himalayas.</p>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Exploring the Wonders of Nature</h5>
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div><?php include 'footer.php'; ?></div>

    </body>
</html>
