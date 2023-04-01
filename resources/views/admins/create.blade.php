<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admins {{$id?'Modification':'new append'}}</title>

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
            <h1>Admins</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{url('admins')}}">Admins</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Administrator {{$id?'Modification':'new append'}}</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body">
                    @if(Session::has('final_message'))
                    <div class="alert alert-success alert-msg"> {!! session('final_message') !!}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
                    @endif
                    @if(Session::has('danger_message'))
                    <div class="alert alert-danger alert-msg"> {!! session('danger_message') !!}<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
                    @endif
                    <form action="{{url('admins')}}{{$id?'/'.$id:''}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        {!! csrf_field() !!}
                        @if($id)
                        {{method_field('PUT')}}
                        @endif
                        <div class="form-group row">
                            <label for="adm_name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="adm_name" value="{{ old('adm_name') }}" class="form-control" id="adm_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="log_id" class="col-sm-2 col-form-label">LogID(Email)</label>
                            <div class="col-sm-10">
                                <input type="email" name="log_id" value="{{ old('log_id') }}" class="form-control" id="log_id" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="pwd" value="" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pwd_confirm" class="col-sm-2 col-form-label">Password confirm</label>
                            <div class="col-sm-10">
                                <input type="password" name="pwd_confirm" value="" class="form-control" id="pwd_confirm" placeholder="Password confirm">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select name="active" id="input-active" class="form-control">
                                    <option value="0">Disabled</option>
                                    <option value="1" {{old('active')==1?'selected':'' }}>Enabled</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-info">Saved</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          
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
<!-- bs-custom-file-input -->
<script src="/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/dist/js/kcstudio.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $("li.nav-item.sb-admins a.nav-link").eq(0).addClass("active");
  bsCustomFileInput.init();
  
});
</script>
</body>
</html>
