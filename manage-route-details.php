<!DOCTYPE html>
<html>
<head>
    <title>Manage Route Details</title>
</head>
<body align="center">
    <h1>Manage Route Details</h1>

    <form action="/akhila/manage-route-process.php" method="post">
        <label for="route-name">Route Name:</label>
        <input type="text" id="route-name" name="route-name" required><br><br>

        <label for="route-description">Route Description:</label>
        <textarea id="route-description" name="route-description" rows="4" cols="50" required></textarea><br><br>

        <label for="route-distance">Route Distance (in km):</label>
        <input type="number" id="route-distance" name="route-distance" required><br><br>

        <label for="route-duration">Route Duration (in hours):</label>
        <input type="number" id="route-duration" name="route-duration" required><br><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
