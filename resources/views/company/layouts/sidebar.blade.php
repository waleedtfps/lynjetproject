
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
       
        <div class="pull-left">
          <a href="{{URL::to('/profile')}}"><p style="text-transform: capitalize;display: block;color: white; text-align: center; font-size: 18px;">{{$name}}</p></a>
          <!-- Status -->
         
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{URL::to('company/aeroplanes')}}"><i class="fa fa-plane" aria-hidden="true"></i><span>Aeroplanes</span></a></li>
        <li><a href="{{URL::to('profile')}}"><i class="fa fa-user" aria-hidden="true"></i><span>Profile</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>