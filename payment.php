<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .payment-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f8f8;
        }
        .payment-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .payment-container label {
            font-weight: bold;
        }
        .payment-container .form-group {
            margin-bottom: 20px;
        }
        .payment-container .submit-btn {
            display: block;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Payment Form</h2>
        <form method="post" action="payment_details_form_handler.php">
            <?php
                $flight_no = $_SESSION['flight_no'];
                $journey_date = $_SESSION['journey_date'];
                $no_of_pass = $_SESSION['no_of_pass'];
                $total_no_of_meals = $_SESSION['total_no_of_meals'];
                $payment_id = rand(100000000, 999999999);
                $pnr = $_SESSION['pnr'];
                $_SESSION['payment_id'] = $payment_id;
                $payment_date = date('Y-m-d'); 
                $_SESSION['payment_date'] = $payment_date;

                require_once('Database Connection file/mysqli_connect.php');

                if ($_SESSION['class'] == 'economy') {	
                    $query = "SELECT price_economy FROM Flight_Details WHERE flight_no=? AND departure_date=?";
                    $stmt = mysqli_prepare($dbc, $query);
                    mysqli_stmt_bind_param($stmt, "ss", $flight_no, $journey_date);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $ticket_price);
                    mysqli_stmt_fetch($stmt);
                } else if ($_SESSION['class'] == 'business') {
                    $query = "SELECT price_business FROM Flight_Details WHERE flight_no=? AND departure_date=?";
                    $stmt = mysqli_prepare($dbc, $query);
                    mysqli_stmt_bind_param($stmt, "ss", $flight_no, $journey_date);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $ticket_price);
                    mysqli_stmt_fetch($stmt);
                }
                mysqli_stmt_close($stmt);
                mysqli_close($dbc);

                $total_ticket_price = $no_of_pass * $ticket_price;
                $total_meal_price = 250 * $total_no_of_meals;

                if ($_SESSION['insurance'] == 'yes') {
                    $total_insurance_fee = 100 * $no_of_pass;
                } else {
                    $total_insurance_fee = 0;
                }

                if ($_SESSION['priority_checkin'] == 'yes') {
                    $total_priority_checkin_fee = 200 * $no_of_pass;
                } else {
                    $total_priority_checkin_fee = 0;
                }

                if ($_SESSION['lounge_access'] == 'yes') {
                    $total_lounge_access_fee = 300 * $no_of_pass;
                } else {
                    $total_lounge_access_fee = 0;
                }

                $total_discount = 0;
                $total_amount = $total_ticket_price + $total_meal_price + $total_insurance_fee + $total_priority_checkin_fee + $total_lounge_access_fee + $total_discount;
                $_SESSION['total_amount'] = $total_amount;
            ?>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="card_number">Credit Card Number:</label>
                <input type="text" class="form-control" id="card_number" name="card_number" required pattern="[0-9]{13,16}" maxlength="16">
            </div>
            <div class="form-group">
                <label for="expiration_date">Expiration Date:</label>
                <input type="date" class="form-control" id="expiration_date" name="expiration_date" required min="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Amount:</label>
                <input type="text" class="form-control" id="total_amount" value="<?php echo "rs " . $total_amount . ""; ?>" readonly>
            </div>
            <input type="submit" value="Pay Now" name="Pay_Now">
        </form>
    </div>
</body>
</html>


