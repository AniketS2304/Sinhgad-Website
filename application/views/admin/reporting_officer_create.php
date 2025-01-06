<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reporting Officer</title>
</head>
<body>
    <h1>Create New Reporting Officer</h1>
    <form action="<?php echo site_url('reporting_officer/store'); ?>" method="POST">
        <label for="empid">Employee ID:</label>
        <input type="text" id="empid" name="empid" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Create Officer</button>
    </form>
</body>
</html>
