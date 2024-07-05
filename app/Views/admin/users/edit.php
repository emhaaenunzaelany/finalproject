<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
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
                        <h2>Edit User</h2>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/users/update/' . $user['id']) ?>" method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" class="form-control" value="<?= esc($user['username']) ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password (leave blank to keep current password):</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="role">Role:</label>
                                <select id="role" name="role" class="form-control">
                                    <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                    <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Update User</button>
                            <a href="<?= base_url('admin/users') ?>" class="btn btn-secondary">Back to Users</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
