@extends('layouts.blank')
@section('title', 'Installation')
@section('content-header')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Installation</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/nextPage">Home2</a></li>
              <li class="breadcrumb-item active">Installation</li>
            </ol>
          </div>
        </div>
@endsection
@section('content')
        <div class="card">
        
        <div class="card-body">
            <h2 class="">
                <b style="background-color: rgb(255, 255, 255);">
                    <span style="font-family: &quot;Source Sans Pro&quot;;">
                        <font color="#0000ff">Laravel10-AdminLte3-mixed</font>
                    </span>
                </b>
                <br>
            </h2>
            <h5 class=""><br></h5>
            <h5 class="">
                <span style="font-weight: normal;">About this case:</span>
            </h5>
            <p>Integrations laravel10 &amp; adminlte3.2 two frameworks , Speed Web application design.<br></p>
            <h5 class="">Environmental requirements:</h5><p>PHP8.0+<br>MySQL8.0<br>Composer<br></p>
            <h5 class="">Preparation:</h5>
            <p>
                Created name of "laravel" database.<br>
                Then operate <em style="color: #006699">phpmyadmin</em> import sql file to database.<br>
                or open MySQL console input the following command to create call laravel of database .<br>
                <font color="#6ba54a">sudo mysql</font><br>
                mysql&gt;<br>
                <font color="#6ba54a">CREATE USER 'laravel'@'localhost' IDENTIFIED WITH mysql_native_password BY 'password';
                GRANT USAGE ON . TO 'laravel'@'localhost';
                ALTER USER 'laravel'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
                CREATE DATABASE IF NOT EXISTS laravel; GRANT ALL PRIVILEGES ON laravel.* TO 'laravel'@'localhost';
                </font>
                <br>
                This will give the laravel user full privileges over the laravel database, while preventing this user from creating or modifying other databases on your server.<br><br>
                Now import sql file to database in MySQL shell with:<br>
                <font style="background-color: rgb(255, 255, 255);" color="#6ba54a">use laravel;<br>
                source /your_project_path/laravel.sql;</font><br>
            </p>
            <h5 class="">Installation :</h5>
            <p>Clone this repository, install the dependencies, and setup your .env file.<br>
                <font style="background-color: rgb(255, 255, 255);" color="#6ba54a">git clone https://github.com/kennychou566/Laravel10-AdminLte3-mixed.git<br>
                composer install<br>cp .env.example .env<br>Modify .env file for DB the username &amp; password etc.<br>
                Run the initial migrations and seeders.<br>
                php artisan migrate --seed<br>Start your project to develop.<br>php artisan serve --host 192.168.xx.xx
                </font>
                <br>
            </p>
            <h5 class="">Contact :</h5>
            <p>✉️: kenny@kennychou.com<br></p>
            <h5 class="">License</h5>
            <p>The Laravel10-AdminLte3-mixed project is open-sourced Web Application following the MIT license. <br></p>
        </div>
        <!-- /.card-body -->
        
      </div>
@endsection
@section('javascripts')
<script>
    $(document).ready(function () {
        $("li.nav-item.sb-docs").eq(0).addClass("menu-open");
        $("li.nav-item.sb-docs a.nav-link").eq(0).addClass("active");
        $("a.nav-link.sb-docs-installation").eq(0).addClass("active");
    });
    
</script>
@endsection
