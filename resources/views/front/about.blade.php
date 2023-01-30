@extends('front.layout')

@section('content')
    <!--
    page header - start
    -->
    <x-header text="BIZ HAQIMIZDA" name="Biz haqimizda" link="/about"></x-header>
    <!--
    page header - end
    -->

    <!--
    about section - start
    -->
    <div class="about-section">
        <div class="about-section-wrapper">
            <div class="container">
                <!--
                first half - start
                -->
                <div class="row">
                    <div class="col-lg-6 offset-lg-0 order-lg-1 col-md-8 offset-md-2 col-10 offset-1 order-2">
                        <div class="about-section-content c-grey">
                            <div class="section-heading">
                                <div class="sub-heading c-green upper ls-1">
                                    <i class="las la-user-circle"></i>
                                    <h5>KIRISH</h5>
                                </div>
                                <div class="main-heading c-dark">
                                    <h1> Bizning markazimiz  haqida </h1>
                                </div>
                            </div>
                            <p class="paragraph-big">Namangan muhandislik-texnalogiya instituti IT Parki - "Dasturiy mahsulotlar ishlab chiquvchi va zamonaviy IT kasblarini o'rgatuvchi markazdir".</p>
                            <p>Faoliyati boshlanganiga ko'p bo'lmagan bo'lsada bizning markazimizda institut talabalari va Namanganlik yoshlar zamonaviy kasblarni o'rganib kelmoqdalar.</p>
                            <p>Siz ham eng talabgir soha IT sohasini o'rganmoqchi bo'lsangiz vaqtni qo'ldan boy bermang va barchasini hozirdan biz bilan birga eng boshlang'ich darajadan boshlab o'rganing,.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-0 order-lg-2 col-md-8 offset-md-2 col-10 offset-1 order-1">
                        <div class="about-section-image">
                            <div class="pattern-image pattern-image-1">
                                <div class="pattern-image-wrapper">
                                    <img class="drop-shadow-4" src="assets/images/Rasm-img.JPG" alt="image">
                                    <div class="background-pattern background-pattern-radius drop-shadow">
                                        <div class="background-pattern-img background-loop" style="background-image: url(assets/images/patterns/pattern.jpg);"></div>
                                        <div class="background-pattern-gradient"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                first half - end
                -->
                <!--
                second half - start
                -->
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <h3 class="c-dark second-half-heading">Bizning afzalliklarimiz.</h3>
                    </div>
                </div>
                <div class="row gx-5 about-row">
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <a href="contact.html" class="icon">
                                    <i class="las la-laptop"></i>
                                </a>
                                <a href="/contact">
                                    <h3 class="c-dark"> IT muhit va ahil jamoa </h3>
                                </a>
                                <p class="c-grey">  Darslar yuqori malakali, o'z kasini mutaxassisi bo'lgan  Dasturchilar tomonidan olib boriladi.</p><br>
                            </div>
                            <a href="/contact" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <a href="/contact" class="icon">
                                    <i class="las la-school"></i>
                                </a>
                                <a href="/contact">
                                    <h3 class="c-dark"> Nazariya kamlik qiladi</h3>
                                </a>
                                <p class="c-grey"> "Amaliyotsiz  ta'lim suvsiz qudiq kabidir". Olgan bilimlaringiz haqiqatdan foydali bo'lishi uchum kurslarimiz amaliy mashg'ulotlar bilan  boyitilgan </p>
                            </div>
                            <a href="/contact" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <a href="/contact" class="icon">
                                    <i class="las la-graduation-cap"></i>
                                </a>
                                <a href="/contact">
                                    <h3 class="c-dark"> Talabalar uchun</h3>
                                </a>
                                <p class="c-grey"> Talabalar uchum Zamonaviy IT kasblarini o'rganish uchun bizda kurs uchun zamonaviy  Kompyuter,IT muhit ,shinam va qulay xonalar mavjud. </p>
                            </div>
                            <a href="contact.html" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--
                second half - end
                -->
            </div>
        </div>
    </div>
    <!--
    about section - end
    -->

    <!--
    team section - start
    -->
   @include('sections.about')
    <!--
    team section - end
    -->

    <!--
    gallelry - start
    -->
    @include('sections.gallery')
    <!--
    gallelry - end
    -->
@endsection
