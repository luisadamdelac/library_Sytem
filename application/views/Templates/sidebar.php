<div class="container-fluid page-body-wrapper">



<nav class="sidebar sidebar-offcanvas" id="sidebar">

  <ul class="nav">



    <li class="nav-item nav-profile">

              <a href="#" class="nav-link">

                <div class="nav-profile-image">
                  <img src="<?= base_url('assets/images/moy.jpg')?>" alt="profile" />
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>

                <div class="nav-profile-text d-flex flex-column">

                  <span class="font-weight-bold mb-2">Luis Adam Dela Cruz</span>

                  <span class="text-secondary text-small">Project Manager</span>

                </div>

                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>

              </a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="<?= site_url('dashboard'); ?>">

                <span class="menu-title">Dashboard</span>

                <i class="mdi mdi-home menu-icon"></i>

              </a>

            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                <span class="menu-title">Books Management</span>

                <i class="menu-arrow"></i>

                <i class="mdi mdi-book-open-page-variant menu-icon"></i>

              </a>

              <div class="collapse" id="ui-basic">

                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Books'); ?>">All Books

                        <i class="mdi mdi-book menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Books/add'); ?>">Add Book

                        <i class="mdi mdi-book-plus menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Categories')?>">Categories

                        <i class="mdi mdi-folder-multiple menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Reports/book_list')?>">Book Reports

                        <i class="mdi mdi-file-chart menu-icon"></i>

                    </a>

                  </li>

                </ul>

              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">

                <span class="menu-title">Borrowing and Returning</span>

                <i class="mdi mdi-book-arrow-right menu-icon"></i>

              </a>

              <div class="collapse" id="icons">

                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Transactions/borrow');?>">Borrow and Return Books

                        <i class="mdi mdi-book-arrow-right menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Transactions/all_transaction');?>">Borrow History

                        <i class="mdi mdi-history menu-icon"></i>

                    </a>

                  </li>

                </ul>

              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">

                <span class="menu-title">Library Users</span>

                <i class="mdi mdi-account-group menu-icon"></i>

              </a>

              <div class="collapse" id="forms">

                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Users'); ?>">Add User
                        <i class="mdi mdi-account-plus menu-icon"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Users/roles'); ?>">User Roles
                        <i class="mdi mdi-account-cog menu-icon"></i>
                    </a>
                  </li>

                </ul>

              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">

                <span class="menu-title">Entry Log</span>

                <i class="mdi mdi-calendar-check menu-icon"></i>

              </a>

              <div class="collapse" id="charts">

                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">

                    <a class="nav-link" href="pages/charts/chartjs.html">Daily Log

                        <i class="mdi mdi-calendar-today menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="pages/charts/chartjs.html">Monthly Log

                        <i class="mdi mdi-calendar-month menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="pages/charts/chartjs.html">Search/Filter

                        <i class="mdi mdi-magnify menu-icon"></i>

                    </a>

                  </li>

                </ul>

              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">

                <span class="menu-title">Reports</span>

                <i class="mdi mdi-file-chart menu-icon"></i>

              </a>

              <div class="collapse" id="tables">

                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Reports/book_list')?>">Books Reports

                         <i class="mdi mdi-book menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Reports/borrow_return_report')?>">Borrow / Return Report

                         <i class="mdi mdi-book-arrow-right menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Reports/users_report')?>">Users Report

                         <i class="mdi mdi-account-group menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="<?= site_url('Reports/attendance_report')?>">Attendance Report

                         <i class="mdi mdi-calendar-check menu-icon"></i>

                    </a>

                  </li>

                </ul>

              </div>

            </li>

            <li class="nav-item">

              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">

                <span class="menu-title">Settings</span>

                <i class="menu-arrow"></i>

                <i class="mdi mdi-cog menu-icon"></i>

              </a>

              <div class="collapse" id="auth">

                <ul class="nav flex-column sub-menu">

                  <li class="nav-item">

                    <a class="nav-link" href="pages/samples/blank-page.html"> General Settings 

                        <i class="mdi mdi-cog-outline menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="pages/samples/login.html"> Manage Roles 

                        <i class="mdi mdi-account-cog menu-icon"></i>

                    </a>

                  </li>

                  <li class="nav-item">

                    <a class="nav-link" href="pages/samples/register.html"> System Logs 

                        <i class="mdi mdi-file-document menu-icon"></i>

                    </a>

                  </li>

                </ul>

              </div>

            </li>



  </ul>

</nav>



<div class="main-panel">

<div class="content-wrapper">



