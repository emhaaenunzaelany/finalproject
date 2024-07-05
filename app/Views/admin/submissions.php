<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Submissions</title>
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
                    <h2>Manage Submissions</h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($submissions as $submission): ?>
                            <tr>
                                <td><?= esc($submission['title']) ?></td>
                                <td><?= esc($submission['description']) ?></td>
                                <td>
                                    <?php if ($submission['status'] == 'pending'): ?>
                                        <span class="badge badge-warning">Pending</span>
                                    <?php elseif ($submission['status'] == 'approved'): ?>
                                        <span class="badge badge-success">Approved</span>
                                    <?php elseif ($submission['status'] == 'rejected'): ?>
                                        <span class="badge badge-danger">Rejected</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($submission['status'] == 'pending'): ?>
                                        <a href="<?= base_url('admin/approve/' . $submission['id']) ?>" class="btn btn-success btn-sm">Approve</a>
                                        <a href="<?= base_url('admin/reject/' . $submission['id']) ?>" class="btn btn-danger btn-sm">Reject</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Back to Admin Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
