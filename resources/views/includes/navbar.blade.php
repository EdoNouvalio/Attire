<!-- navbar -->
<nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 {{-- fixed-top --}}">
    <div class = "container">
        <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.html">
            <img src = "{{ url('frontend/images/shopping-bag-icon.png') }}" alt = "site icon">
            <span class = "text-uppercase fw-lighter ms-2">Attire</span>
        </a>

        {{-- <div class = "order-lg-2 nav-btns">
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-heart"></i>
                <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary">4</span>
            </button>
            <button type = "button" class = "btn position-relative">
                <i class = "fa fa-search"></i>
            </button>
        </div> --}}

        <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
            <span class = "navbar-toggler-icon"></span>
        </button>

        <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
            <ul class = "navbar-nav mx-auto text-center">
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "/">home</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#collection">collection</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#special">specials</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#blogs">blogs</a>
                </li>
                <li class = "nav-item px-2 py-2">
                    <a class = "nav-link text-uppercase text-dark" href = "#about">about us</a>
                </li>
                <li class = "nav-item px-2 py-2 border-0">
                    <a class = "nav-link text-uppercase text-dark" href = "#popular">popular</a>
                </li>
            </ul>
            @guest
               <!-- Mobile Button -->
               <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{ 'login' }}'">
                  Masuk
                </button>
              </form>

              <!-- Desktop Button -->
              <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{ 'login' }}'">
                  Masuk
                </button>
              </form>
            @endguest

            @auth
            <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
              @csrf
             <button class="btn btn-login my-2 my-sm-0" type="submit">
               Keluar
             </button>
           </form>

           <!-- Desktop Button -->
           <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
            @csrf
             <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
               Keluar
             </button>
           </form>
            @endauth
        </div>
    </div>
</nav>
<!-- end of navbar -->