<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <!-- You can include any CSS or JS files here -->
</head>
<body>
    <?php $this->load->view('Templets/header'); // Load the header template ?>
    
    <?php $this->load->view('Templets/leftnavbar'); // Load the left navbar template ?>
    
    <div class="content">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Admin Dashboard</h2>

        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Upload Reporting Officers</h5>
                        <p class="card-text">Upload and manage reporting officers' data.</p>
                        <a href="<?php echo site_url('admin/upload_officers'); ?>" class="btn btn-primary">Upload</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Generate Random Passwords</h5>
                        <p class="card-text">Generate passwords for reporting officers.</p>
                        <a href="<?php echo site_url('admin/generate_passwords'); ?>" class="btn btn-primary">Generate</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Manage Attendance</h5>
                        <p class="card-text">Upload and view attendance data for employees.</p>
                        <a href="<?php echo site_url('admin/manage_attendance'); ?>" class="btn btn-primary">Manage Attendance</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Grading Reports</h5>
                        <p class="card-text">Grade reporting officers and view performance appraisals.</p>
                        <a href="<?php echo site_url('admin/view_grades'); ?>" class="btn btn-primary">View Grading</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- More features can be added below -->
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">View Appraisals</h5>
                        <p class="card-text">Access employee appraisals.</p>
                        <a href="<?php echo site_url('admin/view_appraisals'); ?>" class="btn btn-primary">View Appraisals</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Submit Performance</h5>
                        <p class="card-text">Submit performance reports for your team.</p>
                        <a href="<?php echo site_url('admin/submit_performance'); ?>" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Upload Non-Teaching Staff Data</h5>
                        <p class="card-text">Manage data for non-teaching employees.</p>
                        <a href="<?php echo site_url('admin/upload_non_teaching'); ?>" class="btn btn-primary">Upload</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <?php $this->load->view('Templets/footer'); // Load the footer template ?>
    <p><a href="<?php echo site_url('login/logout'); ?>">Logout</a></p>
</body>
</html>
