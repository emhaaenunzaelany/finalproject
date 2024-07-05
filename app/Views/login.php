<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header text-center">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form action="<?= base_url('auth/authenticate') ?>" method="post">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <?php if(session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger mt-3"><?= session()->getFlashdata('msg') ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
