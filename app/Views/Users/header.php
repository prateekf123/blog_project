<body class="fixed-sn mdb-skin">
<style>
.double-nav .breadcrumb-dn {
  color: #fff;
}
.side-nav.wide.slim .sn-ad-avatar-wrapper a span {
  display: none;
}
</style>

<!--JS File-->
$(document).ready(function() {

  // SideNav Initialization
  $(".button-collapse").sideNav();
})

<!--/. JS File -->


  <!--Double navigation-->
  <header>
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav fixed wide sn-bg-1">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
          <div class="logo-wrapper sn-ad-avatar-wrapper">
            <a href="#"><img src="" class="rounded-circle"><span>Prateek</span></a>
          </div>
        </li>
        <!--/. Logo -->
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a class="collapsible-header waves-effect arrow-r active"><i class="sv-slim-icon fas fa-chevron-right"></i> Submit blog<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect active">
                    <span class="sv-slim"> SL </span>
                    <span class="sv-normal">Submit listing</span></a>
                  </li>
                  
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon far fa-hand-point-right"></i> Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> FB </span>
                    <span class="sv-normal">For bloggers</span></a>
                  </li>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> FA </span>
                    <span class="sv-normal">For authors</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon fas fa-eye"></i> About<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> I </span>
                    <span class="sv-normal">Introduction</span></a>
                  </li>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> MM </span>
                    <span class="sv-normal">Monthly meetings</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="sv-slim-icon far fa-envelope"></i> Contact Me<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> F </span>
                    <span class="sv-normal">FAQ</span></a>
                  </li>
                  <li><a href="#" class="waves-effect">
                    <span class="sv-slim"> W </span>
                    <span class="sv-normal">Write a message</span></a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a id="toggle" class="waves-effect"><i class="sv-slim-icon fas fa-angle-double-left"></i>Minimize menu</a>
            </li>
          </ul>
        </li>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg rgba-blue-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p>Material Design for Bootstrap</p>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">LogIn</span>
href= "<?= base_url('Admin/login') ?>"</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Registration</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Help</span></a>
        </li>
        
      </ul>
    </nav>
    <!-- /.Navbar -->
  </header>
  <!--/.Double navigation-->

  

</body>
