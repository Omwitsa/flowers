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
               if(session('order_lines')){
                  // $count = count(session('order_lines'));

                  $order_lines = session('order_lines');
                  $arr_bunches  = Arr::pluck($order_lines, 'bunches');
                  session(['totalStems' => array_sum($arr_bunches)]);
                  $count = session('totalStems');
               }
            ?>
            <span class="badge badge-warning navbar-badge">{{$count}}</span>
         </a>
         <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right text-left">
            @if($count < 1)
               <h6 class="cart-header">Cart is empty</h6>
            @else
               <strong class="cart-header">Your Cart</strong>
               <div class="dropdown-divider"></div>
               @foreach (session('order_lines') as $index => $order_line)
                  <div class="media">
                     <img src="{{ asset('storage'.env('IMG_STORAGE').$order_line->picUrl) }}" alt="{{ $order_line->VarietyName }}" class="img-size-50 mr-3 img-circle">
                     <div class="media-body">
                        <h3 class="dropdown-item-title"> {{ $order_line->VarietyName }}</h3>
                        <!-- <h2 class="text-sm">KSH. 200</h2> -->
                     </div>

                     <a href="{{env('APP_ROOT')}}decrement-order-item/{{$index}}" class="float-right text-muted text-sm"><i class="fas fa-minus mr-1"></i></a>
                     <span class="float-right text-muted text-sm mr-1"><input type="number" min="1" oninput="validity.valid||(value='');" value="{{ $order_line->bunches }}"></span>
                     <a href="{{env('APP_ROOT')}}increment-order-item/{{$index}}" class="float-right text-muted text-sm"><i class="fas fa-plus mr-2"></i></a>
                     <a href="{{env('APP_ROOT')}}remove-order-item/{{$index}}" class="float-right text-muted text-sm"><i class="fas fa-trash mr-2"></i></a>
                  </div>

                  <div class="dropdown-divider"></div>
               @endforeach

               <!-- <a href="#" class="dropdown-item dropdown-footer">See All Messages</a> -->
               <div class="dropdown-item dropdown-footer row">
                  <div class="col-sm-6">

                  </div>
                  <div class="col-sm-6">
                     <a href="{{env('APP_ROOT')}}checkout/{{$count}}" class="btn btn-xs btn-checkout">CHECKOUT</a>
                  </div>
               </div>
            @endif
            <!-- <div class="dropdown-divider"></div> -->
         </div>
      </li>

      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="color: #b55068;">
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