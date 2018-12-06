<div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="<?php echo base_url() ?>assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Selamat Datang,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo $this->session->userdata('username');?></strong></a>                    
                    <ul class="dropdown-menu dropdown-menu-right account animated flipInY">
                        <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('login/logout');?>"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h6>5+</h6>
                        <small>Experience</small>                        
                    </div>
                    <div class="col-4">
                        <h6>400+</h6>
                        <small>Employees</small>                        
                    </div>
                    <div class="col-4">                        
                        <h6>80+</h6>
                        <small>Clients</small>
                    </div>
                </div>
            </div>
            <!-- Nav tabs -->
            <!-- <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#hr_menu">HR</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#project_menu">Project</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu"><i class="icon-grid"></i></a></li>                
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            </ul> -->
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane animated fadeIn active" id="hr_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li class="active"><a href=""><i class="icon-home"></i><span>Dashboard</span></a></li>
                            <li>
                                <a href="#Employees" class="has-arrow"><i class="icon-users"></i><span>Karyawan</span></a>
                                <ul>
                                    <li><a href="<?php echo base_url('staff/data_kry');?>">Data Karyawan</a></li>
                                    <li><a href="<?php echo base_url('staff/data_kry_baru');?>">Karyawan Baru</a></li>
                                    <li><a href="<?php echo base_url('staff/data_kry_percobaan');?>">Probation</a></li>
                                    <li><a href="<?php echo base_url('staff/data_kry_penilaian');?>">Penilaian</a></li>
                                    <li><a href="<?php echo base_url('staff/data_kry_training');?>">Training</a></li>
                                    <li><a href="">Resign</a></li>
                                    <li><a href="">Mutasi</a></li>
                                    <li><a href="">Penempatan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Accounts" class="has-arrow"><i class="icon-briefcase"></i><span>Accounts</span></a>
                                <ul>
                                    <li><a href="acc-payments.html">staff</a></li>
                                    <li><a href="acc-expenses.html">Staff</a></li>
                                    <li><a href="acc-invoices.html">OB/OG</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Report" class="has-arrow"><i class="icon-book-open"></i><span>Report</span></a>
                                <ul>
                                    <li><a href="report-expense.html">Expense Report</a></li>
                                    <li><a href="report-invoice.html">Invoice Report</a></li>                                    
                                </ul>
                            </li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="icon-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Struktur" class="has-arrow"><i class="icon-bar-chart"></i><span>Struktur</span></a>
                                <ul>
                                    <li><a href="<?php echo base_url('staff/struktur_pusat');?>"></i>Struktur Pusat</a></li>
                                    <li><a href="<?php echo base_url('staff/struktur_cabang');?>"></i>Struktur Cabang</a></li>                                    
                                </ul>
                            </li>
                            <li><a href=""><i class="icon-compass"></i>Help</a></li>
                            <li><a href="<?php echo site_url('login/logout');?>"><i class="icon-logout"></i>Logout</a></li>
                        </ul>
                    </nav>
                </div>     
            </div>          
        </div>
    </div>