<!DOCTYPE html>
<html>
<head>
    <title>Manage Food Details</title>
</head>
<body align="center">
    <h1>Manage Food Details</h1>

    <form action="/akhila/manage-food-process.php" method="post">
        <label for="food-name">Food Name:</label>
        <input type="text" id="food-name" name="food-name" required><br><br>

        <label for="food-description">Food Description:</label>
        <textarea id="food-description" name="food-description" rows="4" cols="50" required></textarea><br><br>

        <label for="food-price">Food Price:</label>
        <input type="number" id="food-price" name="food-price" required><br><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
