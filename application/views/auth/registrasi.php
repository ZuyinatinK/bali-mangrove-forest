<!-- Baru -->
<?php include 'control/register.php'; ?>

<body>
    <div class="wrapper">
        <form method="POST" action="<?= base_url( 'auth/registrasi')?>">
            <img src="<?= base_url() ?>assets/assets_dash/img/lg-mv-wt.png" alt="">
            <h2>Sign up your account</h2>
            
            <!-- ALERT -->
            <?php if(validation_errors()):?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                        <polygon
                            points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                        </polygon>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <strong>Error!</strong> Teliti Data Anda
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="btn-close">
                    </button>
                </div>
            <?php endif;?>
            <?php if($this->session->flashdata('message')):?>
                <div class="alert alert-success alert-dismissible fade show">
                    <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                        <polyline points="9 11 12 14 22 4"></polyline>
                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                    </svg>
                    <strong>Success!</strong> Tunggu Persetujuan
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="btn-close">
                    </button>
                </div>
            <?php endif;?>
            <!-- END ALERT -->
            
            <div class="input-box">
                <input type="text" id="nama" name="nama" placeholder="Full Name" value="<?= set_value('nama');?>">
                <i class='bx bxs-id-card'></i>
                <?= form_error('nama', '<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" value="<?= set_value('email');?>">
                <i class='bx bxs-user'></i>
                <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="input-box">
                <input type="password" id="password1" name="password1" placeholder="Password" required>
                <i class='bx bxs-lock-open-alt'></i>
                <?= form_error('password1', '<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="input-box">
                <input type="password" id="password2" name="password2" placeholder="Confrim Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit" class="btn">Sign me up</button>

            <div class="register-link">
                <p>Already have an account? <a href="<?= site_url('Auth') ?>">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
