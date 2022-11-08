<!-- Small Devices Header
============================================= -->
<div class="dtr-responsive-header fixed-top px-12">
    <div class="container">

        <!-- small devices logo -->
        <a href="index.html"><img src="assets/images/logo.png" class="w-20" alt="logo"></a>
        <!-- small devices logo ends -->

        <!-- menu button -->
        <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
    </div>
    <div class="dtr-responsive-header-menu"></div>
</div>
<!-- Small Devices Header ends
============================================= -->

<!-- header starts
============================================= -->
<header id="dtr-header-global" class="fixed-top ">
    <div class="d-flex align-items-center justify-content-between px-12">

        <!-- header left starts -->
        <div class="dtr-header-left">

            <!-- logo -->
            <a class="logo-default dtr-scroll-link" href="#home"><img src="assets/images/logo.png" class="w-28" alt="logo"></a>

            <!-- logo on scroll -->
            <a class="logo-alt dtr-scroll-link" href="#home"><img src="assets/images/logo.png" class="w-28" alt="logo"></a>
            <!-- logo on scroll ends -->

        </div>
        <!-- header left ends -->

        <!-- header right starts -->
        <div class="dtr-header-right ml-auto">

            <!-- contact starts -->
            <div class="dtr-header-contact dtr-ml-50 dtr-mt-5">
                <p><a href="#"> <i class="icon-phone-call dtr-mr-5 color-dark"></i> 000 000 000 000 </a></p>
            </div>
            <!-- contact ends -->

            <!-- menu starts-->
            <div class="main-navigation dtr-menu-light">
                <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                    <li> <a class="nav-link active" href="{{route('home')}}">Home.</a> </li>
                    <li> <a class="nav-link" href="{{route('services')}}">Services.</a> </li>
                    <li> <a class="nav-link" href="{{route('contact')}}">Contact.</a> </li>
                </ul>
            </div>
            <!-- menu ends -->

        </div>
        <!-- header right ends -->

    </div>
</header>
<!-- header ends
================================================== -->
