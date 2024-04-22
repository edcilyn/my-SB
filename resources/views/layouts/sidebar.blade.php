<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-user-graduate"></i>
    </div>
    <div class="sidebar-brand-text mx-1">BSIT 3rd Year: Engineering Info System<sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-3">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- <li class="nav-item">
    <a class="nav-link" href="{{ route('courses') }}">
      <i class="fas fa-fw fa-plus"></i>
      <span>Add Course</span></a>
  </li> -->

  <li class="nav-item">
    <a class="nav-link" href="{{ route('students') }}">
      <i class="fas fa-fw fa-user-graduate"></i>
      <span>Add Students</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('instructors') }}">
      <i class="fas fa-fw fa-user"></i>
      <span>Add Instructors</span></a>
  </li>

  <!-- <li class="nav-item">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-user"></i>
      <span>My Profile</span></a>
  </li> -->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block my-3">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>


</ul>
