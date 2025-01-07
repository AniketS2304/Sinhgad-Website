<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting Officer List</title>
</head>
<body>
    <h1>Reporting Officers</h1>

    <!-- Flash messages for success or error -->
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <!-- Add New Officer Link -->
    <a href="<?php echo site_url('admin/reporting_officers/add'); ?>">Add New Officer</a>

    <!-- Officers Table -->
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
                    <a href="<?php echo site_url('admin/reporting_officers/edit/' . $officer->empid); ?>">Edit</a>
                    <a href="<?php echo site_url('admin/reporting_officers/delete/' . $officer->empid); ?>" onclick="return confirm('Are you sure you want to delete this officer?');">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
