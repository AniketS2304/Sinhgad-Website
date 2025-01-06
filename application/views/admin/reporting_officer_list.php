<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting Officer List</title>
</head>
<body>
    <h1>Reporting Officers</h1>
    <a href="<?php echo site_url('reporting_officer/create'); ?>">Add New Officer</a>
    <table border="1">
        <thead>
            <tr>
                <th>Emp ID</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($officers as $officer): ?>
            <tr>
                <td><?php echo $officer->empid; ?></td>
                <td><?php echo $officer->email; ?></td>
                <td><?php echo $officer->mobile; ?></td>
                <td>
                    <a href="<?php echo site_url('reporting_officer/edit/'.$officer->empid); ?>">Edit</a>
                    <a href="<?php echo site_url('reporting_officer/delete/'.$officer->empid); ?>" onclick="return confirm('Are you sure you want to delete?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
