<!-- application/views/login.php -->
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <h2>Admin Login</h2>
    <form action="<?= site_url('login/validate'); ?>" method="post">
        <label>Username</label>
        <input type="text" name="username" required><br><br>
        <label>Password</label>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
