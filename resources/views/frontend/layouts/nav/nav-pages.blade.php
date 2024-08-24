<!-- header -->
<header class="header">
    <input id="header-default" type="radio" class="collapse" checked="checked" name="siteheader" />
    <input id="header-shown" type="radio" class="collapse" name="siteheader" />
    <input id="header-hidden" type="radio" class="collapse" name="siteheader" />

    <nav class="stick-menu menu-wrap simple line">
        <div class="menu-container menu-row">
            <div class="logo">
                <a href="/home"><img src="{{ asset('./assets/images/service/logo.png') }}" alt="Dern Support" /></a>
            </div>
            <div class="header-toggler pull-right xs-shown">
                <label class="header-shown-sign" for="header-hidden"><i class="fas fa-times"
                        aria-hidden="true"></i></label>
                <label class="header-hidden-sign" for="header-shown"><i class="fas fa-bars"
                        aria-hidden="true"></i></label>
            </div>
            <div class="clearfix xs-shown"></div>
            <div class="menu">
                <ul class="menu-items">
                    <li>
                        <a href="/home">Home</a>
                    </li>
                    <li>
                        <a href="/about">About us</a>
                    </li>
                    <li><a href="/shop">Shop</a></li>
                    <li><a href="/services">Services</a></li>
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>
                    @guest
                        <li class="menu-item-stick-left">
                            <a href="/register"><i class="fas fa-shopping-cart" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="{{ route('login') }}">Log in</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="menu-item-stick-left">
                            <a href="#" data-show-block="cart"><i class="fas fa-shopping-cart"
                                    aria-hidden="true"><span class="item-label-sale item-label">0</span></i>
                            </a>
                        </li>
                        <li>
                            <a class="nav-link dropdown-toggle" href="#">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle " height="30px" width="30px"
                                    src="{{ asset('./assets/images/icons/undraw_profile.svg') }}">
                            </a>
                            <ul class="center">
                                <li href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    style="cursor: pointer">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>
