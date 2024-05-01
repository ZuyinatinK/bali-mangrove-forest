<?php include 'header.php'; ?>

            <ul class="nav">
                <li>
                    <a href="<?= site_url('dashboard')?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="#">User</a>
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
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User Active</a></li>
                    </ol>
                </div>
                <div class="row">
                <?php foreach ($user3 as $usr) : ?>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?= base_url() ?>assets/assets_dash/img/bg.png" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="<?= base_url('assets/assets_dash/img/'). $usr['foto'];?>" alt="..."/>

                                            <h4 class="title"><?php echo $usr['nama']; ?><br />
                                                <small><?php echo $usr['email']; ?></small>
                                            </h4>
                                        </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">User Non Active</a></li>
                    </ol>
                </div>
                <div class="row">
                <?php foreach ($user2 as $usr2) : ?>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="<?= base_url() ?>assets/assets_dash/img/bg.png" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="<?= base_url('assets/assets_dash/img/'). $usr['foto'];?>" alt="..."/>

                                            <h4 class="title">
                                                <?php echo $usr2['nama']; ?><br />
                                                <small><?php echo $usr2['email']; ?></small>
                                            </h4>
                                    </a>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>