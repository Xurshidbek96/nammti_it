@extends('front.layout')

@section('content')
    <!--
    page header - start
    -->
    <x-header text="Biz bilan bog'lanish" name="Bog'lanish" link="/contact"></x-header>
    <!--
    page header - end
    -->
    @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    @endif

    <!--
    contact details - start
    -->
    <div class="contact-details">
        <div class="contact-details-wrapper">
            <div class="container">
                <!--
                contact details heading - start
                -->
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="section-heading center width-55">
                            <div class="sub-heading c-green upper ls-1">
                                <i class="las la-handshake"></i>
                                <h5> BOG'LANING</h5>
                            </div>
                            <div class="main-heading c-dark">
                                <h1> Biz bilan bog'lanishning ko'plab usullari.</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                contact details heading - end
                -->
                <!--
                contact details row - start
                -->
                <div class="row gx-5 details-row">
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <div class="icon">
                                    <i class="las la-phone-volume"></i>
                                </div>
                                <h3 class="c-dark"> Xizmat raqami</h3>
                                <p class="c-grey">
                                    Telefon:
                                    <a href="tel:+998994331417" class="link-underline link-underline-1">
                                        <span>+998994331417</span>
                                    </a>
                                </p>
                                <p class="c-grey">
                                    Telefon:
                                    <a href="tel:+998994331417" class="link-underline link-underline-1">
                                        <span>+998970371417</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <div class="icon">
                                    <i class="las la-envelope-open"></i>
                                </div>
                                <h3 class="c-dark">  Elektron pochta</h3>
                                <p class="c-grey">
                                    <a href="mailto:media@orions.com" class="link-underline link-underline-1">
                                        <span> nammtidev@gmail.com</span>
                                    </a>
                                </p>
                                <p class="c-grey">
                                    <a href="mailto:support@orions.com" class="link-underline link-underline-1">
                                        <span> nammtidev@gmail.com</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-1">
                            <div class="app-feature-single-wrapper">
                                <div class="icon">
                                    <i class="las la-map-marked-alt"></i>
                                </div>
                                <h3 class="c-dark">Bizni manzil:</h3>
                                <p class="c-grey">Namangan shaxar.</p>
                                <p class="c-grey">Davlatabod, 2-mikrayon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                contact details row - end
                -->
            </div>
        </div>
    </div>
    <!--
    contact details - end
    -->

    <!--
    contact form section - start
    -->
    @include('sections.contact')
    <!--
    contact form section - end
    -->
@endsection
