<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            height: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }

        .main {
            margin-left: 200px;
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="<?= base_url('dashboard') ?>">Dashboard</a>
        <?php if(session()->get('role') == 'admin'): ?>
            <a href="<?= base_url('admin/users') ?>">Manage Users</a>
            <a href="<?= base_url('admin/submissions') ?>">Manage Submissions</a>
        <?php endif; ?>
        <a href="<?= base_url('submissions') ?>">Your Submissions</a>
        <a href="<?= base_url('logout') ?>">Logout</a>
    </div>

    <div class="main">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Dashboard</h2>
                </div>
                <div class="card-body">
                    <h3>Welcome, <?= session()->get('username') ?></h3>
                    <?php if(session()->get('role') == 'admin'): ?>
                        <p>You are logged in as an Admin.</p>
                    <?php else: ?>
                        <p>You are logged in as a User.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
