<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/navsidebar.css">
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>LMS Home Page</title>
</head>

<body>

    <?php include '../Includes/navsidebar.php' ?>

    <main class="content" id="main-content">
        <?php

        require_once '../../Config/DBConnection.php';


        $db = new DBConnection();
        $conn = $db->conn;

        $query = "SELECT title, author, isbn, status FROM books LIMIT 12";
        $result = $conn->query($query);
        ?>

        <div class="container mt-5">
            <h3>Available Books</h3>
            <div class="row">
                <?php while ($book = $result->fetch_assoc()): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $book['title']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $book['author']; ?></h6>
                                <p class="small text-muted">ISBN: <?php echo $book['isbn']; ?></p>

                                <?php if ($book['status'] == 'Available'): ?>
                                    <button class="btn btn-sm btn-success">Borrow</button>
                                <?php else: ?>
                                    <span class="badge bg-danger">Issued</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>

    <!-- <?php include '../../Includes/footer.php' ?> -->

    <script src="../../public/assets/js/navsidebar.js"></script>
    <script src="../../public/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>

session_start();
require_once '../Config/DBConnection.php';

if (!isset($_SESSION['roleid'])) {
header("Location: ../../index.php");
exit();
}