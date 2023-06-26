<html>
    <head>
	
        <title>
            Welcome to Airlines
        <style>
            /* Footer styles */
.footer {
  padding: 40px 0;
}

.footer h5 {
  color: #fff;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer address {
  color: #fff;
  margin-bottom: 10px;
}

.footer p {
  color: #fff;
}

.footer ul.list-unstyled li {
  color: #fff;
  margin-bottom: 5px;
}

.footer ul.list-inline li {
  display: inline-block;
  margin-right: 10px;
}

.footer ul.list-inline li a {
  color: #fff;
  font-size: 20px;
}

/* Footer background and text colors */
.footer.bg-dark {
  background-color: #343a40;
}

.footer.text-light h5,
.footer.text-light address,
.footer.text-light p,
.footer.text-light ul.list-unstyled li,
.footer.text-light ul.list-inline li a {
  color: #fff;
}

/* Copyright text */
.footer .bg-secondary {
  color: #fff;
  font-size: 14px;
}
</style>
    </head>
    <body>
<footer class="footer bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Tara Travels</h5>
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
        &copy; <?php echo date("Y"); ?> Tara Travels. All rights reserved.
    </div>
</footer>
</body>
</html>