<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Inventory System</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <?php include 'navbar.php';?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Expenses</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../admin/index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Expenses</li>
                </ol>
                <div class="card mb-4">

                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Expenses
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form method="post" action="">
                                <p>Name:</p>
                                <input class="form-control" type="text" name="ename" required/><br>
                                <p>Quantity:</p>
                                <input class="form-control" type="number" name="quantity" required/><br>
                                <p>Pin No.:</p>
                                <input class="form-control" type="number" name="pin" required/><br>
                                <p>Date:</p>
                                <input class="form-control" type="date" name="edate" required/><br>
                                <p>Amount:</p>
                                <input class="form-control" type="number" name="amount" required/><br>
                                <input type="submit" class="btn btn-success" value="Submit" name="addexpense">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <main>
                <div class="container-fluid">

                    <div class="card mb-4">
                        <?php
include "../conn.php";

if(isset($_POST['addexpense'])) {
    $ename = $_POST["ename"];
    $quantity = $_POST["quantity"];
    $pin = $_POST["pin"];
    $edate = $_POST["edate"];
    $amount = $_POST["amount"];


    $sql = " INSERT INTO `expenses`(`name`, `quantity`, `pin_no`, `date`, `amount`) VALUES 
    ('$ename','$quantity','$pin','$edate','$amount');";

    if (mysqli_query($link, $sql)) {
        echo "<script>alert('Records added successfully.')</script>";
        die();
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}?>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            Expenses
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Pin No.</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Total Cost</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Pin No.</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Total Cost</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <?php include '../conn.php';
                                        $sql = "select * from expenses";
                                        if($result =mysqli_query($link,$sql)){
                                            while($row = mysqli_fetch_array($result)){

                                                echo "<td>". $row['name'] ."</td>";
                                                echo "<td>". $row['quantity'] ."</td>";
                                                echo "<td>". $row['pin_no'] ."</td>";
                                                echo "<td>". $row['date'] ."</td>";
                                                echo "<td>". $row['amount'] ." KSH</td>";
                                                echo "<td>". $row['quantity']*$row['amount'] ." KSH</td>";
                                                }}?>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/datatables-demo.js"></script>
</body>
</html>

