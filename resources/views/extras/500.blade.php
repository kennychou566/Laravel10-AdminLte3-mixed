@extends('layouts.blank')
@section('title', '500 Error')
@section('content-header')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>500 Error Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/nextPage">Home2</a></li>
              <li class="breadcrumb-item active">500 Error Page</li>
            </ol>
          </div>
        </div>
@endsection
    @section('content')
      <div class="error-page">
        <h2 class="headline text-danger">500</h2>

        <div class="error-content">
          <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

          <p>
            We will work on fixing that right away.
            Meanwhile, you may <a href="/">return to dashboard</a> or try using the search form.
          </p>

          <form class="search-form">
            <div class="input-group">
              <input type="text" name="search" class="form-control" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" name="submit" class="btn btn-danger"><i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <!-- /.input-group -->
          </form>
        </div>
      </div>
      <!-- /.error-page -->
@endsection
@section('control-sidebar')

@endsection
@section('javascripts')
<script>
    $(document).ready(function () {
        $("li.nav-item.sb-extras").eq(0).addClass("menu-open");
        $("li.nav-item.sb-extras a.nav-link").eq(0).addClass("active");
        $("a.nav-link.sb-extras-500").eq(0).addClass("active");
    });
    
</script>
@endsection
