<script src="/public/resource/main/vendor/jquery/jquery.min.js"></script>
<script src="/public/resource/admin/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/public/resource/admin/js/scripts.js"></script>
<script src="/public/resource/admin/js/simple-datatables.js" crossorigin="anonymous"></script>
<script src="/public/resource/admin/js/datatables-simple-demo.js"></script>
<script src="/public/resource/general/js/alertify.min.js"></script>
<script src="/public/resource/general/js/ajax.js"></script>
<script src="/public/resource/general/js/general.js"></script>

<?php if(isset($_SESSION['message'])) : ?>
    <script type="text/javascript">
        messageManagement(<?php echo json_encode($_SESSION['message']); ?>);
    </script>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>

