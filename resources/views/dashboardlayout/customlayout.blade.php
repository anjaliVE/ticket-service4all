<!doctype html>
<html>
<head>
   
    @include('dashboardlayout.head')

</head>
<body>
  
<!-- <div class="container"> -->


    <header >
        @include('dashboardlayout.header')

    </header>
    <div class="container-fluid page-body-wrapper">
          @include('dashboardlayout.sidebar')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            @yield('content')
            </div>
        </div>
        @include('dashboardlayout.footer')
      </div>
    </div>

    

<!-- </div> -->
</body>
</html>

