<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
            body{
            background-image: url(./img/am.jpg);
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white
        }
        .container{
            box-shadow: 0 0 5px white;
            backdrop-filter: blur(500px)
        }
    </style>
</head>
<?php
require('connect_db.php');
if (isset($_POST['submit'])) {
// Database connection details
$host = 'localhost';
$dbname = 'amusement_park';
$username = 'root';
$password = '';

    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get form data
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    
    // SQL query to insert data into the database
    $sql = "INSERT INTO contact_submissions (full_name, email, phone, subject, message)
            VALUES ('$full_name', '$email', '$phone', '$subject', '$message')";
    
    // Prepare and execute the SQL statement
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    
    echo "Thank you";
    // // $headers .= "From: $email" . "\r\n";
    // $to = "olamideezekiel2212@gmail.com";
//    mail($to, $subject, $message, $email);

}
?>

<body>
    <div class="container col-lg-5 p-3">
        <h2 class="text-center">Contact Us</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group mb-2">
                <label for="full_name">Full Name</label>
                <input type="text" class="form-control" id="full_name" name="full_name" required>
            </div>

            <div class="form-group mb-2">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group mb-2">
                <label for="phone">Phone Number (Optional)</label>
                <input type="tel" class="form-control" id="phone" name="phone">
            </div>

            <div class="form-group mb-2">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>

            <div class="form-group mb-4">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary col-12" name="submit">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>