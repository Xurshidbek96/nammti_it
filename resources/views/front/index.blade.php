@extends('front.layout')

@section('content')
    <!--
    navbar  start
    -->

        @include('sections.header')
    <!--
    navbar end
    -->

    <!--
    courses section - start
    -->
        @include('sections.courses')
    <!--
    courses section - end
    -->

    <!--
    video section - start
    -->
        @include('sections.video')
    <!--
    video section - end
    -->

    <!--
    about section - start
    -->
        @include('sections.about')
    <!--
    about section - end
    -->

    <!--
    faq section - start
    -->
        @include('sections.faqs')
    <!--
    faq section - end
    -->

    <!--
    projects section - start
    -->
        @include('sections.projects')
    <!--
    projects section - end
    -->

    <!--
    news section - start
    -->
        @include('sections.news')
    <!--
    news section - end
    -->

    <!--
    contact form section - start
    -->
    @if ($message = Session::get('success'))
        		<div class="alert alert-success">
            		<p>{{ $message }}</p>
        		</div>
    @endif
        @include('sections.contact')
    <!--
    contact form section - end
    -->

    <!--
    gallery - start
    -->
    @include('sections.gallery')
    <!--
    gallery - end
    -->
@endsection
