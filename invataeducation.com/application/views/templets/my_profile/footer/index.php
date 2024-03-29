<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; WP-CI-Login-Admin <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">you sure want to leave ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">

                <img src="<?= base_url('asset/img/3.jpg'); ?>" width="15%">

            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('Auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('asset'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('asset'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('asset'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('asset'); ?>/bootstrap_3/js/sb-admin-2.min.js"></script>


<script>
$('.custom-file-input').on('change', function() {
    let filename = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(filename)
});


$('.form-check-input').on('click', function() {
    const menuid = $(this).data('menu');
    const roleid = $(this).data('role');


    $.ajax({
        url: "<?= base_url('Admin/changeaccess'); ?>",
        type: 'post',
        data: {
            menuid: menuid,
            roleid: roleid
        },
        success: function() {
            document.location.href = "<?= base_url('Admin/roleaccess/') ?>" + roleid;
        }
    });
});
</script>

</body>

</html>