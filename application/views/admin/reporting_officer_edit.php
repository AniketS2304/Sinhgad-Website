<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reporting Officer</title>
</head>
<body>
    <h1>Edit Reporting Officer</h1>
    <form action="<?php echo site_url('reporting_officer/update/'.$officer->empid); ?>" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $officer->email; ?>" required><br>

        <label for="mobile">Mobile:</label>
        <input type="text" id="mobile" name="mobile" value="<?php echo $officer->mobile; ?>" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Update Officer</button>
    </form>
</body>
</html>
