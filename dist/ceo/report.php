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
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>
<body class="sb-nav-fixed">
<?php include 'navbar.php';?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Reports</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../admin/index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Reports</li>
            </ol>
            <div class="card mb-4">

            </div>
            <div style="
  border-radius: 25px;
  background: #73AD21;
  padding: 20px;
  float: right;
  color:white;
font-size: m edium;
display:inline-block;
  text-align: center; 
  width: 200px;
  height: 150px;">
                Expenses</br><?php
                    include "../conn.php";
                    $sql = "select amount, quantity from expenses";
                    if($result =mysqli_query($link,$sql)){

                        $row = mysqli_fetch_array($result);
                        $tot= $row['amount']*$row['quantity'];

                        echo $tot;

                    }
                    else{
                        echo"no expenses have been incurred today";
                    }
                ?>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <div style="
            float: left;
            display: flex;
            color:white;
            font-size: medium;
            text-align: center;
            display:inline-block;
            border-radius: 25px;
            background: #B651AD;
            padding: 20px; 
            top: -20px;
            width: 200px;
            height: 150px;">
            Cost of orders</br><?php
                include "../conn.php";
                $sql = "select * from orders inner join inventory on orders.order_type = inventory.product_name";
                if($result =mysqli_query($link,$sql)){

                    $row = mysqli_fetch_array($result);
                    $cod= $row['price']*$row['amount'];

                    echo $cod;

                }
                else{
                    echo"no expenses have been incurred today";
                }
            ?>
            </div></br></br></br></br></br></br></br></br></br>

            

            <h2>Pending Orders</h2>
            <div class="card-body">

                           <div class="table-responsive">

                               <table class="table table-bordered" id="tableMain" cellspacing="0">

                                   <thead>

                                   <?php
                                   include "../conn.php";
                                   $sql = "select * from orders";
                                   if($result =mysqli_query($link,$sql)){
                                       echo "<tr>";
                                       echo "<th>client</th>";
                                       echo "<th>Item</th>";
                                       echo "<th>Amount</th>";
                                       echo "<th>Expected date</th>";
                                       echo "</tr>";
                                       echo "</tfoot>";
                                       echo "<tbody>";
                                       while($row = mysqli_fetch_array($result)){
                                           echo "<tr>";
                                           echo "<td>". $row['client_name'] ."</td>";
                                           echo "<td>". $row['order_type'] ."</td>";
                                           echo "<td>". $row['amount'] ."</td>";
                                           echo "<td>". $row['date'] ."</td>";
                                           echo "</tr>";}
                                       echo "</tbody>";
                                   }
                                   ?>
                               </table>
                           </div>

                       </div>
        
        
                       <h2>Available Inventory</h2>

<div class="card-body">

                   <div class="table-responsive">

                       <table class="table table-bordered" id="tableMain" cellspacing="0">

                           <thead>

                           <?php
                           include "../conn.php";
                           $sql = "select * from inventory";
                           if($result =mysqli_query($link,$sql)){
                               echo "<tr>";                                       
                               echo "<th>Item</th>";
                               echo "<th>Units</th>";
                               echo "</tr>";
                               echo "</tfoot>";
                               echo "<tbody>";
                               while($row = mysqli_fetch_array($result)){
                                   echo "<tr>";
                                   echo "<td>". $row['product_name'] ."</td>";
                                   echo "<td>". $row['quantity'] ."</td>";
                                   echo "</tr>";}
                               echo "</tbody>";
                           }
                           ?>
                       </table>
                   </div>

               </div>
         
               <div>

                <?php
            /*
            include "../conn.php";
                $sql = "SELECT SUM(amount) FROM orders where order_type = 'kuku' ";
                if($result =mysqli_query($link,$sql)){

                    $row = mysqli_fetch_array($result);
                    $cod= $row['SUM(amount)'];
                    

                    echo $cod;
                    return $cod;

                }
                else{
                    echo"no expenses have been incurred today";
                }

                $sql = "SELECT SUM(amount) FROM orders where order_type = 'Wooden chair' ";
                if($result =mysqli_query($link,$sql)){

                    $row = mysqli_fetch_array($result);
                    
                    $x = $row['SUM(amount)'];

                    echo $x;
                    return $x;

                }
                else{
                    echo"no expenses have been incurred today";
                }
                
                $dataPoints = array( 
                    array("y" => $cod, "label" => "Kuku" ),
                    array("y" => $x, "label" => "wooden chair" )
                );
                
                */
                ?>
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

