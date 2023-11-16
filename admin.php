<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            background: url("trip.jpg");
            background-size: cover;
            padding: 0;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }

        h1 {
            text-align: center;
            padding-top: 50px;
            color: black;
        }

        .slogan {
            text-align: center;
            color: black;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .nav-links {
            text-align: center;
            margin-top: 20px;
        }

        .nav-links a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
            border: 2px blue;
            border-radius: 5px;
            transition: background-color 0.3s;
            color: black; 
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: black;
        }
    </style>
</head>
<body>
    <h1>Experiencing the majesty of the world</h1>
    <div class="slogan">Explore and manage travel details with ease!</div>

    <div class="nav-links">
        <a href="/akhila/admin-login.php">Login</a>
        <a href="/akhila/post-tourism-details.php">Post Tourism Details</a>
        <a href="/akhila/manage-food-details.php">Manage Food Details</a>
        <a href="/akhila/manage-hotel-details.php">Manage Hotel Details</a>
        <a href="/akhila/manage-route-details.php">Manage Route Details</a>
        <a href="/akhila/view-booking-details.php">View Booking Details</a>
    </div>
</body>
</html>
