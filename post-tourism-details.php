<!DOCTYPE html>
<html>
<head>
    <title>Post Tourism Details</title>
</head>
<body align="center">
    <h1>Post Tourism Details</h1>

    <form action="/akhila/post-tourism-process.php" method="post">
        <label for="tour-title">Tour Title:</label>
        <input type="text" id="tour-title" name="tour-title" required><br><br>

        <label for="tour-description">Tour Description:</label>
        <textarea id="tour-description" name="tour-description" rows="4" cols="50" required></textarea><br><br>

        <label for="tour-date">Tour Date:</label>
        <input type="date" id="tour-date" name="tour-date" required><br><br>

        <label for="tour-location">Tour Location:</label>
        <input type="text" id="tour-location" name="tour-location" required><br><br>

        <label for="tour-price">Tour Price:</label>
        <input type="number" id="tour-price" name="tour-price" required><br><br>

        <button type="submit">Post Details</button>
    </form>
</body>
</html>