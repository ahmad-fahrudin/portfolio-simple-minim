<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ahmad Fahrudin - Fullstack Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="./packages/css/swiper-bundle.min.css">

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="./packages/css/styles.css">

    <!-- App favicon -->
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">

</head>

<body>
    <!--==================== HEADER ====================-->
    @include('layouts.header')

    <!--==================== MAIN ====================-->
    @include('index')

    <!--==================== FOOTER ====================-->
    @include('layouts.footer')

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup__icon"></i>
    </a>


    <!--==================== SWIPER JS ====================-->
    <script src="./packages/js/swiper-bundle.min.js"></script>

    <!--==================== MAIN JS ====================-->
    <script src="./packages/js/main.js"></script>
</body>

</html>
