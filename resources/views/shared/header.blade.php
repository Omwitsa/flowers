<header class="main-header-top hidden-print">
         <!-- <a href="index.html" class="logo"><img class="img-fluid able-logo" src="assets/images/logo.png" alt="Theme-logo"></a> -->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
           
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
               <ul class="top-nav">
                  <!--Notification Menu-->
                    
                  <li class="dropdown notification-menu">
                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                        <i class="icon-bell"></i>
                        <span class="badge badge-danger header-badge">9</span>
                     </a>
                     <ul class="dropdown-menu">
                        <!-- <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>
                        <li class="bell-notification">
                           <a href="javascript:;" class="media">
                              <span class="media-left media-icon">
								<img class="img-circle" src="assets/images/avatar-1.png" alt="User Image">
							  </span>
                              <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div>
                           </a>
                        </li>
                        
                        <li class="not-footer">
                           <a href="#!">See all notifications.</a>
                        </li> -->
                     </ul>
                  </li>
                  
                  <!-- window screen -->
                  <li class="pc-rheader-submenu">
                     <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">
                        <i class="icon-size-fullscreen"></i>
                     </a>

                  </li>
                  <!-- User Menu-->
                  <li class="dropdown">
                     <a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="{{env('APP_ROOT')}}assets/images/avatar-4.jpg" style="width:40px;" alt="User Image"></span>
                        <span>{{auth()->user()->usercode}} <i class=" icofont icofont-simple-down"></i></span>
                     </a>

                     <ul class="dropdown-menu settings-menu">
                        <li><a href="{{env('APP_ROOT')}}logout"><i class="icon-logout"></i> Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>