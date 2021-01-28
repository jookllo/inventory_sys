<?php
include "../conn.php";

if($_POST['addcontract']) {
    $cname = $_POST["compname"];
    $camount = $_POST["contractamount"];
    $cdate = $_POST["cdate"];
    $materials = $_POST["materials"];
    $contact = $_POST["contact"];
    $expenses = $_POST["expenses"];

    $sql = " INSERT INTO contract (company_name,contract_amount,date_created,materials,contact,expense_amount) values 
    ('$cname','$camount','$cdate','$materials','$contact','$expenses');";

    if (mysqli_query($link, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}
/*<div class="card-body">

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
                   </div>
               </div>
            </div>
*/
?>