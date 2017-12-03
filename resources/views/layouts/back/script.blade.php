<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('js/plugins/wow/wow.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>

<!-- Data picker -->
<script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

<!-- steps -->
<script src="{{asset('js/plugins/steps/jquery.steps.min.js')}}"></script>
<!-- validate -->
<script src="{{asset('js/plugins/validate/jquery.validate.min.js')}}"></script>
<!-- chosen select -->
<script src="{{asset('js/plugins/chosen/chosen.jquery.js')}}"></script>

<!-- Data Tables -->
<script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>

<!-- cropper -->
<script src="{{asset('js/plugins/cropper/cropper.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){
      $('.dataTables-example').DataTable({
          pageLength: 10,
          responsive: true,
          dom: '<"html5buttons"B>lTfgitp',
          buttons: [
              {extend: 'copy'},
              {extend: 'csv'},
              {extend: 'excel', title: 'Untitled'},
              {extend: 'pdf', title: 'Untitled'},
          ]

      });

      $('.i-checks').iCheck({
          checkboxClass: 'icheckbox_square-green',
          radioClass: 'iradio_square-green',
      });

      $('#data_1 .input-group.date').datepicker({
          todayBtn: "linked",
          keyboardNavigation: false,
          forceParse: false,
          calendarWeeks: true,
          autoclose: true
      });

      $('#dob').change(function() {
          var date = $(this).val();
          $('#dob').attr('value', date);
       });

       $(".alert").alert()

       $('#confirm-delete').on('show.bs.modal', function(e) {
           $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
       });

  });
</script>

<script type="text/javascript">
//Function to show image before upload
function preview_image(event)
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>

<!-- <script>
    $(document).ready(function(){
        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });
    });
</script> -->
