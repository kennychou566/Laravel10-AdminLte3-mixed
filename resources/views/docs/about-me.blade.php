@extends('layouts.starter')
@section('title', 'About Me')
@section('content-header')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About Me</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/nextPage">Home2</a></li>
              <li class="breadcrumb-item active">About Me</li>
            </ol>
          </div>
        </div>
@endsection
@section('content')
<div class="card">
    
    <div class="card-body">
        <p align="center"><img src="/dist/img/ou-128x128.jpg"  alt="Logo"></p>
       
        [Full Name]<br>
        [Address]<br>
        [Phone Number]<br>
        [Email Address]<br><br>
        Summary:<br>
        A skilled web developer with experience in PHP, Laravel, and Vue. Possessing strong problem-solving skills and an eye for detail, I am committed to creating efficient and effective solutions for clients. I have worked on various projects in different industries and have experience collaborating with cross-functional teams.<br><br>
        Technical Skills:<br>
        PHP，Laravel，Vue.js，HTML，CSS，JavaScript，jQuery，Bootstrap，MySQL，Git，Agile development<br>
        <br><br>
        Work Experience:<br>
        [Company Name], [City], [State]<br>
        [Position], [Date]<br>
        Developed and maintained web applications using Laravel and Vue.js.<br>
        Implemented responsive designs using HTML, CSS, and JavaScript.<br>
        Collaborated with cross-functional teams to ensure timely project delivery.<br>
        Conducted code reviews and provided feedback to team members.<br>
        Optimized database queries for improved performance.<br>
        Implemented Git as the version control system for the project.<br><br>
        [Company Name], [City], [State]<br>
        [Position], [Date]
        <br>
        Designed and developed custom WordPress themes using PHP, HTML, CSS, and JavaScript.<br>
        Built responsive websites using Bootstrap.<br>
        Developed custom plugins for specific client needs.<br>
        Collaborated with cross-functional teams to ensure timely project delivery.<br>
        Conducted site audits and provided recommendations for improvement.<br>
        Maintained and updated existing websites.<br>
        <br>
        Education:<br>
        [Degree], [Major], [University], [Graduation Date]<br><br>
        Relevant coursework:<br> 
        PHP development, web development, database management, object-oriented programming.<br>
        <br>
        Certifications:<br>
        Laravel Certification, [Year]<br>
        Vue.js Certification, [Year]<br><br>
        Projects:<br>
        [Project Name]: [Description], [Link]<br>
        [Project Name]: [Description], [Link]<br><br>        


    </div>
    <!-- /.card-body -->
    
</div>
@endsection
@section('control-sidebar')
<div class="p-3">
      <h5>Title</h5>
      <p>Current no function.</p>
    </div>
@endsection
@section('javascripts')
<script>
    $(document).ready(function () {
        $("li.nav-item.sb-docs").eq(0).addClass("menu-open");
        $("li.nav-item.sb-docs a.nav-link").eq(0).addClass("active");
        $("a.nav-link.sb-docs-about-me").eq(0).addClass("active");
    });
    
</script>
@endsection
