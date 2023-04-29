
<!-- jQuery Version 1.11.0 -->
<script src="{{ url('public/dist/admin') }}/js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('public/dist/admin') }}/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('public/dist/admin') }}/js/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ url('public/dist/admin') }}/js/raphael/raphael.min.js"></script>
<script src="{{ url('public/dist/admin') }}/js/morris/morris.min.js"></script>

<script src="{{ url('public/dist/admin') }}/js/bootstrap/dataTables.bootstrap.min.js"></script>


<!-- Custom Theme JavaScript -->
<script src="{{ url('public/dist/admin') }}/js/sb-admin-2.js"></script>


<script type="text/javascript">

$(document).ready(function(){

    $('.nav-item').click(function() {

    $('.nav-item').removeClass('active');
    $(this).addClass('active');

    });

});

</script>

@yield('footer')

<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script>
       CKEDITOR.replace( 'editor' );

    </script>
</body>

</html>
