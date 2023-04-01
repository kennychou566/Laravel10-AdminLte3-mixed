@extends('layouts.home')
@section('title', 'Home')
@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Laravel10-AdminLte3-mixed Home</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        @include('layouts.admin_info') 

    </div><!-- /.col -->
</div><!-- /.row -->
@endsection
@section('content')
<div class="row">
    <!-- Left col -->
    <section class="col-lg connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">                  
                    Introduction
                </h3>

            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content p-0">
                    <h3><br /><span style="color: #3366ff;">About this case:</span></h3>
<p>Integrations laravel10 &amp; adminlte3.2 two frameworks , Speed Web application design.</p>
<h3><span style="color: #3366ff;">Environmental requirements:</span></h3>
<p>PHP8.0+<br />MySQL8.0<br />Composer</p>
<h3><span style="color: #3366ff;">Preparation:</span></h3>
<p>Created name of "laravel" database.<br />Method 1 : use phpmyadmin.<br />Method 2 : use MySQL console.<br />Input the following command from MySQL console to create call laravel of database .</p>
<blockquote>
<p><em><span style="color: #800080;">sudo mysql</span></em></p>
<p><em><span style="color: #800080;">CREATE USER 'laravel'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';</span></em><br /><em><span style="color: #800080;">GRANT USAGE ON *.* TO 'laravel'@'localhost';</span></em><br /><em><span style="color: #800080;">ALTER USER 'laravel'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;</span></em><br /><em><span style="color: #800080;">CREATE DATABASE IF NOT EXISTS `laravel`;</span></em><br /><em><span style="color: #800080;">GRANT ALL PRIVILEGES ON `laravel`.* TO 'laravel'@'localhost';</span></em></p>
</blockquote>
<p>This will give the laravel user full privileges over the laravel database, while preventing this user from creating or modifying other databases on your server.<br />Now import sql file to database in MySQL shell with:</p>
<blockquote>
<p><em><span style="color: #800080;">use laravel;</span></em><br /><em><span style="color: #800080;">source /your_project_path/laravel.sql;</span></em></p>
</blockquote>
<h3><span style="color: #3366ff;">Installation :</span></h3>
<blockquote>
<p><span style="color: #800080;"><em>Clone this repository, install the dependencies, and setup your .env file.</em></span></p>
<p><span style="color: #800080;"><em>git clone <a style="color: #800080;" href="https://github.com/kennychou566/Laravel10-AdminLte3-mixed.git">https://github.com/KennyChou566/Laravel10-AdminLte3-mixed.git</a></em></span></p>
<p><span style="color: #800080;"><em>composer install</em></span></p>
<p><span style="color: #800080;"><em>cp .env.example .env</em></span></p>
</blockquote>
<p>Modify .env file for DB the username &amp; password etc.</p>
<p>Run the initial migrations and seeders.</p>
<blockquote>
<p><em><span style="color: #800080;">php artisan migrate --seed</span></em></p>
</blockquote>
<p>Start your project to develop.</p>
<blockquote>
<p><em><span style="color: #800080;">php artisan serve --host 192.168.xx.xx</span></em><br /><br /></p>
</blockquote>
                    

                </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->


    </section>
    <!-- /.Left col -->

</div>
@endsection
@section('javascripts')
<script>
    $(document).ready(function () {
//        $("li.nav-item.sb-dashboard").eq(0).addClass("menu-open");
//        $("li.nav-item.sb-dashboard a.nav-link").eq(0).addClass("active");
//        $("a.nav-link.sb-dashboard-1").eq(0).addClass("active");
    });
    
</script>
@endsection
