<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('templates/header'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        .header {
            background: #fff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .logo {
            width: 40px;
            height: 40px;
            border-radius: 4px;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .sidebar {
            background: #1a1a1a;
            width: 250px;
            position: fixed;
            top: 64px;
            bottom: 0;
            padding: 1rem;
        }

        .nav-item {
            color: #fff;
            text-decoration: none;
            padding: 0.75rem 1rem;
            display: block;
            margin: 0.5rem 0;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .nav-item:hover {
            background: #333;
        }

        .main-content {
            margin-left: 250px;
            padding: 2rem;
            margin-top: 64px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .stat-title {
            color: #666;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1a1a1a;
        }

        .activities {
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .activity-item {
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .footer {
            background: #1a1a1a;
            color: #fff;
            padding: 2rem;
            margin-left: 250px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            color: #fff;
            margin-bottom: 1rem;
            font-size: 0.875rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .footer-section p {
            color: #999;
            font-size: 0.875rem;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .main-content, .footer {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo-section">
            <img src="https://images.unsplash.com/photo-1557683316-973673baf926?w=128&h=128&fit=crop" alt="Logo" class="logo">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="user-section">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=32&h=32&fit=crop" alt="User" class="user-avatar">
            <span>John Doe</span>
        </div>
    </header>

    <nav class="sidebar">
        <a href="#" class="nav-item">Dashboard</a>
        <a href="#" class="nav-item">Add Reportig officer</a>
        <a href="#" class="nav-item">Reporting Officers</a>
        <a href="#" class="nav-item">Employees</a>
        <a href="#" class="nav-item">Performance Appraisals</a>
        <a href="#" class="nav-item">Notifications</a>
        <a href="#" class="nav-item">System Settings</a>
    </nav>

    <main class="main-content">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">Total Officers</div>
                <div class="stat-value">25</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Total Employees</div>
                <div class="stat-value">150</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Pending Appraisals</div>
                <div class="stat-value">12</div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Actions Required</div>
                <div class="stat-value">5</div>
            </div>
        </div>

        <div class="activities">
            <h2>Recent Activities</h2>
            <div class="activity-item">
                <strong>Jane Smith</strong> submitted appraisal • 2 hours ago
            </div>
            <div class="activity-item">
                <strong>Mike Johnson</strong> added as reporting officer • 4 hours ago
            </div>
            <div class="activity-item">
                <strong>Sarah Wilson</strong> updated profile • 5 hours ago
            </div>
        </div>
    </main>

</body>
</html>

<?php $this->load->view('templates/footer'); ?>