        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="<?= site_url('home')?>" target="_blank">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home#about')?>" target="_blank">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home#services')?>" target="_blank">
                                Maps
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home#portfolio')?>" target="_blank">
                                Documentation
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home#team')?>" target="_blank">
                                Team
                            </a>
                        </li>
                        <li>
                            <a href="<?= site_url('home#contact')?>" target="_blank">
                                Contact
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    Copyright &copy; 2022 <a href="<?= site_url('home')?>">VisRove</a>, All Rights Reserved
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        new DataTable('#example');      
    </script>

    <script src="<?= base_url() ?>assets/assets_dash/js/modal.js"></script>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/assets_dash/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>assets/assets_dash/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?= base_url() ?>assets/assets_dash/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?= base_url() ?>assets/assets_dash/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?= base_url() ?>assets/assets_dash/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?= base_url() ?>assets/assets_dash/js/demo.js"></script>

</html>