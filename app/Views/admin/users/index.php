<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <?php include('sidebar.php'); ?>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Manage Users</h2>
                        <a href="<?= base_url('admin/users/create') ?>" class="btn btn-primary float-right">Add User</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= esc($user['username']) ?></td>
                                    <td><?= esc($user['role']) ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/users/edit/' . $user['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url('admin/users/delete/' . $user['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <a href="<?= base_url('admin') ?>" class="btn btn-secondary">Back to Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
