<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Case Study | CodeIgniter 4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url ('plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url ('dist/css/adminlte.min.css') ?>">
  <!-- Sliders -->
  <!-- Ion Slider -->
  <link rel="stylesheet" href="<?=base_url ('plugins/ion-rangeslider/css/ion.rangeSlider.min.css') ?>">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="<?=base_url ('plugins/bootstrap-slider/css/bootstrap-slider.min.css') ?>">
  <!--Modals and Alerts --> <!-- Navbar and Tabs-->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?=base_url ('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?=base_url ('plugins/toastr/toastr.min.css') ?>">
  
  <!-- bootstrap for advanced forms -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url ('plugins/daterangepicker/daterangepicker.css') ?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?=base_url ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?=base_url ('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') ?>">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url ('plugins/select2/css/select2.min.css') ?>">
  <link rel="stylesheet" href="<?=base_url ('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?=base_url ('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') ?>">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?=base_url ('plugins/bs-stepper/css/bs-stepper.min.css') ?>">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?=base_url ('plugins/dropzone/min/dropzone.min.css') ?>">

  <!-- bootsrap for editors forms -->
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url ('plugins/summernote/summernote-bs4.min.css') ?>">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="<?=base_url ('plugins/codemirror/codemirror.css') ?>">
  <link rel="stylesheet" href="<?=base_url ('plugins/codemirror/theme/monokai.css') ?>">
  <!-- SimpleMDE -->
  <link rel="stylesheet" href="<?=base_url ('plugins/simplemde/simplemde.min.css') ?>">

  <!-- Bootstrap for DataTables -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url ('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?=base_url ('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
  <link rel="stylesheet" href="<?=base_url ('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
  
  <!-- Bootstrap for jsGrid -->
  <!-- jsGrid -->
  <link rel="stylesheet" href="<?=base_url ('plugins/jsgrid/jsgrid.min.css') ?>">
  <link rel="stylesheet" href="<?=base_url ('plugins/jsgrid/jsgrid-theme.min.css') ?>">
  
  <style>
    .color-palette {
      height: 35px;
      line-height: 35px;
      text-align: right;
      padding-right: .75rem;
    }

    .color-palette.disabled {
      text-align: center;
      padding-right: 0;
      display: block;
    }

    .color-palette-set {
      margin-bottom: 15px;
    }

    .color-palette span {
      display: none;
      font-size: 12px;
    }

    .color-palette:hover span {
      display: block;
    }

    .color-palette.disabled span {
      display: block;
      text-align: left;
      padding-left: .75rem;
    }

    .color-palette-box h4 {
      position: absolute;
      left: 1.25rem;
      margin-top: .75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 12px;
      display: block;
      z-index: 7;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class = "app">
        <?= $this->include('layout/include/sidebar')?>
        <?= $this->include('layout/include/navbar')?>
  
        <?= $this->renderSection('content') ?>
    </div>



<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('dist/js/adminlte.min.js')?>"></script>

<!-- bs-custom-file-input -->
<script src="<?= base_url('plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>

<!-- ChartJS -->
<script src="<?= base_url ('plugins/chart.js/Chart.min.js') ?>"></script>

<!-- FLOT CHARTS -->
<script src="<?= base_url ('plugins/flot/jquery.flot.js') ?>"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?= base_url ('plugins/flot/plugins/jquery.flot.resize.js') ?>"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?= base_url ('plugins/flot/plugins/jquery.flot.pie.js') ?>"></script>

<!-- Inline-->
<!-- jQuery Knob -->
<script src="<?= base_url ('plugins/jquery-knob/jquery.knob.min.js') ?>"></script>

<!--Sliders -->
<!-- Ion Slider -->
<script src="<?= base_url ('plugins/ion-rangeslider/js/ion.rangeSlider.min.js') ?>"></script>
<!-- Bootstrap slider -->
<script src="<?= base_url ('plugins/bootstrap-slider/bootstrap-slider.min.js') ?>"></script>

<!-- Modals and Alers -->
<!-- SweetAlert2 -->
<script src="<?= base_url ('plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<!-- Toastr -->
<script src="<?= base_url ('plugins/toastr/toastr.min.js') ?>"></script>

<!-- Advanced Forms-->
<!-- Select2 -->
<script src="<?= base_url ('plugins/select2/js/select2.full.min.js') ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url ('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') ?>"></script>
<!-- InputMask -->
<script src="<?= base_url ('plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url ('plugins/inputmask/jquery.inputmask.min.js') ?>"></script>
<!-- date-range-picker -->
<script src="<?= base_url ('plugins/daterangepicker/daterangepicker.js') ?>"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url ('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url ('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url ('plugins/bootstrap-switch/js/bootstrap-switch.min.js') ?>"></script>
<!-- BS-Stepper -->
<script src="<?= base_url ('plugins/bs-stepper/js/bs-stepper.min.js') ?>"></script>
<!-- dropzonejs -->
<script src="<?= base_url ('plugins/dropzone/min/dropzone.min.js') ?>"></script>

<!--Editor's -->
<!-- Summernote -->
<script src="<?= base_url ('plugins/summernote/summernote-bs4.min.js') ?>"></script>
<!-- CodeMirror -->
<script src="<?= base_url ('plugins/codemirror/codemirror.js') ?>"></script>
<script src="<?= base_url ('plugins/codemirror/mode/css/css.js') ?>"></script>
<script src="<?= base_url ('plugins/codemirror/mode/xml/xml.js') ?>"></script>
<script src="<?= base_url ('plugins/codemirror/mode/htmlmixed/htmlmixed.js') ?>"></script>

<!-- Editor's -->
<!-- jquery-validation -->
<script src="<?= base_url ('plugins/jquery-validation/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url ('plugins/jquery-validation/additional-methods.min.js') ?>"></script>

<!-- DataTables -->
<!-- DataTables  & Plugins -->
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('plugins/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('plugins/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

<!-- jsGrid -->

<script src="<?= base_url('plugins/jsgrid/jsgrid.min.js') ?>"></script>

<!-- Page specific script for Flot-->
<script>
/*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>

<!-- Page specific script for Inline-->
<script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

  })

</script>


<!-- Page specific script for Modals and Alert -->
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>

<!-- Page specific script -->
<script>
  $(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    $('.swalDefaultSuccess').click(function() {
      Toast.fire({
        icon: 'success',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultInfo').click(function() {
      Toast.fire({
        icon: 'info',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultError').click(function() {
      Toast.fire({
        icon: 'error',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultWarning').click(function() {
      Toast.fire({
        icon: 'warning',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.swalDefaultQuestion').click(function() {
      Toast.fire({
        icon: 'question',
        title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });

    $('.toastrDefaultSuccess').click(function() {
      toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultInfo').click(function() {
      toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultError').click(function() {
      toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });
    $('.toastrDefaultWarning').click(function() {
      toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    });

    $('.toastsDefaultDefault').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultTopLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'topLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomRight').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomRight',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultBottomLeft').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        position: 'bottomLeft',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultAutohide').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        autohide: true,
        delay: 750,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultNotFixed').click(function() {
      $(document).Toasts('create', {
        title: 'Toast Title',
        fixed: false,
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultFull').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        icon: 'fas fa-envelope fa-lg',
      })
    });
    $('.toastsDefaultFullImage').click(function() {
      $(document).Toasts('create', {
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        image: '../../dist/img/user3-128x128.jpg',
        imageAlt: 'User Picture',
      })
    });
    $('.toastsDefaultSuccess').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-info',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultWarning').click(function() {
      $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultDanger').click(function() {
      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
    $('.toastsDefaultMaroon').click(function() {
      $(document).Toasts('create', {
        class: 'bg-maroon',
        title: 'Toast Title',
        subtitle: 'Subtitle',
        body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
      })
    });
  });
</script>

<!-- Page specific script for Ribbons-->
<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>

</body>
</html>




