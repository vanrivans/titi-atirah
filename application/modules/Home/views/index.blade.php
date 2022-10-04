{{-- Get layout --}}
@extends('Layouts.layout')

{{-- Define header --}}
@section('header')
	
@endsection

{{-- Define main --}}
@section('main')
<div class="layout">
    
    @include('Home.views.partial_detail.firstview')
    
    @include('Home.views.partial_detail.about-us')

    @include('Home.views.partial_detail.our-product')

    @include('Home.views.partial_detail.privision')

    @include('Home.views.partial_detail.gallery')

    <section class="location" id="location">
        <div class="location__box">
            <div class="row">
                <div class="col-12">
                    <h2 class="title__menu">Location</h2>
                    @include('Layouts.icons.line-menu')
                    <p>Our Team is prepared and ready to start working with you. Our commitment is to complete your request in efficient manner. You can contact us to get detail information not only about provision but also other things such as fuel or maritime training.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="maps"></div>
                </div>
            </div>
        </div>
    </section>

</div>
	
@endsection

{{-- Define script --}}
@section('script')
    <script>
        $(document).ready( function() {
            $('.gallery__box').slick({
                // lazyLoad: 'ondemand',
                // dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>
@endsection

