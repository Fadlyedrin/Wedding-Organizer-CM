

               <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                              <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" aria-current="page" href="{{ url('admin/dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                              </a>
                              <a class="nav-link " href="#">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                                Data Pemesanan
                               </a>
                              <a class="nav-link {{ request()->is('admin/users') ? 'active' : '' }}" href="{{ url('admin/users') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Data User
                              </a>
                              <a class="nav-link {{ request()->is('admin/categories') ? 'active' : '' }}" href="{{ url('admin/categories') }}">
                               <div class="sb-nav-link-icon"><i class="fa-solid fa-list"></i></div>
                                Categories
                              </a>
                                          <a class="nav-link {{ request()->is('admin/packages*') ? 'active' : '' }}" href="{{ url('admin/packages') }}">
                                  <div class="sb-nav-link-icon"><i class="fa-solid fa-cube"></i></div>
                                  Package
                                </a>
                                            <a class="nav-link {{ request()->is('admin/galleries') ? 'active' : '' }}" href="{{ url('admin/galleries') }}">
                                  <div class="sb-nav-link-icon"><i class="fa-solid fa-image"></i></div>
                                  Gallery
                                </a>
                                            <a class="nav-link" href="#">
                                  <div class="sb-nav-link-icon"><i class="fa-regular fa-address-book"></i></div>
                                  Contact Form
                                </a>

                                  </div>
                              </div>
                              <div class="sb-sidenav-footer">
                                  <div class="small">Logged in as:</div>
                                  {{ Auth::user()->name }}
                              </div>
                          </nav>