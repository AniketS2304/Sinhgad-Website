<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reporting Officer</title>
</head>
<body>
    <h1>Edit Reporting Officer</h1>
    <form action="<?php echo site_url('admin/reporting_officers/edit/' . $officer->empid); ?>" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $officer->email; ?>" required>
    
    <label for="mobile">Mobile:</label>
    <input type="text" name="mobile" value="<?php echo $officer->mobile; ?>" required>
    
    <button type="submit">Update Officer</button>
</form>

</body>
</html>
