<body class="">
    <div class="page-container">
        <div class="page-sidebar">
            <a class="logo" href="#">Admin</a>
            <ul class="list-unstyled accordion-menu">
                <li class="active-page">
                    <a href="<?php echo base_url('data_user') ?>" class="active"><i data-feather="activity"></i>Dashboard<i class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">
                    
                        <li><a href="<?php echo base_url('data_karyawan') ?>" class="active"><i class="far fa-circle"></i>Data Karyawan</a></li>
                    </ul>
                </li>
            </ul>
            <a href="#" id="sidebar-collapsed-toggle"><i data-feather="arrow-right"></i></a>
        </div>
        <div class="page-content">
            <div class="page-header">
                <nav class="navbar navbar-expand-lg d-flex justify-content-between">
                    <div class="header-title flex-fill">
                        <a href="#" id="sidebar-toggle"><i data-feather="arrow-left"></i></a>
                        <h5>Dashboard</h5>
                    </div>

                    <div class="flex-fill" id="headerNav">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link profile-dropdown" href="#" id="profileDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="<?php echo base_url() ?>assets/images/avatars/profile-image.png" alt=""></a>
                                <div class="dropdown-menu dropdown-menu-end profile-drop-menu" aria-labelledby="profileDropDown">
                                    <a class="dropdown-item" href="#"><i data-feather="user"></i>Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i data-feather="settings"></i>Settings</a>
                                    <a class="dropdown-item" href="<?php echo base_url('login') ?>"><i data-feather="log-out"></i>Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>