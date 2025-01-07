<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <h1>Change Password</h1>

    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form action="<?php echo site_url('reporting_officer/update_password'); ?>" method="POST">
        <input type="hidden" name="empid" value="<?php echo $officer->empid; ?>">

        <label for="old_password">Old Password:</label>
        <input type="password" name="old_password" required><br><br>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" required><br><br>

        <button type="submit">Change Password</button>
    </form>

    <br>
    <a href="<?php echo site_url('reporting_officer/dashboard'); ?>">Back to Dashboard</a>
</body>
</html>
