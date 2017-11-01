<!-- Mainly scripts -->
<script src="{{asset('back/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('back/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('back/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>


<!-- Custom and plugin javascript -->
<script src="{{asset('back/js/inspinia.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('back/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Data Tables -->
<script src="{{asset('back/js/plugins/dataTables/jquery.dataTables.js')}}"></script>
<script src="{{asset('back/js/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('back/js/plugins/dataTables/dataTables.responsive.js')}}"></script>
<script src="{{asset('back/js/plugins/dataTables/dataTables.tableTools.min.js')}}"></script>
<script type="text/javascript">
$('.dataTables-example').dataTable({
    responsive: true,
    "dom": 'T<"clear">lfrtip',
    "tableTools": {
        "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
    }
});
</script>
