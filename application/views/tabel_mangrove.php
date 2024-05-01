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
                <li class="active">
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
                    <a class="navbar-brand" href="#">Dataset Mangrove</a>
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
                        <!-- Button Tambah Data -->
                        <button type="button" class="btn btn-primary float-right" onclick="openModal()">
                            <i class="pe-7s-note"></i> Tambah Data</button>
                        <!-- Akhir Button Tambah Data -->

                        <div class="card card-plain">
                            <div class="header">
                                <?php if(validation_errors()):?>
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                            <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                            </polygon>
                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                        </svg>
                                        <strong>Error!</strong> Teliti Data Anda
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                        </button>
                                    </div>
                                <?php endif;?>

                            </div>
                            <div class="content table-responsive table-full-width">
                                <table id="example" class="table table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Tempat</th>
                                            <th>Alamat Tempat</th>
                                            <th>Latitute</th>
                                            <th>Longitude</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; foreach ($tbbali as $bali) :  $i++; ?>
                                        <tr>
                                            <td><strong><?php echo $i ?></strong></td>
                                            <td><?php echo $bali['nama']; ?></td>
                                            <td><?php echo $bali['alamat']; ?></td>
                                            <td><?php echo $bali['latitude']; ?></td>
                                            <td><?php echo $bali['longitude']; ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="<?= base_url();?>tabelMangrove/edit/<?= $bali['id'];?>"
                                                    class="btn btn-warning"><i class="pe-7s-pen"></i></a>
                                                    <a href="<?= base_url();?>tabelMangrove/hapus/<?= $bali['id'];?>"
                                                    class="btn btn-danger"><i class="pe-7s-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Tempat</th>
                                            <th>Alamat Tempat</th>
                                            <th>Latitute</th>
                                            <th>Longitude</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Modal Tambah Data -->
		<div id="myModal">
            <div id="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Data Mangrove</h2>
                <!-- INPUT -->
                <?php echo form_open_multipart('tabelMangrove/tambah')?>
                <div class="mdl col-md-12">
                    <label for="nama">Nama Tempat</label>
                    <input type="text" id="nama" name="nama">
                    <?= form_error('nama', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="col-md-12">
                    <label for="alamat">Alamat Tempat</label>
                    <input type="text" id="alamat" name="alamat">
                    <?= form_error('alamat', '<small class="text-danger pl-3">','</small>');?>
                </div>
                <div class="col-12">
                    <div class="col-md-6">
                        <label for="latitude">Latitute</label>
                        <input type="text" id="latitude" name="latitude">
                    </div>
                    <div class="col-md-6">
                        <label for="longitude">Longitude</label>
                        <input type="text" id="longitude" name="longitude">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="save-btn" onclick="saveData()">Save</button>
                </div>
                <?php echo form_close()?>
            </div>
        </div>
        
		<!-- Akhir Modal Tambah Data -->

<?php include 'footer.php'; ?>