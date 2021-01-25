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
<!-- Navbar-->
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Contract</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../admin/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Contract</li>
            </ol>
            <div class="card mb-4">

            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Contract
                </div>
                <div class="card-body">
                    <div class="container">
                        <form method="post" action="../functions/addcontract.php">
                            <p>Company Name:</p>
                            <input class="form-control" type="text" name="compname" required/><br>
                            <p>Contract Amount:</p>
                            <input class="form-control" type="text" name="contractamount" required/><br>
                            <p>Date:</p>
                            <input class="form-control" type="date" name="cdate" required/><br>
                            <p>Materials Being Done:</p>
                            <input class="form-control" type="text" name="materials" required/><br>
                            <p>Contact:</p>
                            <input class="form-control" type="text" name="contact" required/><br>
                            <p>Expenses Amount:</p>
                            <input class="form-control" type="text" name="expenses" required/><br>
                            <input type="submit" class="btn btn-success" value="Submit" name="addcontract">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="container-fluid">

                <div class="card mb-4">

                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Orders
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Contract Amount</th>
                                    <th>Date</th>
                                    <th>Materials Being Done</th>
                                    <th>Contact</th>
                                    <th>Expenses Amount</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Contract Amount</th>
                                    <th>Date</th>
                                    <th>Materials Being Done</th>
                                    <th>Contact</th>
                                    <th>Expenses Amount</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <tr>
                                    <?php include 'conn.php';
                                $sql = "select * from contract";
                                if($result =mysqli_query($link,$sql)){
                                    while($row = mysqli_fetch_array($result)){

                                    echo "<td>". $row['company_name'] ."</td>";
                                    echo "<td>". $row['contract_amount'] ."</td>";
                                    echo "<td>". $row['date_created'] ."</td>";
                                    echo "<td>". $row['materials'] ."</td>";
                                    echo "<td>". $row['contact'] ."</td>";
                                    echo "<td>". $row['expense_amount'] ."</td>";}}?>
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
