<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/assets/css/dashboradstyle.css">
    <link rel="stylesheet" href="../../public/assets/libs/bootstrap-5.3.8/css/bootstrap.min.css">
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
                    <h3 class="fw-bold mb-3"> Sign Up</h3>
                    <p class="text-muted mb-4">Please enter your details to create an account.</p>
                    
                    <form name="registerform" action="../../src/Views/AdminDashboard.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Username</label>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Enter your username" required>
                            
                        </div>
                        
                        
                        <div class="mb-4">
                            <label class="form-label small fw-bold">Password</label>
                            <input type="password" class="form-control form-control-lg fs-6" placeholder="Enter your password" required>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Full Name</label>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Enter your full name" required>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">NIC</label>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Enter your full name" required>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Email</label>
                            <input type="text" class="form-control form-control-lg fs-6" placeholder="Enter your email address" required>
                            
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fs-6 shadow-sm">
                                Sign Up
                            </button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

</body>
</html>
    