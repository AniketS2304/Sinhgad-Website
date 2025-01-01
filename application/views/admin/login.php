<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/leftnavbar'); ?>


<head>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <div class="login-page">
        <h2>Admin Login</h2>
        <?php if (isset($error)) { echo '<p style="color:red;">'.$error.'</p>'; } ?>
        <form action="<?php echo base_url('admin/login_process'); ?>" method="POST">
            <label>Username:</label>
            <input type="text" name="username" required><br>
            
            <label>Password:</label>
            <input type="password" name="password" required><br>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>


<?php $this->load->view('templates/footer'); ?>
