<!DOCTYPE html>
<html>
<head>
    <title>Manage Hotel Details</title>
</head>
<body align="center">
    <h1>Manage Hotel Details</h1>

    <form action="/akhila/manage-hotel-process.php" method="post">
        <label for="hotel-name">Hotel Name:</label>
        <input type="text" id="hotel-name" name="hotel-name" required><br><br>

        <label for="hotel-description">Hotel Description:</label>
        <textarea id="hotel-description" name="hotel-description" rows="4" cols="50" required></textarea><br><br>

        <label for="hotel-location">Hotel Location:</label>
        <input type="text" id="hotel-location" name="hotel-location" required><br><br>

        <label for="hotel-price">Average Price per Night:</label>
        <input type="number" id="hotel-price" name="hotel-price" required><br><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
