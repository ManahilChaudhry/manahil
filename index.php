<!DOCTYPE html>
<html>
<head>
    <title>Service Booking System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "navbar.php"; ?>

<section class="hero">
    <h1>Professional Service Booking Platform</h1>
    <p>Book reliable services anytime, anywhere</p>
</section>

<section id="services" class="container">
    <h2>Our Services</h2>
    <div class="services">
        <a href="booking.php?service=Home">
            <img src="home.jpg" alt="Home" class="card-icon">
            <h3>Home Services</h3>
            <p>Cleaning, Plumbing, Electrical, Painting & More</p>
        </a>
        <a href="booking.php?service=Appliance">
            <img src="aps.jpg" alt="Appliance" class="card-icon">
            <h3>Appliance Services</h3>
            <p>AC, Refrigerator, Washing Machine, Microwave Repairs</p>
        </a>
        <a href="booking.php?service=Vehicle">
            <img src="vs.jpg" alt="Vehicle" class="card-icon">
            <h3>Vehicle Services</h3>
            <p>Car Servicing, Bike Maintenance, Oil Change & More</p>
        </a>
        <a href="booking.php?service=Beauty">
            <img src="bs.jpg" alt="Beauty" class="card-icon">
            <h3>Beauty Services</h3>
            <p>Haircut, Makeup, Skincare at Home</p>
        </a>
        <a href="booking.php?service=IT">
            <img src="is.jpg" alt="IT" class="card-icon">
            <h3>IT & Tech Services</h3>
            <p>Computer, Laptop, Mobile, Networking Solutions</p>
        </a>
    </div>
</section>


<section id="about" class="container">
    <h2>About Us</h2>
    <p>Centralized platform to book verified professionals.</p>
</section>

</body>
</html>
