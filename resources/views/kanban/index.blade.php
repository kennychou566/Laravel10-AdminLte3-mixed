<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kanban Board</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="../dist/img/logo.jpg" alt="Project Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">L10Admlte3</span>
    </a>

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Kanban Board</h1>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Kanban Board</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content pb-3">
      <div class="container-fluid h-100">
        <div class="card card-row card-secondary">
          <div class="card-header">
            <h3 class="card-title">
              Backlog
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="card-title">Create Labels</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#3</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox1" disabled>
                  <label for="customCheckbox1" class="custom-control-label">Bug</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled>
                  <label for="customCheckbox2" class="custom-control-label">Feature</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                  <label for="customCheckbox3" class="custom-control-label">Enhancement</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox4" disabled>
                  <label for="customCheckbox4" class="custom-control-label">Documentation</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox5" disabled>
                  <label for="customCheckbox5" class="custom-control-label">Examples</label>
                </div>
              </div>
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Create Issue template</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#4</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox1_1" disabled>
                  <label for="customCheckbox1_1" class="custom-control-label">Bug Report</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled>
                  <label for="customCheckbox1_2" class="custom-control-label">Feature Request</label>
                </div>
              </div>
            </div>
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Create PR template</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#6</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="card card-light card-outline">
              <div class="card-header">
                <h5 class="card-title">Create Actions</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#7</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>

              </div>
              <div class="card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                  Aenean commodo ligula eget dolor. Aenean massa.
                  Cum sociis natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-row card-primary">
          <div class="card-header">
            <h3 class="card-title">
              To Do
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Create first milestone</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#5</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-row card-default">
          <div class="card-header bg-info">
            <h3 class="card-title">
              In Progress
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-light card-outline">
              <div class="card-header">
                <h5 class="card-title">Update Readme</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#2</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                  Aenean commodo ligula eget dolor. Aenean massa.
                  Cum sociis natoque penatibus et magnis dis parturient montes,
                  nascetur ridiculus mus.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-row card-success">
          <div class="card-header">
            <h3 class="card-title">
              Done
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title">Create repo</h5>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-link">#1</a>
                  <a href="#" class="btn btn-tool">
                    <i class="fas fa-pen"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
      $("a.nav-link.sb-kanban").eq(0).addClass("active");
  })
</script>
</body>
</html>
