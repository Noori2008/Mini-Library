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
    <link rel="stylesheet" href="../../public/assets/css/navsidebar.css">
</head>

<body>

    <!-- NAV & SIDE BAR -->
    <?php include '../../src/Includes/navsidebar.php' ?>

    <main class="content" id="main-content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12-lg">
                    <h1 class="my-4">Dashboard</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="card hover-card" style="width: 18rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Members</h5>
                            <h3 class="card-text text-center">53</h3>
                            <a href="#" class="btn btn-primary d-block justify-content-center">Member Directory</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card hover-card" style="width: 18rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Guest</h5>
                            <h3 class="card-text text-center">120</h3>
                            <a href="#" class="btn btn-primary d-block justify-content-center">Guest Management</a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card hover-card" style="width: 18rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Total Rentals</h5>
                            <h3 class="card-text text-center">100</h3>
                            <a href="#" class="btn btn-primary d-block justify-content-center">Book Management</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card hover-card" style="width: 18rem; margin: auto;">
                        <div class="card-body">
                            <h5 class="card-title text-center">Overdue</h5>
                            <h3 class="card-text text-center">100</h3>
                            <a href="#" class="btn btn-primary d-block justify-content-center">Fine Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <?php include __DIR__ . '../../Includes/libariandashboardchart.php'; ?>
            </div>

            <div class="col-6 mt-3">
                <h5 class="text-secondary fw-bold mb-4">Catalog</h5>

                <div class="d-flex flex-wrap align-items-center gap-2 mb-3">

                    <div class="input-group flex-grow-1" style="max-width: 500px;">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Search">
                    </div>

                    <button class="btn btn-teal px-4 btn-primary">Add Book</button>
                    <button class="btn btn-navy px-4 text-white btn-primary">Bulk Import</button>
                    <button class="btn btn-navy px-4 text-white btn-primary">Export</button>
                </div>

                <div class="d-flex gap-4 text-secondary small">
                    <span><i class="bi bi-search me-1"></i> Category Filter</span>
                    <span>Availability</span>
                </div>
            </div>
        </div>

    </main>


    <script src="public/assets/libs/bootstrap-5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script src="../../public/assets/js/navsidebar.js"></script>
</body>

</html>