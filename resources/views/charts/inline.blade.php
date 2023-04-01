<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inline Charts</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/dist/img/logo.jpg" alt="Project Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">L10Admlte3</span>
    </a>

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inline Charts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Inline Charts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- row -->
        <div class="row">
          <div class="col-12">
            <!-- jQuery Knob -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  jQuery Knob
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                    <div class="knob-label">New Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                    <div class="knob-label">Bounce Rate</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90"
                           data-height="90" data-fgColor="#00a65a">

                    <div class="knob-label">Server Load</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                    <div class="knob-label">Disk Space</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                    <div class="knob-label">Bandwidth</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 text-center">
                    <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                    <div class="knob-label">CPU</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  jQuery Knob Different Sizes
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc"
                           data-readonly="true">

                    <div class="knob-label">data-width="90"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-width="120" data-height="120"
                           data-fgColor="#f56954">

                    <div class="knob-label">data-width="120"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90"
                           data-fgColor="#00a65a">

                    <div class="knob-label">data-thickness="0.1"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                           value="30" data-width="120" data-height="120" data-fgColor="#00c0ef">

                    <div class="knob-label">data-angleArc="250"</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  jQuery Knob Tron Style
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90"
                           data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                    <div class="knob-label">data-width="90"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                           data-height="120" data-fgColor="#f56954">

                    <div class="knob-label">data-width="120"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1" data-width="90"
                           data-height="90" data-fgColor="#00a65a">

                    <div class="knob-label">data-thickness="0.1"</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-6 col-md-3 text-center">
                    <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2"
                           data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120"
                           data-fgColor="#00c0ef">

                    <div class="knob-label">data-angleArc="250"</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Sparklines
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- jQuery Knob -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /* jQueryKnob */
    $("li.nav-item.charts").eq(0).addClass("menu-is-opening menu-open");
    $("li.nav-item.charts a.nav-link").eq(0).addClass("active");
    $("a.nav-link.inline").eq(0).addClass("active");
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

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script>
</body>
</html>
