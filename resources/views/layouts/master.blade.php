<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Rotas APP</title>

  <!-- Bootstrap CSS -->
  {!!Html::style ('css/bootstrap.min.css') !!}
  <!-- bootstrap theme -->
  {!!Html::style ('css/bootstrap-theme.css') !!}
  <!--external css-->
  <!-- font icon -->
  {!!Html::style ('css/elegant-icons-style.css') !!}
  {!!Html::style ('css/font-awesome.min.css') !!}
  <!-- full calendar css-->
  {!!Html::style ('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') !!}
  {!!Html::style ('assets/fullcalendar/fullcalendar/fullcalendar.css') !!}
  <!-- easy pie chart-->
  {!!Html::style ('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') !!}
  <!-- owl carousel -->
  {!!Html::style ('css/owl.carousel.css') !!}
  {!!Html::style ('css/jquery-jvectormap-1.2.2.css') !!}
  <!-- Custom styles -->
  {!!Html::style ('css/fullcalendar.css') !!}
  {!!Html::style ('css/widgets.css') !!}
  {!!Html::style ('css/style.css') !!}
  {!!Html::style ('css/style-responsive.css') !!}
  {!!Html::style ('css/xcharts.min.css') !!}
  {!!Html::style ('css/jquery-ui-1.10.4.min.css') !!}
  <!-- Data Tables -->
  {!!Html::style ('css/buttons.dataTables.min.css')!!}
  {!!Html::style ('css/jquerydataTables.min.css')!!}

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

    @include('layouts.header.header')

    <!--header end-->

    <!--sidebar start-->

    @include('layouts.sidebars.sidebar')

    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <!--overview start-->
      <div class="wrapper">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        @yield('content')
      </div>        

      </section>
      <div class="text-right">
        <div class="credits">
          Desenvolvido por <a href="https://www.gvscompany.com.br">GVS Fruit Company</a>
        </div>
      </div>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  {!!Html::script ('js/jquery.js') !!}
  {!!Html::script('assets/js/javascript.js')!!}
  {!!Html::script ('js/jquery-ui-1.10.4.min.js') !!}
  {!!Html::script ('js/jquery-1.8.3.min.js') !!}
  {!!Html::script ('js/jquery-ui-1.9.2.custom.min.js') !!}
  <!-- bootstrap -->
  {!!Html::script ('js/bootstrap.min.js') !!}
  <!-- nice scroll -->
  {!!Html::script ('js/jquery.scrollTo.min.js') !!}
  {!!Html::script ('js/jquery.nicescroll.js') !!}
  <!-- charts scripts -->
  {!!Html::script ('assets/jquery-knob/js/jquery.knob.js') !!}
  {!!Html::script ('js/jquery.sparkline.js') !!}
  {!!Html::script ('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') !!}
  {!!Html::script ('js/owl.carousel.js') !!}
  <!-- jQuery full calendar -->
  {!!Html::script ('js/fullcalendar.min.js') !!}
  <!-- Full Google Calendar - Calendar -->
  {!!Html::script ('assets/fullcalendar/fullcalendar/fullcalendar.js') !!}
  <!--script for this page only-->
  {!!Html::script ('js/calendar-custom.js') !!}
  {!!Html::script ('js/jquery.rateit.min.js') !!}
  <!-- custom select -->
  {!!Html::script ('js/jquery.customSelect.min.js') !!}
  {!!Html::script ('assets/chart-master/Chart.js') !!}
  <!--custome script for all page-->
  {!!Html::script ('js/scripts.js') !!}
  <!-- custom script for this page-->
  {!!Html::script ('js/sparkline-chart.js') !!}
  {!!Html::script ('js/easy-pie-chart.js') !!}
  {!!Html::script ('js/jquery-jvectormap-1.2.2.min.js') !!}
  {!!Html::script ('js/jquery-jvectormap-world-mill-en.js') !!}
  {!!Html::script ('js/xcharts.min.js') !!}
  {!!Html::script ('js/jquery.autosize.min.js') !!}
  {!!Html::script ('js/jquery.placeholder.min.js') !!}
  {!!Html::script ('js/gdp-data.js') !!}
  {!!Html::script ('js/morris.min.js') !!}
  {!!Html::script ('js/sparklines.js') !!}
  {!!Html::script ('js/charts.js') !!}
  {!!Html::script ('js/jquery.slimscroll.min.js') !!}

  <!-- Js DataTables -->
  {{!!Html::script ('js/jquery.dataTables.min.js')!!}}
  {{!!Html::script ('js/dataTables.buttons.min.js')!!}}
  {{!!Html::script ('js/jszip.min.js')!!}}
  {{!!Html::script ('js/pdfmake.min.js')!!}}
  {{!!Html::script ('js/vsf_fonts.min.js')!!}}
  {{!!Html::script ('js/buttons.html5.min.js')!!}}

  <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
