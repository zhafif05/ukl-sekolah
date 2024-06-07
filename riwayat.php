


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Send Data</h1>
    <form action="send_data.php" method="post"><br>
        <label for="data">Data:</label>
        <textarea id="data" name="data" required></textarea><br>
        <button type="submit">Send</button>
    </form>
    <h2>User History</h2>
    <form action="user_history.php" method="get">
        <label for="history_user_id">User ID:</label>
        <input type="text" id="history_user_id" name="user_id" required><br>
        <button type="submit">View History</button>
    </form>
</body>
</html>
