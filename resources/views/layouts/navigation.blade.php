 <!-- Navbar -->
 <nav id="navbar-example2" class="navbar fixed-top navbar-expand-lg">
     <div class="container">
         <a class="navbar-brand d-flex align-items-center" style="color: #f0d06c" href="{{ route('dashboard') }}">
             <img src="{{ asset('front/img/logo.png') }}" alt="Logo" class="me-3" width="40" height="30" />
             {{ __('Cahaya Minang') }}
         </a>
         <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
             <ul class="navbar-nav mx-auto">
                 <li class="nav-item mx-3">
                     <a class="nav-link active nav-top" aria-current="page" href="index.html">Home</a>
                 </li>
                 <li class="nav-item mx-3">
                     <a class="nav-link nav-top" href="about.html">About Us</a>
                 </li>
                 <li class="nav-item mx-3">
                     <a class="nav-link nav-top" href="gallery.html">Gallery</a>
                 </li>
                 <li class="nav-item mx-3">
                     <a class="nav-link nav-top" href="package.html">Package</a>
                 </li>
             </ul>
             <ul class="navbar-nav text-center">
                 <!-- Authentication Links -->
                 @auth
                     <li class="nav-item dropdown dropdown-nav-link">
                         <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             {{ Auth::user()->name }}
                         </a>

                         <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item text-dark" href="{{ route('profile.edit') }}">
                                 {{ __('Profile') }}
                             </a>
                             <a class="dropdown-item text-dark" href="{{ route('profile.edit') }}">
                                 History
                             </a>
                             <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                 {{ __('Log Out') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form>
                         </div>
                     </li>
                 @else
                     <a href="{{ route('login') }}" class="nav-link btn btn-info mx-3 my-1 text-white fw-bold">
                         Log in
                     </a>

                     @if (Route::has('register'))
                         <a href="{{ route('register') }}" class="nav-link btn btn-secondary mx-3 my-1 text-white fw-bold">
                             Register
                         </a>
                     @endif
                 @endauth
                 </li>
             </ul>

         </div>
     </div>
 </nav>