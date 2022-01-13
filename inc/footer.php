<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/SmoothScroll.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/sound.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        // update the dataTables_info color after load table
        $('.dataTables_info').css('color', '#fff');
        $('label').css('color', '#fff');
        $('select').css('color', '#fff');
    });
</script>