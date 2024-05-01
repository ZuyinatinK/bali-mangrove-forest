<?php include 'header.php'; ?>

            <ul class="nav">
                <li>
                    <a href="<?= site_url('dashboard')?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('TabelUser')?>">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('tabelMangrove')?>">
                        <i class="pe-7s-note2"></i>
                        <p>Dataset Mangrove</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('maps')?>">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Account</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?= site_url('dashboard/profil') ?>">
                                <p>
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                    width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('auth/logout');?>">
                                <p>
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                    width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?= base_url() ?>assets/assets_dash/img/bg.png" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                            <img class="avatar border-gray" src="<?= base_url('assets/assets_dash/img/'). $user['foto'];?>" alt="..."/>

                                            <h4 class="title"><?= $user['nama'];?><br />
                                                <small><?= $user['email'];?></small>
                                            </h4>
                                    </a>
                                    
                                </div>
                                
                                    <div class="user">
                                        <div class="card profile">
                                            <div class="card-body">
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Full Name</h6>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <?= $user['nama'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class=" row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Email</h6>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <?= $user['email'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Mobile</h6>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <?= $user['no_telp'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h6 class="mb-0">Address</h6>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <?= $user['alamat'];?>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                    </div>
    
                            </div>
                            <hr>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>