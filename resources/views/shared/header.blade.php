<nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <!-- Left navbar links -->
   <ul class="navbar-nav">
         <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="{{env('APP_ROOT')}}" class="nav-link">Home</a>
         </li> -->
         <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
         </li> -->
   </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
         </div>
      </li> -->

      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#">
            <img class="header-icon" src="{{env('APP_ROOT')}}assets/images/icons/Cart.png" width="30" height="30"  alt="Cart">
            <?php 
               $count = 0;
               // session('order_lines')
               // if(isset($_SESSION["cartitems"])){
               //    $count = count($_SESSION["cartitems"]);
               // }
            ?>
            <span class="badge badge-warning navbar-badge">{{$count}}</span>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-center">
            @if($count < 1)
               <h6>Cart is empty</h6>
            @else
               <?php 
                  $count = 0;
                  foreach(session('order_lines') as $row){
                     $count++;
                     // $tprice=$row["price"]*$row["quantity"];
                     // $total=$total+$tprice;
                  }
               ?>

               <h6>{{$count}}</h6>
            @endif
            <!-- <div class="dropdown-divider"></div> -->
         </div>
      </li>

      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: #f46c88;">
            <img class="header-icon" src="{{env('APP_ROOT')}}assets/images/icons/profile.png" alt="Profile">
         </a>
         <div class="dropdown-menu dropdown-menu-right">
            <a href="{{env('APP_ROOT')}}logout" class="dropdown-item">Logout</a>
            <!-- <div class="dropdown-divider"></div> -->
         </div>
      </li>

      <!-- <li class="nav-item">
         <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
         </a>
      </li> -->
   </ul>
</nav>