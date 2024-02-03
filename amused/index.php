<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amusement Park</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</head>
<div>
    <style>
        .you {
            background-image: url("./img/pexels-edwin-soto-2884693.jpg");
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    
        #shiny-text {
            animation: shiny-transition 2s infinite;
        }
    
        @keyframes shiny-transition {
            0% {
                opacity: 1;
            }
    
            50% {
                opacity: 0;
            }
    
            100% {
                opacity: 1;
            }
        }
        .we{
            background-image: url("./img/am.jpg");
            height: 100vh;
            margin-top: -20px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .she{
            background-image: url(./img/bg.jpg);
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .he{
            background-image: url(./img/free.jpg);
            height: 100vh;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .but{
            border: 0px;
            border-radius: 12px;
            height: 50px;
            background-color: navy;
            box-shadow: 10px 10px 5px yellow;
        }
    </style>
    
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light  fixed-top " style="background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);">
            <a class="navbar-brand text-white" href="#"> Marvel Amusement Park</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#attractions">Attractions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./ticket_booking.php">Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <div class="you"></div>
    
        <div class="bg-dark text-center">
                <h1 id="shiny-text" class="text-warning">Welcome to Marvel Amusement Park</h1>
                <p id="shiny-text" class="text-warning">Your ultimate destination for family fun and excitement!</p>
                <button class="px-5 but text-light"><b>Get a ticket</b></button>
        </div>
    
    
            <section class="we" >
               <div class="py-5 ps-4 text-white">
                <h2 class="pt-5">About Marvel Amusement Park</h2>
                <p class="">Welcome to Marvel Amusement Park, where the magic of adventure meets the thrill of entertainment.
                    Located in the heart of Ogbomoso, Oyo State, Nigeria, Our park is a place where dreams come true and
                    laughter knows no bounds. </p>
               </div>
            </section>
    
    
            <section class="she">
                <div class="py-5 ps-4 text-warning">
                    <h3>Our Mission</h3>
                    <p>At Marvel, our mission is to provide a safe, fun, and family-friendly environment where everyone can
                        experience the magic of amusement. We are dedicated to delivering top-notch entertainment and
                        exceptional customer service to ensure that every visit to our park is a fantastic adventure.</p>
                </div>
             </section>
    
    
    
             <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                 <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./img/pexels-pixabay-waterpark.jpg" alt="About Us" class="img-fluid">
                  </div>
                  <div class="carousel-item">
                    <img src="./img/children.jpg" alt="Attractions" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="./img/ticket.jpg" alt="Tickets" class="img-fluid">
                    <div class="carousel-caption">
                        <h2>Tickets and Pricing</h2>
                        <p>Get your tickets and check our pricing details.</p>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <footer class="col-lg-12 col-md-6 col-sm-9 p-3" style="background-color: navy">
            <div class="row">
                <h1 id="shiny-text" class="text-warning text-center">Marvel Amusement Park</h1>

                <div class="col-lg-4 mt-2">
                    <div class="card border-0" style="background-color: navy;">
                        <div class="card-body">
                            <h4 class="card-title text-white">Quick Links</h4>

                            <ul style="list-style: none; ">
                                <li class="text-white">Home</li>
                                <!-- <li class="text-white">News</li> -->
                                <li class="text-white">Contact</li>
                                <li class="text-white">About</li>
                                <li class="text-white">Ticket</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-2">
                    <div class="card border-0" style="background-color: navy;">
                        <div class="card-body">
                            <h4 class="card-title text-white ms-5">Tickets</h4>
                            <ul style="list-style: none; ">
                                     <li class="text-white">Season Pass</li>
                                     <li class="text-white">Daily Tickets</li>
                                     <li class="text-white">Group Tickets</li>
                                     <li class="text-white">Military Tickets</li>
                                     <li class="text-white">Drinks & Dining</li>
                                     <li class="text-white">Fast Lane</li>
                                     <li class="text-white">FunPix</li>
                                     <li class="text-white">Cabanas</li>
                                     <li class="text-white">Rentals</li>
                                     <li class="text-white">Online Store</li>
                                     <li class="text-white">Pass Perks Rewards Program</li>
                                     <li class="text-white">Free Pre-K Pass</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <h4 class="card-title text-white">Quick Links</h4>
                    <ul class="list-unstyled">
                        <li class="text-white">Buy Tickets</li>
                        <li class="text-white">Park Map</li>
                        <li class="text-white">FAQ</li>
                        <li class="text-white">Privacy Policy</li>
                    </ul>
                </div>


                <div class="col-md-4 ms-4">
                    <h4 class="card-title text-white">Follow Us</h4>
                    <ul class="list-unstyled">
                        <li class="text-white">Facebook</li>
                        <li class="text-white">Twitter</li>
                        <li class="text-white">Instagram</li>
                    </ul>
                </div>

                <div class="col-lg-6 mt-2">
                    <div class="card border-0" style="background-color: navy;">
                        <div class="card-body">
                            <h4 class="card-title text-white text-center">Quick Links</h4>

                            <ul style="list-style: none;">
                                <li class="text-white">
                                    <p>Orogun Area opposite Viva Coninental Event Centre,<br> Along Iresaapa Road,
                                        Ogbomoso,Oyo State,Nigeria</p>
                                </li>
                                <li class="text-white">
                                    <p>+234 706 597 2786</p>
                                </li>
                                <li class="text-white">
                                    <p>marvelamusementpark@gmail.com</p>
                                </li>
                                <li class="text-white">
                                    <p>+234 911 793 5084</p>
                                </li>
                                <li class="text-white">
                                    <p>+234 901 367 8934</p>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
        </footer>
        
    
        <footer class="bg-dark text-light text-center py-3 ">
            <p>&copy; 2023
            <h4 class="text-primary">Powered by:</h4> E-Worldlab International</p>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
            crossorigin="anonymous"></script>
</div>
</body>

</html>