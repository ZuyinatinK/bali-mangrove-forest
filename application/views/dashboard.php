<?php include 'header.php'; ?>

            <ul class="nav">
                <li class="active">
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
    <!--**********************************
        SIDEBAR END
    ***********************************-->

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
                    <a class="navbar-brand" href="#">Dashboard</a>
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
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Mangrove</h4>
                            </div>
                            <div class="content">
                                <div class="sigma">
                                    <?php echo $jmlhmangrove ;?>
                                </div>
                                <div class="footer">
                                    <div class="legend">
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Last updated
                                        <a class="btn btn-success" href="<?= base_url()?>tabelMangrove" role="button">Go Ahead</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header"></div>
                            <div class="content">
                                    <div class="row g-0 ket">
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                    <h3 class="card-title">Visit Bali’s <br>Mangrove Forest</h3>
                                                    <p>Visit Bali’s Mangrove Forest merupakan Sistem Informasi Geografis (GIS) yang digunakan untuk pemetaan tempat ekowisata Mangrove di Pulau Bali.</p>
                                            </div>
                                        </div>
                                        <div class="images col-md-5">
                                            <img src="<?= base_url() ?>assets/assets_dash/img/mang.png" class="img-fluid rounded-start" alt="...">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>


<?php include 'footer.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            demo.initChartist();
            
            $.notify({
            icon: 'pe-7s-home',
            message: "Welcome to Dashboard <br><b>Visit Bali’s Mangrove Forest</b>."

            },{
                type: 'danger',
                timer: 7000
            });
        });
	</script>