<nav class="navbar navbar-expand-lg bg-light-1">
    <div class="container">
      <a class="navbar-brand" href="{{route('accueil')}}">DINGANGANA</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="nav ">
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle"  data-toggle="dropdown" aria-expanded="false" href="{{route('show')}}" aria-current="page" href="#">FILM</a>
            <div class="dropdown-menu">
              <a class="dropdown-item black text-dark" href="{{route('show')}}">Film video</a>
              <a class="dropdown-item black text-dark" href="{{route('displayaudio')}}">Film audio</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">A PROPOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('history')}}" >NOS HISTOIRES</a>
          </li>
          
            <li class="nav-item dropdown">
            <a class='nav-link dropdown-toggle' data-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle text-white"></i></a>
            <div class="dropdown-menu">

              <!-- menu -->
 <!-- Right Side Of Navbar -->
            
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                             
                                    <a class="dropdown-item text-dark" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                              
                            @endif

                            @if (Route::has('register'))
                             
                                    <a class="dropdown-item text-dark" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                               
                            @endif
                        @else
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Se deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              

              <!-- end enu -->
              
            </div>
            </li>
          
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- modal insciption-->
  <!-- Button trigger modal -->