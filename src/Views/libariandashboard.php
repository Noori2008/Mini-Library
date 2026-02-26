<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../public/assets/css/dashboradstyle.css">
</head>

<body>
    <div class="container-fluid p-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-0">Welcome! Admin</h3>
                <small class="text-muted">FEB 26, 2026 | Thursday</small>
            </div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #F8FAF9;">
                            <i class="bi bi-book text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Total Books</p>
                            <h4 class="fw-bold mb-0" style="color: #4A6741;">12,450</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #F8FAF9;">
                            <i class="bi bi-journal-check text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Borrowed</p>
                            <h4 class="fw-bold mb-0" style="color: #4A6741;">680</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #FEE2E2;">
                            <i class="bi bi-exclamation-triangle text-danger" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Overdue</p>
                            <h4 class="fw-bold mb-0 text-danger">24</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card stat-card p-3 shadow-sm">
                    <div class="d-flex align-items-center">
                        <div class="p-3 rounded-3 me-3" style="background-color: #F8FAF9;">
                            <i class="bi bi-people text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Members</p>
                            <h4 class="fw-bold mb-0" style="color: #4A6741;">15,000</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4">
    <h5 class="fw-bold mb-3" style="color: #4A6741;">Quick Actions</h5>
    <ul class="nav nav-tabs border-0 mb-2" id="quickActionTabs" role="tablist" style="border-bottom: 1px solid #E2E8F0 !important;">
        <li class="nav-item shadow-none">
            <button class="nav-link active custom-tab" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button">Overview</button>
        </li>
        <li class="nav-item">
            <button class="nav-link custom-tab" id="add-book-tab" data-bs-toggle="tab" data-bs-target="#add-book" type="button">Add New Book</button>
        </li>
        <li class="nav-item">
            <button class="nav-link custom-tab" id="register-member-tab" data-bs-toggle="tab" data-bs-target="#register" type="button">Register Member</button>
        </li>
        <li class="nav-item">
            <button class="nav-link custom-tab" id="issue-book-tab" data-bs-toggle="tab" data-bs-target="#issuebook" type="button">Issue Book</button>
        </li>
        <li class="nav-item">
            <button class="nav-link custom-tab" id="return-book-tab" data-bs-toggle="tab" data-bs-target="#returnbook" type="button">Return Book</button>
        </li>
    </ul>

    <div class="tab-content pt-3" id="quickActionContent">
        
        <div class="tab-pane fade show active" id="overview" role="tabpanel">
            
            <?php include '../Includes/overduetable.php'; ?>
            
        </div>

        <div class="tab-pane fade" id="add-book" role="tabpanel">
            <?php include '../Includes/addbook.php'; ?>
        </div>

        <div class="tab-pane fade" id="register" role="tabpanel">
            <?php include '../Includes/registerstudent.php'; ?>
        </div>
        <div class="tab-pane fade" id="issuebook" role="tabpanel">
            <?php include '../Includes/issuebook.php'; ?>
        </div>
        <div class="tab-pane fade" id="returnbook" role="tabpanel">
            <?php include '../Includes/returnbook.php'; ?>
        </div>
        
    </div>
</div>

                

                

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>