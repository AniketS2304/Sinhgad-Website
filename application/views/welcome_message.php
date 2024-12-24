<html>
<head>
    <title>Welcome to CodeIgniter!</title>
</head>
<body>
    <h1>Hello, CodeIgniter is working!</h1>
    <h2>Users:</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['name']; ?> - <?php echo $user['email']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
