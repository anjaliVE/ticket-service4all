
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="{{route('my_tickets')}}">
            <img src="{{asset('images/service4allnow-logo.png')}}" alt="logo">
          </a>
          <!-- <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="images/taxi-booking-logo-mini.png" alt="logo" />
          </a> -->
        </div>
        

      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top header-contact-info"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <a href="tel:+9112545262548"><figure><img src="{{asset('images/phone-icon.png')}}"></figure> +91 125 4526 2548</a>
          </li>
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <a href="mailto:johndoe@gmail.com" target="_blank"><figure><img src="{{asset('images/email-icon.png')}}"></figure> {{Auth::user()->email}}</a>
          </li>
        
        </ul>
        @if(Auth::check() ) 
        <ul class="navbar-nav ms-auto">
          <li class="language-translate-col">
            <div id="google_translate_element"></div>
          </li>
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="javascript:void('0');" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="{{asset('images/face8.jpg')}}" alt="Profile image"> </a>
            
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="{{asset('images/face8.jpg')}}" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">{{Auth::user()->name}}</p>
                <p class="fw-light text-muted mb-0">{{Auth::user()->email}}</p>
              </div>

              <a class="dropdown-item" href="{{route('userinfo')}}"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <div class="profile-user-loggedin">
                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                 </form>
                </div>
            </div>
          </li>
        </ul>
        @endif
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>

