<!-- Baru -->

<?php include 'control/login.php'; ?>

<body>
    <div class="wrapper">
        <form method="POST" action="<?= base_url('auth')?>">
            <img src="<?= base_url() ?>assets/assets_dash/img/lg-mv-wt.png" alt="">
            <h2>Welcome, Log in your account!</h2>
            <!-- Message -->
            <?= $this->session->flashdata('message'); ?>
            <!-- End Massage -->
            <div class="input-box">
                <input type="email" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                <i class='bx bxs-user'></i>
                <?= form_error('email', '<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password">
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forget">
                <!-- <label><input type="checkbox"> Remember me</label> -->
                <label><a href="#">Forget password?</a></label>
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="<?= site_url('Auth/registrasi') ?>">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>