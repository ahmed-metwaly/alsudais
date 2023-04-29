
<!-- jQuery Version 1.11.0 -->
<script src="<?php echo e(url('public/dist/admin')); ?>/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo e(url('public/dist/admin')); ?>/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo e(url('public/dist/admin')); ?>/js/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="<?php echo e(url('public/dist/admin')); ?>/js/raphael/raphael.min.js"></script>
<script src="<?php echo e(url('public/dist/admin')); ?>/js/morris/morris.min.js"></script>

<script src="<?php echo e(url('public/dist/admin')); ?>/js/bootstrap/dataTables.bootstrap.min.js"></script>


<!-- Custom Theme JavaScript -->
<script src="<?php echo e(url('public/dist/admin')); ?>/js/sb-admin-2.js"></script>


<script type="text/javascript">

$(document).ready(function(){

    $('.nav-item').click(function() {

    $('.nav-item').removeClass('active');
    $(this).addClass('active');

    });

});

</script>

<?php echo $__env->yieldContent('footer'); ?>

<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
       CKEDITOR.replace( 'editor' );

    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\alsudais\resources\views/admin/template/footer.blade.php ENDPATH**/ ?>