@extends('site_layouts.site')
@section('content')
    <!-- Slider area -->
    @include('site_includes.slider')
    <!-- End Slider area -->

    <!-- Professional Builde -->
    @include('site_includes.vprop')
    <!-- End Professional Builde -->

    <!-- About Us Area -->
    @include('site_includes.about')
    <!-- End About Us Area -->

    <!-- What ew offer Area -->
    @include('site_includes.services')
    <!-- End What ew offer Area -->

        <!-- Our Featured Works Area -->
        @include('site_includes.gallery')
        <!-- End Our Featured Works Area -->

      <!-- Our Achievments Area -->
    @include('site_includes.achieve')
    <!-- End Our Achievments Area -->

    <!-- Our Testimonial Area -->
    @include('site_includes.testimonial')
    <!-- End Our testimonial Area -->



    <!-- Our Partners Area -->
 @include('site_includes.partner')
    <!-- End Our Partners Area -->

@stop

