<header>
    <!-- Header desktop -->
    <div class="container-menu-desktop">
        <div class="top-bar bg-main">
            <div class="container">
                <div class="content-topbar">
                    <div class="right-top-bar">
                        <span>
                            <i class="icon_phone" aria-hidden="true"></i>
                            <span>+7-800-555-32-55</span>
                        </span>

                        <span>
                            <i class="icon_pin" aria-hidden="true"></i>
                            <span>г. Москва, ул.Домодедовская, д.28 (3 этаж)</span>
                        </span>

                        <span>
                            <i class="icon_clock" aria-hidden="true"></i>
                            <span>9.00 - 20.00</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrap-menu-desktop">
            <div class="limiter-menu-desktop">

                <!-- Logo desktop -->
                <a href="{{ route('client.home') }}" class="logo">
                    <img src="{{ asset('client/images/icons/logo.png') }}" alt="IMG-LOGO">
                </a>

                <!-- Menu desktop -->
                <div class="menu-desktop">
                    <ul class="main-menu">
                        <li>
                            <a href="{{ route('client.home') }}">Главная</a>
                        </li>
                        <li>
                            <a href="{{ route('client.price') }}">Цены</a>
                        </li>
                        <li class="respon-sub-menu">
                            <a href="{{ route('client.about') }}">О школе</a>
                        </li>
                        <li class="respon-sub-menu">
                            <a href="{{ route('client.contacts') }}">Контакты</a>
                        </li>
                    </ul>
                </div>


            </div>
        </div>
    </div>
    <!-- Header Mobile -->
    <div class="wrap-header-mobile">
        <!-- Logo moblie -->
        <a href="{{ route('client.home') }}" class="logo-mobile">
            <img src="{{ asset('client/images/icons/logo.png') }}" alt="IMG-LOGO">
        </a>
        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </div>

    </div>
    <div class="menu-mobile">
        <ul class="main-menu-m bg-main">
            <li class="bg-main">
                <a href="{{ route('client.home') }}">Главная</a>
            </li>
            <li class="bg-main">
                <a href="{{ route('client.price') }}">Цены</a>
            </li>
            <li class="bg-main">
                <a href="{{ route('client.about') }}">О школе</a>
            </li>
            <li class="bg-main">
                <a href="{{ route('client.contacts') }}">Контакты</a>
            </li>
        </ul>
    </div>
</header>