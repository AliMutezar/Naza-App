<header id="xb-header-area" class="site-header header-default is-sticky">
    <div class="xb-header__wrap xb-header-has-arrow xb-header">
        <div class="container mxw_1710">
            <div class="ul_li_between">
                <div class="xb-header__logo">
                    <a href="index.html"><img src="assets/img/logo/logo1.svg" alt=""></a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="menu-item-has-children {{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}"><span>Home</span></a></li>
                            <li class="menu-item-has-children {{ request()->routeIs('services', 'service.details') ? 'active' : '' }}">
                                <a href="{{ route('services') }}"><span>Services</span></a>
                                {{-- <ul class="submenu">
                                    <li class="{{ request()->routeIs('services') ? 'active' : '' }}"><a href="{{ route('services') }}"><span>Services</span></a></li>
                                    <li class="{{ request()->routeIs('service.details') ? 'active' : '' }}"><a href="{{ route('service.details') }}"><span>Service Details</span></a></li>
                                </ul> --}}
                            </li>                            
                            <li class="menu-item-has-children {{ request()->routeIs('porfolio', 'porfolio.details') ? 'active' : '' }}">
                                <a href="{{ route('porfolio') }}"><span>Case Studies</span></a>
                                {{-- <ul class="submenu">
                                    <li class="{{ request()->routeIs('porfolio') ? 'active' : '' }}"><a href="{{ route('porfolio') }}"><span>Portfolio</span></a></li>
                                    <li class="{{ request()->routeIs('porfolio.details') ? 'active' : '' }}"><a href=" {{ route('porfolio.details') }} "><span>Portfolio Details</span></a></li>
                                </ul> --}}
                            </li>
                            <li class="{{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}"><span>Contact</span></a></li>
                            <li class="{{ request()->routeIs('career') ? 'active' : '' }}"><a href="{{ route('career') }}"><span>Career</span></a></li>
                        </ul>
                    </nav>
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                    <a href="index.html" rel="home"><img src="assets/img/logo/logo1.svg"
                                            alt=""></a>
                                </div>
                                {{-- <div class="xb-header-mobile-search xb-hide-xl">
                                    <form role="search" action="#">
                                        <input type="text" placeholder="Search..." name="s"
                                            class="search-field">
                                    </form>
                                </div> --}}
                                {{-- <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#"><span>Home</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item active"><a class="active"
                                                        href="index.html"><span>Financial Consultant</span></a>
                                                </li>
                                                <li class="menu-item"><a
                                                        href="home-business.html"><span>Business
                                                            Consultant</span></a></li>
                                                <li class="menu-item"><a
                                                        href="home-digital-marketing.html"><span>Digital
                                                            Marketing</span></a></li>
                                                <li class="menu-item"><a href="home-law.html"><span>Lawyer
                                                            Firms</span></a></li>
                                                <li class="menu-item"><a
                                                        href="home-insurance.html"><span>Insurance
                                                            Business</span></a></li>
                                                <li class="menu-item"><a href="home-advisor.html"><span>Personal
                                                            Advisor</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#"><span>Pages</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a
                                                        href="about.html"><span>About</span></a></li>
                                                <li class="menu-item"><a
                                                        href="services.html"><span>Services</span></a></li>
                                                <li class="menu-item"><a
                                                        href="service-single.html"><span>Service
                                                            Details</span></a></li>
                                                <li class="menu-item"><a
                                                        href="career.html"><span>Career</span></a></li>
                                                <li class="menu-item"><a href="career-single.html"><span>Career
                                                            Details</span></a></li>
                                                <li class="menu-item"><a href="team.html"><span>Team</span></a>
                                                </li>
                                                <li class="menu-item"><a href="team-single.html"><span>Team
                                                            Details</span></a></li>
                                                <li class="menu-item"><a
                                                        href="pricing.html"><span>Pricing</span></a></li>
                                                <li class="menu-item"><a href="faq.html"><span>FAQ</span></a>
                                                </li>
                                                <li class="menu-item"><a href="404.html"><span>404</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="portfolio.html"><span>Portfolio</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a
                                                        href="portfolio.html"><span>Portfolio</span></a></li>
                                                <li class="menu-item"><a
                                                        href="portfolio-single.html"><span>Portfolio
                                                            Details</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="shop.html"><span>Shop</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="shop.html"><span>Shop</span></a>
                                                </li>
                                                <li class="menu-item"><a href="shop-single.html"><span>Shop
                                                            Details</span></a></li>
                                                <li class="menu-item"><a href="cart.html"><span>Shop
                                                            Cart</span></a></li>
                                                <li class="menu-item"><a
                                                        href="checkout.html"><span>Checkout</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog.html"><span>Blog</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog.html"><span>Blog</span></a>
                                                </li>
                                                <li class="menu-item"><a href="blog-single.html"><span>Blog
                                                            Details</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="contact.html"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav> --}}
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>
                </div>
                <div class="xb-header__btn d-none d-lg-block">
                    {{-- <a class="xb-btn" href="{{ route('login') }}">LOGIN</a> --}}
                </div>
                <div class="xb-hamburger-menu">
                    <div class="xb-nav-mobile">
                        <div class="xb-nav-mobile-button"><i class="fal fa-bars"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>