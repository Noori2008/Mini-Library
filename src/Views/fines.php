<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tmember_fines";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nic_input = "";
$result = null;

if (isset($_POST['search'])) {
    $nic_input = $_POST['nic'];
    
    // Fetch data by joining borrowdetails and fines tables
    $sql = "SELECT b.*, f.dailyrate 
            FROM borrowdetails b 
            CROSS JOIN fines f 
            WHERE b.nic = '$nic_input' AND b.paymentstatus = 'Unpaid'";
            
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Fine Checker</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 40px; background-color: #f4f7f6; }
        .container { max-width: 900px; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin: auto; }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        .search-box { margin-bottom: 30px; background: #e9ecef; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th, td { border: 1px solid #dee2e6; padding: 15px; text-align: center; }
        th { background-color: #3498db; color: white; }
        tr:nth-child(even) { background-color: #f8f9fa; }
        .fine-txt { font-weight: bold; color: #e74c3c; font-size: 1.1em; }
        .success-msg { color: #27ae60; font-weight: bold; background: #d4edda; padding: 15px; border-radius: 5px; text-align: center; }
        .error-msg { color: #721c24; background-color: #f8d7da; padding: 15px; border-radius: 5px; text-align: center; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Library Fine Inquiry System</h2>

    <div class="search-box">
        <form method="post">
            <label>Enter Your NIC Number:</label>
            <input type="text" name="nic" value="<?php echo htmlspecialchars($nic_input); ?>" placeholder="e.g. 199912345678" required style="padding: 10px; width: 250px; border: 1px solid #ced4da; border-radius: 4px; margin-left: 10px;">
            <button type="submit" name="search" style="padding: 10px 20px; background: #3498db; color: white; border: none; border-radius: 4px; cursor: pointer;">Search</button>
        </form>
    </div>

    <?php if (isset($_POST['search'])): ?>
        <?php if ($result && $result->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>ISBN</th>
                        <th>Due Date</th>
                        <th>Late Days</th>
                        <th>Daily Rate (Rs.)</th>
                        <th>Total Fine (Rs.)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): 
                        // Calculating late days using PHP
                        $today = new DateTime();
                        $due_date = new DateTime($row['duedate']);
                        $diff = $today->diff($due_date);
                        $late_days = ($today > $due_date) ? $diff->days : 0;
                    ?>
                    <tr>
                        <td><?php echo $row['isbn']; ?></td>
                        <td><?php echo $row['duedate']; ?></td>
                        <td><?php echo $late_days; ?> Days</td>
                        <td><?php echo number_format($row['dailyrate'], 2); ?></td>
                        <td class="fine-txt"><?php echo number_format($row['fineamount'], 2); ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <p style="margin-top: 15px; font-style: italic; color: #7f8c8d;">* Please settle these outstanding fines at the library counter.</p>
        <?php else: ?>
            <div class="success-msg">No outstanding fines found for this NIC number. Thank you!</div>
        <?php endif; ?>
    <?php endif; ?>
</div>

</body>
</html>