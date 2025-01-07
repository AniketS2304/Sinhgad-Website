<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting Officer Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $officer->empid; ?></h1>

    <h3>Your Profile</h3>
    <table border="1">
        <tr>
            <th>Emp ID</th>
            <td><?php echo $officer->empid; ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?php echo $officer->email; ?></td>
        </tr>
        <tr>
            <th>Mobile</th>
            <td><?php echo $officer->mobile; ?></td>
        </tr>
    </table>

    <br>
    <a href="<?php echo site_url('reporting_officer/edit_profile/' . $officer->empid); ?>">Edit Profile</a> |
    <a href="<?php echo site_url('reporting_officer/change_password/' . $officer->empid); ?>">Change Password</a>
</body>
</html>
