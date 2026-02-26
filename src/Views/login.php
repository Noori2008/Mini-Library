

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
                <h3 class="fw-bold mb-3">Admin Login</h3>
                <p class="text-muted mb-4">Please enter your credentials to continue.</p>
                
                <form>
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Admin Email</label>
                        <input type="email" class="form-control form-control-lg fs-6" placeholder="admin@university.edu">
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold">Password</label>
                        <input type="password" class="form-control form-control-lg fs-6">
                    </div>
                    <div class="d-grid">
                        <a href="../../src/Views/Admin%20Dashboard.php" class="btn btn-primary btn-lg fs-6 shadow-sm">
                        Sign In
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

</body>
</html>

