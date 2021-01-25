<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="admin/index.php">Timber Workshop M.S.</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">

        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
               
                <a class="dropdown-item" href="login.php">Logout</a>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Administrator</div>
                    <a class="nav-link" href="admin/index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">C.E.O</div>
                    <a class="nav-link" href="ceo/report.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                        Reports
                    </a>
                   <!--<a class="nav-link" href="user_details.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        User Management
                    </a>-->

                    <div class="sb-sidenav-menu-heading">Workshop Manager</div>
                    <a class="nav-link" href="workshopmanager/inventory.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                        Inventory
                    </a>
                    <a class="nav-link" href="workshopmanager/orders.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-pdf"></i></div>
                        Orders
                    </a>
                    <a class="nav-link" href="workshopmanager/receipts.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-calculator"></i></div>
                        Sales Receipts
                    </a>
                    <div class="sb-sidenav-menu-heading">Finance Manager</div>
                    <a class="nav-link" href="finance/expenses.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                        Expense
                    </a>
                    <a class="nav-link" href="finance/contract.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                        Contract
                    </a>
                </div>
            </div>

            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>

            </div>
        </nav>
    </div>