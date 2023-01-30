@extends('front.layout')

@section('content')
      <!--
    page header - start
    -->
      <x-header text="KURSLARIMIZ" name="Kurslar" link="/courses"></x-header>
      <!--
    page header - end
    -->

      <!--
    courses section - start
    -->
      @include('sections.courses')
      <!--
    courses section - end
    -->

    @include('sections.gallery')

      <!--
    screen section - start
    -->
      <div class="screen-section">
        <div class="screen-section-wrapper">
          <!--
            screen section header - start
            -->
          <div class="container">
            <div class="row">
              <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                <div class="screen-section-header">
                  <div class="section-heading center-responsive">
                    <div class="sub-heading c-green upper ls-1">

                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>



        <div class="background-pattern background-pattern-1">
          <div
            class="background-pattern-img background-loop"
            style="background-image: url(assets/images/patterns/pattern.jpg)"
          ></div>
          <div class="background-pattern-gradient"></div>
          <div class="background-pattern-bottom">
            <div
              class="image"
              style="
                background-image: url(assets/images/patterns/pattern-1.jpg);
              "
            ></div>
          </div>
        </div>
      </div>
      <!--
    screen section - end
    -->



@endsection
