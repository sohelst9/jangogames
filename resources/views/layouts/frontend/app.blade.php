<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="twitter:title" content="Add title here">
    <meta name="twitter:description" content="Add description here">
    <meta name="twitter:url" content="https://your-website.com/twitter-image.png">
    <meta name="twitter:card" content="summary">
    @yield('header')
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon/favicon.png') }}" type="image/x-icon">

    <!-- ==========OWL CAROUSEL CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owlcarousel/css/owl.carousel.min.css') }}">
    <!-- ==========OWL CAROUSEL CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/owlcarousel/css/owl.theme.default.min.css') }}">
    <!-- ==========SWIPER SLIDER CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/swiper slider/css/swiper-bundle.min.css') }}">
    <!-- ==========GLIGHBOX  CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/glightbox/css/glightbox.min.css') }}">
    <!-- ==========BOOTSTARP CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/bootstarp5/css/bootstrap.min.css') }}">

    <!-- ==========FONTAWESOME CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendors/font-awesome/css/all.min.css') }}">
    <!-- ==========UNICONS CSS LINK========== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ==========RAJDHANI GOOGLE FONT LINK========== -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- ==========CUSTOM CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <!-- ==========RESPONSIVE CSS LINK========== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
</head>

<body>

    @include('partials.frontend.header')

    @yield('frontend_content')

    @include('partials.frontend.footer')



    <!-- ==========JS HERE========== -->
    <!-- ==========MAIN JQUREY LINK========== -->
    <script src="{{ asset('assets/frontend/vendors/jqurey/jquery-3.6.0.min.js') }}"></script>
    <!-- ==========BOOTSTARP JS BUNDLE========== -->
    <script src="{{ asset('assets/frontend/vendors/bootstarp5/js/popper.min.js') }}"></script>
    <!-- ==========BOOTSTARP JS BUNDLE========== -->
    <script src="{{ asset('assets/frontend/vendors/bootstarp5/js/bootstrap.min.js') }}"></script>
    <!-- ==========SWIPER SLIDER JS ========== -->
    <script src="{{ asset('assets/frontend/vendors/swiper slider/js/swiper-bundle.min.js') }}"></script>
    <!-- ==========VANILA TILT JS========== -->
    <script src="{{ asset('assets/frontend/vendors/vanila tilt/js/vanilla-tilt.min.js') }}"></script>
    <!-- ==========OWL CAROUSEL  JS========== -->
    <script src="{{ asset('assets/frontend/vendors/owlcarousel/js/owl.carousel.min.js') }}"></script>
    <!-- ==========GLIGHTBOX JS ========== -->
    <script src="{{ asset('assets/frontend/vendors/glightbox/js/glightbox.min.js') }}"></script>
    <!-- ==========LORD  ICON JS ========== -->
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <!-- ==========CUSTOM JS ========== -->
    <script src="{{ asset('assets/frontend/js/app.js') }}"></script>

    <script>
        // ======================================
        // COOKIES ACTIVATION CODE
        // ======================================

        const cookieContainer = document.querySelector(".cookie-container");
        const cookieBtn = document.querySelector("#cookies_btn");

        cookieBtn.addEventListener("click", () => {
            cookieContainer.classList.remove("active");
            localStorage.setItem("cookieBannerDisplayed", "true");
        });

        setTimeout(() => {
            if (!localStorage.getItem("cookieBannerDisplayed"))
                cookieContainer.classList.add("active");
        }, 100);



        VanillaTilt.init(document.querySelectorAll(".cattegoryBx", ".tagCard", ), {
            max: 25,
            speed: 1000,
            reverse: true,
            glare: true,
            "max-glare": 1,
            maxTilt: 20,
            perspective: 1000, // Transform perspective, the lower the more extreme the tilt gets.
            easing: "cubic-bezier(.01,.18,.52,.09)", // Easing on enter/exit.
            scale: 1, // 2 = 200%, 1.5 = 150%, etc..
            speed: 300, // Speed of the enter/exit transition.
            transition: true, // Set a transition on enter/exit.
            disableAxis: true, // What axis should be disabled. Can be X or Y.
            reset: true, // If the tilt effect has to be reset on exit.
            glare: false, // Enables glare effect
            maxGlare: 1 // From 0 - 1.
        });
    </script>

</body>

</html>
