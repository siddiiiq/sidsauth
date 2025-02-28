<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Car World</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #575757;
        }
        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }
        .car-section {
            margin-top: 30px;
            text-align: left;
        }
        .car-section h2 {
            background: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .car {
            display: flex;
            align-items: center;
            background: #f9f9f9;
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 5px;
            border-left: 5px solid #333;
        }
        .car img {
            width: 250px;
            height: auto;
            border-radius: 5px;
            margin-right: 20px;
        }
        .car strong {
            font-size: 20px;
        }
        .car p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p>Explore the world of cars and learn about different types of vehicles.</p>

        <div class="car-section">
            <h2>Types of Cars</h2>

            <div class="car" data-aos="fade-up">
                <img src="images/sedan.jpg" alt="Luxury Sedan">
                <div>
                    <strong>🚗 Luxury Sedans</strong>
                    <p><b>Mercedes-Benz S-Class</b> - A flagship luxury sedan known for its comfort, technology, and smooth ride.</p>
                    <p><b>BMW 7 Series</b> - Combines luxury with sporty performance, offering a refined yet engaging experience.</p>
                    <p><b>Audi A8</b> - A high-tech sedan with an elegant design and top-tier comfort.</p>
                </div>
            </div>

            <div class="car" data-aos="fade-up" data-aos-delay="100">
                <img src="images/sports-car.jpg" alt="Sports Car">
                <div>
                    <strong>🏎️ Sports Cars</strong>
                    <p><b>Ferrari 488</b> - A powerful supercar with breathtaking speed and handling.</p>
                    <p><b>Lamborghini Huracán</b> - A stunning sports car featuring a naturally aspirated V10 engine.</p>
                    <p><b>Porsche 911</b> - The ultimate blend of everyday usability and high-performance excitement.</p>
                </div>
            </div>

            <div class="car" data-aos="fade-up" data-aos-delay="200">
                <img src="images/suv.jpg" alt="SUV">
                <div>
                    <strong>🚙 Off-Road SUVs</strong>
                    <p><b>Jeep Wrangler</b> - A legendary off-roader built for adventure and rugged terrains.</p>
                    <p><b>Land Rover Defender</b> - A premium SUV with unmatched off-road capabilities and luxury.</p>
                    <p><b>Toyota Land Cruiser</b> - A reliable and durable SUV known for conquering extreme conditions.</p>
                </div>
            </div>

            <div class="car" data-aos="fade-up" data-aos-delay="300">
                <img src="images/electric-car.jpg" alt="Electric Car">
                <div>
                    <strong>⚡ Electric Cars</strong>
                    <p><b>Tesla Model S Plaid</b> - One of the fastest electric cars with cutting-edge technology.</p>
                    <p><b>Porsche Taycan</b> - A high-performance EV that combines luxury and sports car dynamics.</p>
                    <p><b>Rivian R1T</b> - An all-electric adventure truck built for off-road capability and sustainability.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>