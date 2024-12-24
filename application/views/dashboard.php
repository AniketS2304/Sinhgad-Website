<!-- application/views/dashboard.php -->
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome to Admin Dashboard</h2>
    <a href="<?= site_url('admin_dashboard/manage_employees'); ?>">Manage Employees</a><br>
    <a href="<?= site_url('login/logout'); ?>">Logout</a>
</body>
</html>
