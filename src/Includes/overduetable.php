<?php
// Sample data - When you do the backend, this will be a SQL SELECT query
$overdueBooks = [
    ["id" => 1, "title" => "The 5 AM Club", "borrower" => "J.A. Thirundu", "email" => "test1@mail.com", "date" => "2025-04-28", "fine" => "80.00"],
    ["id" => 2, "title" => "Atomic Habits", "borrower" => "K.G. Perera", "email" => "test2@mail.com", "date" => "2025-05-01", "fine" => "50.00"],
];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overdue Books List</title>
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/assets/css/dashboradstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body></body>

<div class="card border-0 shadow-sm" style="border-radius: 12px; border: 1px solid #E2E8F0 !important;">
    <div class="card-body p-0">
        <div class="p-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold mb-0" style="color: var(--main-dark);">Overdue Books List</h6>
            <span class="badge" style="background-color: #FEE2E2; color: #DC2626;">Action Required</span>
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead style="background-color: #F8FAF9; color:#4A6741;">
                    <tr>
                        <th class="border-0 px-3 py-3 small">BOOK TITLE</th>
                        <th class="border-0 py-3 small">BORROWER</th>
                        <th class="border-0 py-3 small">DUE DATE</th>
                        <th class="border-0 py-3 small">FINE</th>
                        <th class="border-0 px-3 py-3 small text-end">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($overdueBooks as $book): ?>
                        <tr class="align-middle">
                            <td class="px-3 fw-medium"><?php echo $book['title']; ?></td>
                            <td><?php echo $book['borrower']; ?></td>
                            <td><?php echo $book['date']; ?></td>
                            <td>
                                <span class="badge" style="background-color: #FEE2E2; color: #DC2626;">
                                    LKR <?php echo $book['fine']; ?>
                                </span>
                            </td>
                            <td class="px-3 text-end">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="send_reminder.php?id=<?php echo $book['id']; ?>" class="btn btn-sm shadow-none"
                                        title="Send Email Reminder" style="background-color: #E0F2FE; color: #0369A1;">
                                        <i class="bi bi-envelope"></i>
                                    </a>

                                    <a href="clear_overdue.php?id=<?php echo $book['id']; ?>" class="btn btn-sm shadow-none"
                                        title="Clear Status" style="background-color: #DCFCE7; color: #166534;"
                                        onclick="return confirm('Clear overdue status for this book?')">
                                        <i class="bi bi-check2-circle"></i>
                                    </a>

                                    <button class="btn btn-sm shadow-none"
                                        style="background-color: #F1F5F9; color: #475569;">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

</html>