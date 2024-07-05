<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Submissions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .logout {
            display: block;
            text-align: center;
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header text-center">
                <h2>Your Submissions</h2>
                <a href="<?= base_url('logout') ?>" class="btn btn-danger float-right">Logout</a>
            </div>
            <div class="card-body">
                <a href="<?= base_url('submissions/create') ?>" class="btn btn-primary mb-3">Create Submission</a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
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
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>
