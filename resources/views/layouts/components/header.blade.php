<!-- header section start -->
<div class="header fixed-top">
    <a href="#home" class="header-logo">
        @if(Request::route()->getName() == 'home-two-columns')
            <img src="{{asset('images/home/logo-dark.png')}}" class="img-fluid" alt="">
        @else
            <img src="{{asset('images/home/logo-light.png')}}" class="img-fluid logo-1" alt="">
            <img src="{{asset('images/home/logo-dark.png')}}" class="img-fluid logo-2" alt="">
        @endif
    </a>

    @if(Request::route()->getName() == 'home-two-columns')
        <a href="javascript:void(0)" class="controller-icon text-dark" onclick="btnController()">
            <i class="fa-solid fa-bars"></i>
        </a>
    @else
        <a href="javascript:void(0)" class="controller-icon" onclick="btnController()">
            <i class="fa-solid fa-bars"></i>
        </a>
    @endif


    <div class="header-menu">
        <a href="javascript:void(0)" class="close-btn" onclick="btnController()">
            <i class="fa-solid fa-x"></i>
        </a>
        <a href="#home" class="header-link active" onclick="btnController()">
            Home
        </a>
        <a href="#about" class="header-link" onclick="btnController()">
            About
        </a>
        <a href="#service" class="header-link" onclick="btnController()">
            Services
        </a>
        <a href="#portfolio" class="header-link" onclick="btnController()">
            Portfolio
        </a>
        <a href="#pricing" class="header-link" onclick="btnController()">
            Price
        </a>
        <a href="#blog" class="header-link" onclick="btnController()">
            Blog
        </a>
        <a href="#contact" class="header-link" onclick="btnController()">
            Contact
        </a>
    </div>
</div>
<!-- header section end -->
