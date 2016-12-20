  <nav class="px-nav px-nav-left" id="px-navbar-nav">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
      <span class="px-nav-toggle-arrow"></span>
      <span class="navbar-toggle-icon"></span>
      <span class="px-nav-toggle-label" style="font-size: 11px;">HIDE MENU</span>
    </button>

    <ul class="px-nav-content">
      <li class="px-nav-item">
        <a href="#"><i class="px-nav-icon fa fa-hand-grab-o"></i><span class="px-nav-label">Link1</span></a>
      </li>
      <li class="px-nav-item">
        <a href="#"><i class="px-nav-icon fa fa-hand-peace-o"></i><span class="px-nav-label">Link2</span></a>
      </li>
      <li class="px-nav-item">
        <a href="#"><i class="px-nav-icon fa fa-hand-paper-o"></i><span class="px-nav-label">Link3</span></a>
      </li>
    </ul>
  </nav>





  <nav class="navbar px-navbar">
    <!-- Header -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Grading System</a>
    </div>
    <!-- Navbar toggle -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#px-navbar-using-with-nav-collapse" aria-expanded="false"><i class="navbar-toggle-icon"></i></button>
    <!-- Collapse -->
    <div class="navbar-collapse collapse" id="px-navbar-using-with-nav-collapse" aria-expanded="false">
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text">Hello {{ucfirst(Auth::user()->username)}}</p>
        <li><a href="#"><i class="fa fa-sign-out"></i></a></li>
      </ul>
    </div>
  </nav>