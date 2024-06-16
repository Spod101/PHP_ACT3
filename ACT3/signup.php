<?php
session_start();

// Check if the user is already signed in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: index.php');
    exit;
}

$signup_error = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['signin'] = true;
    $_SESSION['username'] = $username;
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Signup</b>Page</a>
    </div>
    <!-- Signup form -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Create your account</p>

            <?php if ($signup_error != ''): ?>
            <p class="text-danger"><?= $signup_error ?></p>
            <?php endif; ?>

            <form action="signup.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <p class="mb-1 row justify-content-center">
            Already have an account? <a href="login.php">Login here</a>
        </p>
        <!-- /.login-card-body -->
    </div>
</div>

<!-- /.login-box -->

<!-- AdminLTE JS -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
