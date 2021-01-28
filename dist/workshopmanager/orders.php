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
            <h1 class="mt-4">Orders</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../admin/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Orders</li>
            </ol>
            <div class="card mb-4">

            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Orders
                </div>
                <div class="card-body">
                    <div class="container">
                        <form method="post" action="../functions/addorder.php">
                            <p>Client Email:</p>
                            <input class="form-control" type="email" name="email" id="email" required/><br>
                            <p>Client Name:</p>
                            <input class="form-control" id="clname" name="clname" required/><br>
                            <p>Type of Order:</p>
                            <?php
                            include_once "../conn.php";
                            $sql = "select `product_name`,`price` from inventory";

                            echo "<select class='form-control' name='order_type' required>";
                            echo "<option value=''> </option>";
                            if($result =mysqli_query($link,$sql)){
                            while($row = mysqli_fetch_array($result)){
                            $pname = $row['product_name'];
                            echo "<option value='$pname'>".$row['product_name']."</option>";}}
                            ?>
                            </select><br>
                            <p>No. of Items:</p>
                            <input class="form-control" type="number" name="amount" id="amount"required/><br>
                            <p>Date:</p>
                            <input class="form-control" type="date" name="dateno" id="dateno" required/><br>
                            <input type="submit" class="btn btn-success" value="Submit" name="addorder">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div class="container-fluid">
                <?php
include "../conn.php";

if(isset($_POST['addorder'])) {
    $email = $_POST["email"];
    $order_type = $_POST["order_type"];
    $amount = $_POST["amount"];
    $dateno = $_POST["dateno"];

    $sql = " INSERT INTO `orders`(`email`, `order_type`, `amount`, `date`) VALUES
    ('$email','$order_type','$amount','$dateno');";

    $math = "UPDATE inventory SET quantity = quantity - $amount WHERE product_name = '$order_type';";
    if (mysqli_query($link, $math)&&mysqli_query($link, $sql)) {
        echo "<script> alert('Records Added Successfully')</script>";
        die();
    } else {
        echo "ERROR: Could not able to execute $math. " . mysqli_error($link);
        die();
    }}
?>
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

                                    <th>Client Email</th>
                                    <th>Type of Order</th>
                                    <th>No. of Items</th>
                                    <th>Total Amount</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>

                                    <th>Client Email</th>
                                    <th>Type of Order</th>
                                    <th>No. of Items</th>
                                    <th>Total Amount</th>
                                    <th>Date</th>
                                </tr>
                                </tfoot>
                                <tbody>


                                    <?php include '../conn.php';
                                    $sql = "select * from orders inner join inventory on orders.order_type = inventory.product_name";
                                    if($result =mysqli_query($link,$sql)){
                                        while($row = mysqli_fetch_array($result)){
                                            echo "<tr>";
                                            echo "<td>". $row['email'] ."</td>";
                                            echo "<td>". $row['order_type'] ."</td>";
                                            echo "<td>". $row['amount'] ."</td>";
                                            echo "<td>". $row['price']*$row['amount'] ."</td>";
                                            echo "<td>". $row['date'] ."</td>";
                                            echo "</tr>";
                                        }}?>

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