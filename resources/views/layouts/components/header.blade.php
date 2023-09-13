<!-- header section start -->
<div class="header fixed-top">
    <a href="{{route('home')}}" class="header-logo">
        <img src="{{asset('images/home/logo-light.png')}}" class="img-fluid logo-1" alt="logo-light">
        <img src="{{asset('images/home/logo-dark.png')}}" class="img-fluid logo-2" alt="logo-dark">
    </a>
    <a href="javascript:void(0)" class="controller-icon" onclick="btnController()">
        <i class="fa-solid fa-bars"></i>
    </a>
    <div class="header-menu">
        <a href="javascript:void(0)" class="close-btn" onclick="btnController()">
            <i class="fa-solid fa-x"></i>
        </a>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="dropdownToggle();dropIconToggle()">
                Home <i class="fa-solid fa-chevron-down drop-icon"></i>
            </a>
            <div class="menu-dropdown">
                <a href="{{route('home')}}" class="dropdown-links" onclick="btnController()">
                    01. Home page with slider
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    02. Home page with Background Image
                </a>
                <a href="{{route('backgroundVideo')}}" class="dropdown-links" onclick="btnController()">
                    03. Home page with Background Video
                </a>
                <a href="javascript:void(0)" class="dropdown-links" onclick="btnController()">
                    04. Home page with Two Column
                </a>
                <a href="{{route('parallaxEffect')}}" class="dropdown-links" onclick="btnController()">
                    05. Home page with Parallax Effect
                </a>
            </div>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="btnController()">
                About
            </a>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="btnController()">
                Services
            </a>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="btnController()">
                Portfolio
            </a>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="btnController()">
                Price
            </a>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="btnController()">
                Blog
            </a>
        </div>
        <div class="header-item">
            <a href="javascript:void(0)" class="header-link" onclick="btnController()">
                Contact
            </a>
        </div>
    </div>
</div>
<!-- header section end -->
