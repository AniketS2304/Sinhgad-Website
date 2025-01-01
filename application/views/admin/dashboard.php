<!-- application/views/admin/dashboard.php -->

<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/leftnavbar'); ?>

<div class="content">
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is the main content area.</p>

    <h2>Welcome to Admin Dashboard</h2>
    <p>You are successfully logged in!</p>
    <a href="<?php echo base_url('admin/logout'); ?>">Logout</a>

</div>

<?php $this->load->view('templates/footer'); ?>