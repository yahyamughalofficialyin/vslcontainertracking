<?php
include 'config.php';
session_start();

if (isset($_SESSION['admin_id'])) {
  header("Location: index.php");
  exit();
}

if (isset($_POST['submit'])) {
    $input = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare a SQL statement to retrieve the admin details
    $stmt = $conn->prepare("SELECT id, email, phone, password FROM admin WHERE email = ? OR phone = ?");
    $stmt->bind_param("ss", $input, $input);
    $stmt->execute();
    $stmt->store_result();
    
    // If admin found, verify password
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $dbEmail, $dbPhone, $dbPassword);
        $stmt->fetch();
        
        if (password_verify($password, $dbPassword)) {
            // Set session variable
            $_SESSION['admin_id'] = $id;
            header("Location: index.php"); // Redirect to admin dashboard
            exit();
        } else {
            $error = "Invalid password!";
        }
    } else {
        $error = "Invalid email or phone number!";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">
<head>
    <?php include "head.php"; ?>
</head>
<body>
<main class="main" id="top">
    <div class="container-fluid">
        <div class="row min-vh-100 bg-100">
            <div class="col-6 d-none d-lg-block position-relative">
                <div class="bg-holder" style="background-image:url(assets/img/generic/14.jpg);background-position: 50% 20%;"></div>
            </div>
            <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-9 col-xl-8 col-xxl-6">
                        <div class="card">
                            <div class="card-header bg-circle-shape bg-shape text-center p-2">
                                <img src="../../assets/Logos/SVGs/logo.svg" style="width: 50%;" alt="">
                            </div>
                            <div class="card-body p-4">
                                <h3 class="text-center">Admin Login</h3>
                                <?php if (!empty($error)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>
                                <form method="POST" action="">
                                    <div class="mb-3">
                                        <label class="form-label" for="split-login-email">Email address <b>OR</b> Phone Number</label>
                                        <input class="form-control" id="split-login-email" name="email" type="text" required />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="split-login-password">Password</label>
                                        <input class="form-control" id="split-login-password" name="password" type="password" required />
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Log in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="vendors/popper/popper.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/anchorjs/anchor.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="vendors/fontawesome/all.min.js"></script>
<script src="vendors/lodash/lodash.min.js"></script>
<script src="vendors/list.js/list.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>
