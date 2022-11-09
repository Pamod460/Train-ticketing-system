<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="main.css" type="text/css">

    <script>
        window.addEventListener("load", initialize);

        function initialize() {

            logout.addEventListener("click", logoutAP);
        }

        function logoutAP() {
            window.alert("Logout Sucessfully!");
        }
    </script>

    <title>Lanka Trains</title>
</head>

<body>

    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 fw-bold" href="#"> &nbsp<i class="bi bi-train-freight-front"></i> &nbsp Lanka Train Management System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
                <form class="d-flex ms-auto my-3 my-lg-0">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                            <?php
                            if (!isset($_COOKIE["user"])) {
                                echo "Guest";
                            } else {
                                echo ($_COOKIE["user"]);
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">sss</a></li>
                            <li><a class="dropdown-item" href="../Login/login.php" id="logout">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <!-- Side NavBar Body -->
                <ul class="navbar-nav">
                    <!-- Section-1 -->
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            UI
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Section-1 -->

                    <!-- Section-2 -->

                    <!-- line -->
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <!-- line -->
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Interface
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-journal-bookmark-fill"></i></i></span>
                            <span>My Bookings</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <!-- Option 1 -->
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-journal-check"></i></span>
                                        <span>Add Booking</span>
                                    </a>
                                </li>
                                <!-- Option 1 -->
                                <!-- Option 2 -->
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-journal-x"></i></span>
                                        <span>Cancel Booking</span>
                                    </a>
                                </li>
                                <!-- Option 2 -->
                                <!-- Option 3 -->
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-journal-medical"></i></span>
                                        <span>Booking History</span>
                                    </a>
                                </li>
                                <!-- Option 3 -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-book-fill"></i></span>
                            <span>Pages</span>
                        </a>
                    </li>
                    <!-- Dropdown2 start -->
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" data-bs-target="#collapse2" href="#">
                            <span class="me-2"><i class="bi bi-credit-card"></i></span>
                            <span>Payments</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse multi-collapse" id="collapse2">
                            <ul class="navbar-nav ps-3">
                                <!-- Option 1 -->
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-wallet2"></i></span>
                                        <span>Add Payment</span>
                                    </a>
                                </li>
                                <!-- Option 1 -->
                                <!-- Option 2 -->
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-clock-history"></i></span>
                                        <span>Transaction History</span>
                                    </a>
                                </li>
                                <!-- Option 2 -->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <!-- Dropdown2 end-->

                        <!-- Section-2 -->

                        <!-- Section-3 -->

                        <!-- line -->
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <!-- line -->
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Addons
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-graph-up"></i></span>
                            <span>Charts</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Tables</span>
                        </a>
                    </li>
                    <!-- Section-3 -->

                    <!-- Section-4 start -->
                    <!-- line -->
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <!-- line -->
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Other
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-gear"></i></span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-person-lines-fill"></i></span>
                            <span>Contact Us</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-info-circle"></i></span>
                            <span>About</span>
                        </a>
                    </li>
                    <!-- Section-4 end -->
                </ul>
                <!-- Side NavBar Body -->
            </nav>
        </div>
    </div>
    <!-- offcanvas -->

    <!-- Dashboard -->

    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <!-- <iframe src="dashboard.php" style="height:1000px; width:1600px;"></iframe> -->

            <div class="row">
                <div class="col-md-12">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <a href="#">
                        <div class="card bg-primary text-white h-100">
                            <div class="card-body py-5">Primary Card</div>
                            <div class="card-footer d-flex">
                                View Details
                                <span class="ms-auto">
                                    <i class="bi bi-chevron-right"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-dark h-100">
                        <div class="card-body py-5">Warning Card</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body py-5">Success Card</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card bg-danger text-white h-100">
                        <div class="card-body py-5">Danger Card</div>
                        <div class="card-footer d-flex">
                            View Details
                            <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div>
                <table class="table table-striped col-md-3 mb-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lakshan</td>
                            <td>Active</td>
                            <td>POST</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table -->

        </div>
    </main>

    <!-- Dashboard -->



    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>

</body>

</html>