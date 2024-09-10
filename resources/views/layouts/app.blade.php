<!DOCTYPE html>
<html lang="en" dir="rtl">
<!--!--------------- Header Start -->
        @include('layouts.header')
<!--!--------------- Header End -->

<!-- <div id="pills-home_1" class="tab-content d-block container-xxl w-100"></div> -->

<body>
    @include('sweetalert::alert')

    <!-- Spinner Start -->

    <!-- Spinner End -->

    <!--!--------------- Navbar Start -->
        @include('layouts.navbar')
    <!--!--------------- Navbar End -->

    <!--&--------------- Carousel Start -->
    <div class="container-fluid mx-0  carousel-ct  pt-5">
        <div class="row container-xxl mx-auto ">
            <div class="col-lg-5 pt-5">
                <h1 class="carosel-title ">
                    صحبة
                    للسياحــة
                </h1>
                <h2 class="carousel-sub mt-0">
                    معًا صحبة للحبيب
                </h2>
                <p class="carosel-desc">أهلاً بكم في صحبة للسياحة، الشركة المصرية الرائدة في مجال السياحة منذ عام 2009.
                    نقدم خدمات سياحية متنوعة بأعلى معايير الجودة، ونتعاون مع أفضل مقدمي الخدمات السياحية لضمان تجربة
                    فريدة تفوق توقعات عملائنا.</p>
                <p class="carousel-second-sub">انضم إلينا في رحلة العمر، واترك لنا كل ما قد يشغل بالك.</p>
                <a href="#register" class="register mt-4">سجل الآن</a>
            </div>
        </div>
    </div>
    <!--&--------------- Carousel End -->

@yield('content')


    <!--* --------------Vendor Start -->
    <!--* --------------Vendor End -->

    <!--&--------------- Form Start -->
    <!--&--------------- Form End -->

    <!--//-------------- Footer Start -->
                @include('layouts.footer')
    <!--//-------------- Footer End -->
    <!-- end Back to Top -->
    <!--//-------------- Scripts Start -->
                @include('layouts.scripts')
    <!--//-------------- Scripts End -->
    

</body>

</html>