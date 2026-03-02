<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center vh-100">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 shadow-lg rounded-4 overflow-hidden bg-white p-0 d-flex flex-column flex-md-row">

                <div class="col-md-5 bg-primary text-white p-5 d-none d-md-flex flex-column justify-content-center">
                    <h2 class="fw-bold">University Library Management System</h2>
                    <p class="small opacity-75"> v2.0</p>
                </div>

                <div class="col-md-7 p-5">
                    <h3 class="fw-bold mb-3"> Login</h3>
                    <p class="text-muted mb-4">Please enter your credentials to continue.</p>

                    <form name="loginform" action="../Controllers/LoginController.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Username</label>
                            <input type="text" class="form-control form-control-lg fs-6"
                                placeholder="Enter your username" oninput="username_validation()"
<<<<<<< HEAD
                                onblur="username_validation()" id="username" name="username"
                                required>
=======
                                onblur="username_validation()" id="username" name="username" required>
>>>>>>> 8e397bebe437120c38b362ded02f3ca22dab9951
                            <span id="usernameerror" class="small text-danger"></span>
                        </div>
                        <div class="mb-4">
                            <label class="form-label small fw-bold">Password</label>
                            <input type="password" class="form-control form-control-lg fs-6"
                                placeholder="Enter your password" oninput="password_validation()"
<<<<<<< HEAD
                                onblur="password_validation()" id="password" name="password"
                                required>
=======
                                onblur="password_validation()" id="password" name="password" required>
>>>>>>> 8e397bebe437120c38b362ded02f3ca22dab9951
                            <span id="passworderror" class="small text-danger"></span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button type="submit" name="admin-login" class="btn btn-primary btn-lg fs-6 shadow-sm">
                                        
                                            Sign In
                                        </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    
                                        <a href="register.php" class="btn btn-primary btn-lg fs-6 ">
                                            Sign Up
                                        </a>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="../../public/assets/js/loginValidation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>