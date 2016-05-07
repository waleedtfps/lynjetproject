<header class="main-header">

    <!-- Logo -->
    <a href="{{URL::to('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="{{asset('images/admin/logo/lynjet-logo-mini.png')}}"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="{{asset('images/admin/logo/lynjet-logo-login.png')}}"></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs" style="text-transform: capitalize;">{{$name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
               

                <p>
                <a href="{{URL::to('logout')}}" class="btn btn-default btn-flat">Sign out</a>
                 
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>