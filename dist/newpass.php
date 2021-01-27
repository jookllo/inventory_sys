<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>School System</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Reset Password</h3></div>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <div class="form-group">
                                        <label class="small mb-1">Password</label>
                                        <input class="form-control py-4" type="name" name="pass1" required minlength="8" placeholder="Enter Username" />
                                    </div>
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputPassword">Confirm Password</label>
                                        <input class="form-control py-4" type="password" name="pass2" required minlength="8" placeholder="Enter password" />
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <input type="submit" class="btn btn-primary btn-block" name="submit">
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php

    include "../conn.php";

    if(isset($_POST['adduser'])) {

        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        $password=md5($pass);
    //Sort out the last query
        $sql = "UPDATE `pass` SET  `pass`= '$pass1' WHERE `email` =". $_SESSION['email']."";

        if (mysqli_query($link, $sql)) {
            header('login.php');
            echo "<script> alert('Records Added Successfully')</script>";
            die();
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            die();
        }}



    ?>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Inventory System</div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
