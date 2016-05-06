
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg")}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="admin-name" style="display: block;">{{$name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        
        <li><a href="{{URL::to('companies')}}"><i class="fa fa-copyright" aria-hidden="true"></i><span>Companies</span></a></li>
        <li><a href="{{URL::to('users')}}"><i class="fa fa-users" aria-hidden="true"></i><span>Users</span></a></li>
        <li><a href="{{URL::to('airports')}}"><i class="fa fa-paper-plane" aria-hidden="true"></i><span>Airports</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> <span>Airplanes</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="{{URL::to('aeroplanes')}}"> <i class="fa fa-plane" aria-hidden="true"></i>Airplanes</a></li>
            <li><a href="{{URL::to('airplane/category')}}"><i class="fa fa-random" aria-hidden="true"></i>Categories</a></li>
            <li><a href="{{URL::to('airplane/type')}}"><i class="fa fa-clone" aria-hidden="true"></i>Types</a></li>
            <li><a href="{{URL::to('airplane/motor')}}"><i class="fa fa-cog" aria-hidden="true"></i>Motor</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>