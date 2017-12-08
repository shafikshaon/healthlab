<!-- Mainly scripts -->
<script src="{{asset('front/js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('front/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('front/js/inspinia.js')}}"></script>
<script src="{{asset('front/js/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('front/js/plugins/wow/wow.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('front/js/plugins/iCheck/icheck.min.js')}}"></script>

<!-- Data picker -->
<script src="{{asset('front/js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>

<!-- steps -->
<script src="{{asset('front/js/plugins/steps/jquery.steps.min.js')}}"></script>
<!-- validate -->
<script src="{{asset('front/js/plugins/validate/jquery.validate.min.js')}}"></script>
<!-- chosen select -->
<script src="{{asset('front/js/plugins/chosen/chosen.jquery.js')}}"></script>
<!-- ChartJS-->
<script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>
<script src="{{asset('js/demo/chartjs-demo.js')}}"></script>
<script>

    $(document).ready(function () {
      $("#wizard").steps();
      $("#form").steps({
          bodyTag: "fieldset",
          onStepChanging: function (event, currentIndex, newIndex)
          {
              // Always allow going backward even if the current step contains invalid fields!
              if (currentIndex > newIndex)
              {
                  return true;
              }

              // Forbid suppressing "Warning" step if the user is to young
              if (newIndex === 3 && Number($("#age").val()) < 18)
              {
                  return false;
              }

              var form = $(this);

              // Clean up if user went backward before
              if (currentIndex < newIndex)
              {
                  // To remove error styles
                  $(".body:eq(" + newIndex + ") label.error", form).remove();
                  $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
              }

              // Disable validation on fields that are disabled or hidden.
              form.validate().settings.ignore = ":disabled,:hidden";

              // Start validation; Prevent going forward if false
              return form.valid();
          },
          onStepChanged: function (event, currentIndex, priorIndex)
          {
              // Suppress (skip) "Warning" step if the user is old enough.
              if (currentIndex === 2 && Number($("#age").val()) >= 18)
              {
                  $(this).steps("next");
              }

              // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
              if (currentIndex === 2 && priorIndex === 3)
              {
                  $(this).steps("previous");
              }
          },
          onFinishing: function (event, currentIndex)
          {
              var form = $(this);

              // Disable validation on fields that are disabled.
              // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
              form.validate().settings.ignore = ":disabled";

              // Start validation; Prevent form submission if false
              return form.valid();
          },
          onFinished: function (event, currentIndex)
          {
              var form = $(this);

              // Submit form input
              form.submit();
          }
      }).validate({
          errorPlacement: function (error, element)
          {
              element.before(error);
          },
          rules: {
              confirm: {
                  equalTo: "#password"
              }
          }
      });

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $('body').scrollspy({
            target: '.navbar-fixed-top',
            offset: 80
        });

        var config = {
                '.chosen-select'           : {width:"100%"},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }


        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
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
  });


    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }
        init();

    })();



    // Activate WOW.js plugin for animation on scrol
    new WOW().init();
</script>
