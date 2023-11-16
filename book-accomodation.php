<!DOCTYPE html>
<html>
<head>
    <title>Book Accommodation</title>
</head>
<body align="center">
    <h1>Book Accommodation</h1>
    <h2>Accommodation Options</h2>
    <p>Choose your preferred type of accommodation:</p>
    <form action="booking-process.php" method="post">
        <label for="accommodation-type">Accommodation Type:</label>
        <select id="accommodation-type" name="accommodation-type">
            <option value="single-room">Single Room</option>
            <option value="double-room">Double Room</option>
            <option value="dormitory-bed">Dormitory Bed</option>
        </select>

        <h3>Check-In and Check-Out Dates</h3>
        <label for="check-in-date">Check-In Date:</label>
        <input type="date" id="check-in-date" name="check-in-date" required><br><br>
        <label for="check-out-date">Check-Out Date:</label>
        <input type="date" id="check-out-date" name="check-out-date" required><br><br>

        <h3>Guest Information</h3>
        <label for="guest-name">Guest Name:</label>
        <input type="text" id="guest-name" name="guest-name" required><br><br>
        <label for="guest-email">Guest Email:</label>
        <input type="email" id="guest-email" name="guest-email" required><br><br>

        <h3>Special Requests</h3>
        <textarea id="special-requests" name="special-requests" rows="4" cols="50" placeholder="Any special requests or additional information?"></textarea><br><br>

        <button type="submit">Submit Booking</button>
    </form>
</body>
</html>
