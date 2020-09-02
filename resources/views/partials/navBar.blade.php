<?php

  if (!auth()->guest()) {
    $super_admin = Auth::user()->hasRoles(['SuperAdmin']);
    $doctor = Auth::user()->hasRoles(['Doctor']);
    $cliente = Auth::user()->hasRoles(['Cliente']);
  }
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-main">
  <!-- <a class="navbar-brand" href="#">Zukubo</a> -->  
  <!-- <a href="/"><img class="logo-navBar" src="{{asset('images/logo2.png')}}" alt="Logo Zukubo"></a> -->  
  <img class="logo-navBar" src="{{asset('images/logo1.png')}}" alt="Logo Zukubo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item active">
        @if (auth()->guest())
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>          
        @elseif ($super_admin)    
          <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>  
        @endif
      </li> -->
      @if (auth()->guest())                
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{URL::to('/pricing')}}">Pricing</a>
        </li>
      @endif

      @guest      
        <li class="nav-item dropdown" style="padding-left:20px; padding-right:20px;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Validaciones
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">  
            <a href="" class="dropdown-item" >Validar URL</a>      
            <a href="" class="dropdown-item" >Validar imagen</a>                                
          </div>
        </li>  

        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Submenu action</a></li>
                
              </ul>
            </li>
          </ul>
        </li> -->
        
      @else          
        <li class="nav-item dropdown">            
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user btn-sm"></i>                 
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"                  
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">                    
                Cerrar sesión
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{URL::to('/usuarios/editar/'.Auth::user()->id)}}">Mi perfil</a>
            <!-- <a class="dropdown-item" href="{{URL::to('/doctor/reporte/'.Auth::user()->id)}}">Configuraciones</a> -->

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>
        </li>            
      @endguest  
            

      @if (auth()->guest()) 
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ (app()->getLocale() == 'es') ? 'ES' : 'EN' }}
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1"> 
        <a href="{{ url('locale/es') }}" class="dropdown-item"><i class="fa fa-language"></i> {{ __('header.espanol') }}</a>
        <a href="{{ url('locale/en') }}" class="dropdown-item"><i class="fa fa-language"></i> {{ __('header.ingles') }}</a>
        </div>
      </li>       -->
      @endif
      <p class="font-size130p left top10px">
          <a class="text-black" href="https://www.facebook.com/oneprotech/" target="_blank"> 
              <i class="scaleIcon1-2 fa fa-facebook">
              </i>
          </a>
          <a class="text-black" href="https://www.instagram.com/onepro_tech/" target="_blank">
              <i class="scaleIcon1-2 fa fa-instagram left10px">
              </i>
          </a>
          <a class="text-black" href="https://twitter.com/oneprotech/" target="_blank">
              <i class="scaleIcon1-2 fa fa-twitter left10px">
              </i>
          </a>
      </p>

    </ul>

  </div>
</nav>



