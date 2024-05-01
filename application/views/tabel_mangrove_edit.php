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
                    <a class="navbar-brand" href="#">Edit Data Mangrove</a>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="hidden" name="id" value="<?=$row->id?>">
                                                <label>Nama Tempat</label>
                                                <input type="text" class="form-control" name="nama" value="<?=$this->input->post('nama') ?? $row->nama?>">
                                                <?= form_error('nama', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat Tempat</label>
                                                <input class="form-control" name="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat?>">
                                                <?= form_error('alamat', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Latitude</label>
                                                <input type="text" class="form-control" name="latitude" value="<?=$this->input->post('latitude') ?? $row->latitude?>">
                                                <?= form_error('latitude', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Longitude</label>
                                                <input type="text" class="form-control" name="longitude" value="<?=$this->input->post('longitude') ?? $row->longitude?>">
                                                <?= form_error('longitude', '<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pull-right">
                                            <button type="reset" class="btn btn-default">Reset</button>
                                            <button type="submit" class="btn btn-success ">Update Mangrove</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'footer.php'; ?>