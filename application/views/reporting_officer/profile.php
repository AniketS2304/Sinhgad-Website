<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form action="<?php echo site_url('reporting_officer/update_profile'); ?>" method="POST">
        <input type="hidden" name="empid" value="<?php echo $officer->empid; ?>">

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $officer->email; ?>" required><br><br>

        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" value="<?php echo $officer->mobile; ?>" required><br><br>

        <button type="submit">Update Profile</button>
    </form>

    <br>
    <a href="<?php echo site_url('reporting_officer/dashboard'); ?>">Back to Dashboard</a>
</body>
</html>
