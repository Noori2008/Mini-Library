<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniLib | Management Console</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-white bg-white border-bottom sticky-top py-2">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <button class="btn btn-light border me-3" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#adminSidebar">
                    <i class="bi bi-text-left fs-5"></i>
                </button>
                <a class="navbar-brand fw-bolder text-dark" href="#">
                    <span class="text-primary">U</span>L<span class="text-primary">S</span> <span class="fw-light opacity-75">Admin</span>
                </a>
            </div>

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-dark rounded-3 px-3 fw-bold d-none d-md-block" data-bs-toggle="modal"
                    data-bs-target="#addModal">
                    <i class="bi bi-plus-lg me-1"></i> Add Librarian
                </button>
                <div class="vr mx-1 my-2"></div>
                <div class="dropdown">
                    <button
                        class="btn btn-link text-decoration-none dropdown-toggle d-flex align-items-center gap-2 p-0 shadow-none"
                        data-bs-toggle="dropdown">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold small shadow-sm"
                            style="width: 32px; height: 32px;">
                            AD
                        </div>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-3 rounded-3 p-2">
                        <li>
                            <h6 class="dropdown-header">System Admin</h6>
                        </li>
                        <li><a class="dropdown-item rounded-2 py-2 small" href="#"><i
                                    class="bi bi-person me-2"></i>Profile</a></li>
                        <li><a class="dropdown-item rounded-2 py-2 small" href="#"><i
                                    class="bi bi-gear me-2"></i>Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item rounded-2 py-2 small text-danger fw-bold"
                                href="../../src/Views/login.php"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start border-0 shadow" tabindex="-1" id="adminSidebar" style="width: 280px;">
        <div class="offcanvas-header border-bottom py-4">
            <h5 class="offcanvas-title fw-bold text-dark">Management</h5>
            <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column p-0">
            <div class="list-group list-group-flush pt-3 flex-grow-1">
                <a href="#" class="list-group-item list-group-item-action border-0 py-3 px-4 active">
                    <i class="bi bi-grid-1x2-fill me-3"></i>Dashboard
                </a>
                <a href="#" class="list-group-item list-group-item-action border-0 py-3 px-4 text-muted">
                    <i class="bi bi-people me-3"></i>Staff Management
                </a>
                <a href="#" class="list-group-item list-group-item-action border-0 py-3 px-4 text-muted">
                    <i class="bi bi-bag-heart me-3"></i>Guest/Member Accounts
                </a>
                <a href="#" class="list-group-item list-group-item-action border-0 py-3 px-4 text-muted">
                    <i class="bi bi-journal-bookmark me-3"></i>Book Inventory
                </a>
                <a href="#" class="list-group-item list-group-item-action border-0 py-3 px-4 text-muted">
                    <i class="bi bi-activity me-3"></i>Activity Logs
                </a>
            </div>
            <div class="p-3 border-top bg-light">
                <a href="../../src/Views/login.php" class="btn btn-outline-danger w-100 border-0 fw-bold small py-2">
                    <i class="bi bi-box-arrow-left me-2"></i>Terminate Session
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 px-lg-5">

        <div class="row mb-5 align-items-center">
            <div class="col">
                <h4 class="fw-bold mb-1">Staff Access Directory</h4>
                <p class="text-muted small mb-0">Control librarian credentials and system access levels.</p>
            </div>
            <div class="col-md-3 mt-3 mt-md-0">
                <div class="input-group input-group-sm">
                    <span class="input-group-text bg-white border-end-0 text-muted shadow-none"><i
                            class="bi bi-search"></i></span>
                    <input type="text" class="form-control border-start-0 ps-0 shadow-none"
                        placeholder="Search records...">
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light-subtle border-bottom">
                        <tr class="text-muted small text-uppercase">
                            <th class="ps-4 py-3 fw-bold border-0" style="letter-spacing: 1px;">Identity</th>
                            <th class="py-3 fw-bold border-0">Contact</th>
                            <th class="py-3 fw-bold border-0">Designation</th>
                            <th class="py-3 fw-bold border-0 text-center">Status</th>
                            <th class="pe-4 py-3 fw-bold border-0 text-end">Quick Actions</th>
                        </tr>
                    </thead>
                    <tbody class="border-top-0">
                        <tr>
                            <td class="ps-4 py-4">
                                <div class="d-flex align-items-center">
                                    
                                    <div>
                                        <div class="fw-bold text-dark">Amodh Kushan</div>
                                        <div class="text-muted x-small font-monospace">UID: #*****</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="small fw-medium">amodhkushan69@gmail.com</div>
                                <div class="text-muted x-small">Senior Dept Librarian</div>
                            </td>
                            <td>
                                <span class="badge bg-white text-dark border px-3 py-2 fw-semibold rounded-3">Master
                                    Admin</span>
                            </td>
                            <td class="text-center">
                                <div
                                    class="d-inline-flex align-items-center bg-success-subtle text-success px-3 py-1 rounded-pill small fw-bold border border-success-subtle">
                                    <span class="p-1 bg-success rounded-circle me-2"></span> Active
                                </div>
                            </td>
                            <td class="pe-4 text-end">
                                <div class="btn-group border rounded-3 p-1 bg-white shadow-sm">
                                    <button class="btn btn-sm btn-white border-0 text-secondary px-3" title="Edit"
                                        data-bs-toggle="modal" data-bs-target="#updateModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-sm btn-white border-0 text-warning px-3" title="Suspend">
                                        <i class="bi bi-slash-circle"></i>
                                    </button>
                                    <button class="btn btn-sm btn-white border-0 text-danger px-3" title="Remove">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td class="ps-4 py-4">
                                <div class="d-flex align-items-center opacity-75">
                                    
                                    <div>
                                        <div class="fw-bold text-dark">Jayodya Dew</div>
                                        <div class="text-muted x-small font-monospace">UID: #*****</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="small fw-medium">jayodyadew@gmail.com</div>
                                <div class="text-muted x-small">Archive Section</div>
                            </td>
                            <td>
                                <span
                                    class="badge bg-white text-muted border px-3 py-2 fw-semibold rounded-3">Librarian</span>
                            </td>
                            <td class="text-center">
                                <div
                                    class="d-inline-flex align-items-center bg-danger-subtle text-danger px-3 py-1 rounded-pill small fw-bold border border-danger-subtle">
                                    <span class="p-1 bg-danger rounded-circle me-2"></span> Suspended
                                </div>
                            </td>
                            <td class="pe-4 text-end">
                                <div class="btn-group border rounded-3 p-1 bg-white shadow-sm">
                                    <button class="btn btn-sm btn-white border-0 text-secondary px-3"
                                        data-bs-toggle="modal" data-bs-target="#updateModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-sm btn-white border-0 text-success px-3" title="Activate">
                                        <i class="bi bi-check-circle"></i>
                                    </button>
                                    <button class="btn btn-sm btn-white border-0 text-danger px-3">
                                        <i class="bi bi-trash3"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-body p-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold m-0">Create Staff Access</h5>
                        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-bold text-muted">Identity:</label>
                        <input type="text" class="form-control bg-light border-0 p-3 rounded-3 shadow-none"
                            placeholder="">
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-bold text-muted">Email Address</label>
                        <input type="email" class="form-control bg-light border-0 p-3 rounded-3 shadow-none"
                            placeholder="">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary p-3 fw-bold rounded-3 shadow-sm border-0">Grant System
                            Permission</button>
                        <button class="btn btn-link text-muted text-decoration-none small"
                            data-bs-dismiss="modal">Discard Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="updateModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4 text-center">
                <div class="modal-body p-5">
                    <div class="bg-primary-subtle text-primary rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                        style="width: 60px; height: 60px;">
                        <i class="bi bi-pencil-square fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Modify User</h5>
                    <p class="text-muted small mb-4">Editing profile for ID: <strong>#LIB-991</strong></p>
                    <div class="mb-3 text-start">
                        <label class="form-label small fw-bold text-muted text-uppercase">Update Full Name</label>
                        <input type="text" class="form-control bg-light border-0 p-3 rounded-3"
                            value="Professor Aris Thorne">
                    </div>
                    <button class="btn btn-dark w-100 p-3 fw-bold rounded-3 mb-2">Save Profile Changes</button>
                    <button class="btn btn-light w-100 p-3 fw-bold rounded-3 text-muted"
                        data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>