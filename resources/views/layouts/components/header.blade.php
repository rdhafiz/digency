<!-- header section start -->
<div class="header fixed-top">
    <a href="{{route('home')}}" class="header-logo">
        <img src="{{asset('images/default-logo.png')}}" class="img-fluid logo-1 logo-size" alt="logo-light">
        <img src="{{asset('images/default-logo.png')}}" class="img-fluid logo-2 logo-size" alt="logo-dark">
    </a>
    <a href="javascript:void(0)" class="controller-icon" onclick="btnController()">
        <i class="fa-solid fa-bars"></i>
    </a>
    <div class="header-menu">
        <a href="javascript:void(0)" class="close-btn" onclick="btnController()">
            <i class="fa-solid fa-x"></i>
        </a>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="dropdownToggle(event);dropIconToggle(event)">
                Home <i class="fa-solid fa-chevron-down drop-icon"></i>
            </a>
            <div class="menu-dropdown">
                <a href="{{route('home')}}" class="dropdown-links" onclick="btnController();">
                    Home page with slider
                </a>
                <a href="{{route('home-background-image')}}" class="dropdown-links" onclick="btnController()">
                    Home page with Background Image
                </a>
                <a href="{{route('home-background-video')}}" class="dropdown-links" onclick="btnController()">
                    Home page with Background Video
                </a>
                <a href="{{route('home-two-columns')}}" class="dropdown-links" onclick="btnController()">
                    Home page with Two Column
                </a>
                <a href="{{route('home-parallax-effect')}}" class="dropdown-links" onclick="btnController()">
                    Home page with Parallax Effect
                </a>
            </div>
        </div>
        <div class="header-item">
            <a href="#about" class="header-link" onclick="btnController()">
                About
            </a>
        </div>
        <div class="header-item">
            <a href="#service" class="header-link" onclick="btnController()">
                Services
            </a>
        </div>
        <div class="header-item">
            <a href="#portfolio" class="header-link" onclick="btnController()">
                Portfolio
            </a>
        </div>
        <div class="header-item">
            <a href="#pricing" class="header-link" onclick="btnController()">
                Price
            </a>
        </div>
        <div class="header-item">
            <a href="#blog" class="header-link" onclick="btnController()">
                Blog
            </a>
        </div>
        <div class="header-item">
            <a href="#contact" class="header-link" onclick="btnController()">
                Contact
            </a>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="dropdownToggle(event);dropIconToggle(event)">
                Components <i class="fa-solid fa-chevron-down drop-icon"></i>
            </a>
            <div class="menu-dropdown">
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController();">
                    CheckBox & Radio
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    Range
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    Alerts
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    Backgrounds
                </a>
                <a href="{{route('button-variations')}}" class="dropdown-links" onclick="btnController()">
                    Buttons
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    Pagination
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    Progress
                </a>
                <a href="{{route('loading-animation')}}" class="dropdown-links" onclick="btnController()">
                    Loading Animations
                </a>
                <a href="{{route('shadow-hover-effect')}}" class="dropdown-links" onclick="btnController()">
                    Hover Shadow
                </a>
                <a href="{{route('border-hover-effect')}}" class="dropdown-links" onclick="btnController()">
                    Hover Borders
                </a>
            </div>
        </div>
    </div>
</div>
<!-- header section end -->
