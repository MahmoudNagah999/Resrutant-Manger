@php use App\User; @endphp

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
             <a class="navbar-brand" href="/welcome"><i class="fa fa-gopuram"></i> ParcDesPrinces</a>
        </div>
        
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/home"><i class="fa fa-home"></i> Home</a></li>
                @if (Route::has('login'))                
                    @if (Auth::check())
                        <li><a href="{{ url('/menu') }}"><i class="fa fa-clone"></i> Menu</a></li>
                    @endif
                    
                    <li><a href="/about"><i class="fa fa-users"></i> About us</a></li>
                    <li><a href="/contact"><i class="fa fa-phone"></i> Contact us</a></li>
                @endif
            
            </ul>
            <ul class="nav navbar-nav navbar-right"> 
                 @if (Route::has('login'))  
                    @if (Auth::check())
                     <!-- <div class="OrderCartButton"> -->
                    <a class="btn btn-primary NavbarCart" href="/submitorder"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                        <span class="badge">
                           {{ Session::has('cart') ? Session::get('cart')->TotalQny : '0' }}
                        </span>
                    </a>
              
                        @if(Auth::user()->role_id==1)
                        
                            <li><a href="/profile"><i class="fa fa-user-o "></i> Profile page</a></li>
                        @endif
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-unlock-alt "></i> logout</a></li>
                    @else
                        <li><a href="{{ url('/login') }}"><i class="fa fa-unlock-alt "></i> Login</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                    @endif
                @endif    
               
            </ul>
        </div>
    </div>
  </nav>