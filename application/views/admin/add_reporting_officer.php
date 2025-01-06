<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('templates/header'); ?>
    <?php $this->load->view('templates/leftnavbar'); ?>
    <title>Add Reporting Officer</title>
    <style>
        /* Global Reset */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Sidebar Styles */
        .sidebar {
            position: fixed; /* Fixed position for the sidebar */
            left: 0;
            top: 0;
            width: 250px; /* Sidebar width */
            height: 100%; /* Full height */
            background-color: #fff;
            border-right: 1px solid #ddd;
            padding-top: 20px;
            overflow-y: auto; /* Makes sidebar scrollable if it overflows */
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin: 8px 0;
            padding-left: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: black;
            font-size: 14px;
            display: block;
            padding: 5px 10px;
        }

        .sidebar .menu {
            margin-bottom: 10px;
            position: relative;
        }

        .sidebar .menu .vertical-line {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background-color: purple;
        }

        /* Main Content */
        .main-content {
            margin-left: 260px; /* Adding margin for the sidebar */
            padding: 20px;
        }

        /* Form Container */
        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            color: black;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container .form-group {
            margin-bottom: 15px;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 16px;
        }

        .form-container input {
            width: 100%;
            padding: 12px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .form-container button {
            padding: 12px 20px;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            border: none;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header class="header">
        <!-- Include Header Here -->
    </header>

    <nav class="sidebar">
        <a href="#"><strong>STES at A Glance</strong></a>
        <div class="menu">
            <div class="vertical-line"></div>
            <ul>
                <li><a href="#">4 Locations</a></li>
                <li><a href="#">12 Campuses</a></li>
                <li><a href="#">95000+ Students</a></li>
                <li><a href="#">10+ Programs</a></li>
            </ul>
        </div>

        <a href="#"><strong>Post Graduate & Under Graduate Programs</strong></a>
        <div class="menu">
            <div class="vertical-line"></div>
            <ul>
                <li><a href="#">Engineering</a></li>
                <li><a href="#">Management</a></li>
                <li><a href="#">Pharmacy</a></li>
                <li><a href="#">Architecture</a></li>
                <li><a href="#">Health Science</a></li>
                <li><a href="#">Hotel Management</a></li>
                <li><a href="#">Law</a></li>
                <li><a href="#">Commerce & Science</a></li>
                <li><a href="#">School</a></li>
                <li><a href="#">Education</a></li>
            </ul>
        </div>

        <a href="#"><strong>Apply for Admission</strong></a>
        <div class="menu">
            <div class="vertical-line"></div>
            <ul>
                <li><a href="#">Enquiry</a></li>
                <li><a href="#">Generate UID</a></li>
                <li><a href="#">Pay fee for Admission Brochure</a></li>
                <li><a href="#">Download Admission Brochure</a></li>
                <li><a href="#">Fill Admission Form</a></li>
                <li><a href="#">Pay Fees For Admission Confirmation</a></li>
                <li><a href="#">Download Admission Form</a></li>
                <li><a href="#">Complete Document Verification at The Institute</a></li>
                <li><a href="#">Fill Hostel Form</a></li>
                <li><a href="#">Pay Hostel /Hostel & Mess Fees</a></li>
            </ul>
        </div>
    </nav>

    <main class="main-content">
        <div class="form-container">
            <h2>Add Reporting Officer</h2>

            <?php if(isset($error)) { ?>
                <div class="error"><?= $error; ?></div>
            <?php } ?>

            <form action="<?= base_url('admin/add_reporting_officer'); ?>" method="POST">
                <div class="form-group">
                    <label for="empid">Employee ID</label>
                    <input type="text" id="empid" name="empid" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" id="mobile" name="mobile" required>
                </div>

                <button type="submit">Add Reporting Officer</button>
            </form>
        </div>
    </main>

    <?php $this->load->view('templates/footer'); ?>
</body>
</html>
