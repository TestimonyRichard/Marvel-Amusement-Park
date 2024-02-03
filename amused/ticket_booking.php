<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <style>
    body{
            background-image: url(./img/am.jpg);
            height: 100vh;
            margin-top: -20px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            margin: 20px;
            margin-bottom: 20px;
        }     
        .container{
            box-shadow: 0 0 5px white;
            backdrop-filter: blur(500px)
        } 
    </style>
    <?php 
require('connect_db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $full_name = $_POST["full-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $ticket_type = $_POST["ticket-type"];
    $num_tickets = $_POST["num-tickets"];
    $date_visit = $_POST["date-visit"];
    $special_packages = $_POST["special-packages"];
    $payment_method = $_POST["payment-method"];
    $billing_address = $_POST["billing-address"];
    $emergency_contact = $_POST["emergency-contact"];
    $ticket_delivery = $_POST["ticket-delivery"];

    // Prepare an SQL statement to insert data into the "ticket_orders" table
    $sql = "INSERT INTO ticket_orders (full_name, email, phone, ticket_type, num_tickets, date_visit, special_packages, payment_method, billing_address, emergency_contact, ticket_delivery)  VALUES ('$full_name', '$email', '$phone', '$ticket_type', '$num_tickets', '$date_visit', '$special_packages', '$payment_method', '$billing_address', '$emergency_contact', '$ticket_delivery')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo "Submitted";
}
?>

    <body>
        <div class="container col-lg-7 p-3">
            <h1 class="text-center">Tickets Details</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <div class="row">
                    <div class="form-group mb-2 col-md-6">
                        <label for="full-name">Full Name</label>
                        <input type="text" class="form-control" id="full-name" name="full-name" required>
                    </div>

                    <div class="form-group mb-2 col-md-6">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group mb-2 col-md-6">
                        <label for="ticket-type">Ticket Type</label>
                        <select class="form-control" id="ticket-type" name="ticket-type" required>
                            <option value="general_admission">General Admission</option>
                            <option value="child">Child</option>
                            <option value="senior">Senior</option>
                            <option value="student">Student</option>
                            <option value="group">Group</option>
                            <option value="season_pass">Season Pass</option>
                            <option value="vip_express">VIP or Express Pass</option>
                            <option value="twilight_evening">Twilight or Evening</option>
                            <option value="two_day">Two-Day or Multi-Day</option>
                            <option value="special_event">Special Event</option>
                            <option value="combo">Combo Ticket</option>
                            <option value="fast_pass">Fast Pass or Ride Reservation</option>
                            <option value="annual_membership">Annual Membership</option>
                            <option value="military_first_responder">Military or First Responder Discount</option>
                            <option value="birthday_celebration">Birthday or Celebration Package</option>

                        </select>
                    </div>

                    <div class="form-group mb-2 col-md-6">
                        <label for="num-tickets">Number of Tickets</label>
                        <input type="number" class="form-control" id="num-tickets" name="num-tickets" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group mb-2 col-md-6">
                        <label for="date-visit">Date of Visit</label>
                        <input type="date" class="form-control" id="date-visit" name="date-visit" required>
                    </div>

                    <div class="form-group mb-2 col-md-6">
                        <label for="special-packages">Special Packages or Add-ons</label>
                        <select class="form-select" name="special-packages">
                            <option value="meal-plan">Meal Plan</option>
                            <option value="fast-pass">Fast Pass or Express Pass</option>
                            <option value="photo-packages">Photo Packages</option>
                            <option value="vip-tours">VIP Tours</option>
                            <option value="parking-pass">Parking Pass</option>
                            <option value="character-dining">Character Dining</option>
                            <option value="souvenir-packages">Souvenir Packages</option>
                            <option value="season-pass">Season Pass or Annual Membership</option>
                            <option value="locker-rentals">Locker Rentals</option>
                            <option value="ride-photos">Ride Photos and Videos</option>
                            <option value="front-of-line-access">Front-Of-Line Access</option>
                            <option value="special-events">Special Events</option>
                            <option value="vip-seating">VIP Seating for Shows</option>
                            <option value="educational-programs">Educational Programs</option>
                            <option value="mobile-apps">Mobile Apps</option>
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="form-group mb-2 col-md-6">
                        <label for="payment-method">Payment Method</label>
                        <select class="form-control" id="payment-method" name="payment-method" required>
                            <option value="credit-card">Credit Card</option>
                            <option value="debit-card">Debit Card</option>
                            <option value="paypal">PayPal</option>
                            <option value="apple-pay">Apple Pay</option>
                            <option value="google-pay">Google Pay</option>
                            <option value="cash">Cash</option>
                            <option value="bitcoin">Bitcoin</option>>
                        </select>
                    </div>

                    <div class="form-group mb-2 col-md-6">
                        <label for="emergency-contact">Emergency Contact Information</label>
                        <input type="text" class="form-control" id="emergency-contact" name="emergency-contact"
                            required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group mb-2 col-md-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="form-group mb-2 col-md-6">
                        <label for="ticket-delivery">Ticket Delivery Method</label>
                        <select class="form-control" id="ticket-delivery" name="ticket-delivery" required>
                            <option value="email">Email</option>
                            <option value="mobile-app">Mobile App</option>
                            <option value="physical-tickets">Physical Tickets (Mailed)</option>
                            <option value="pick-up">Pick Up at Park</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="billing-address">Billing Address</label>
                    <textarea class="form-control" id="billing-address" name="billing-address" rows="3"
                        required></textarea>
                </div>



                <div class="text-end">
                    <button type="submit" class="btn btn-warning">Purchase Tickets</button>
                </div>
            </form>

    </body>

</html>