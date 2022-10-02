{{-- Get layout --}}
@extends('Layouts.layout')

{{-- Define header --}}
@section('header')
	
@endsection

{{-- Define main --}}
@section('main')
<div class="layout">
    
	<section class="firstview">
		<div class="firstview__box">
            <h1>We are delivering fresh provisions to ships</h1>
            <h3>Our provision comes together with "always fresh and in a high quality" provisions/food, and it will be delivered to your place promptly without takes long transport time</h3>
            <a href="contact-us" target="_self" class="common-button">
                Contact Us
            </a>
		</div>
    </section>

    @include('Home.views.partial_detail.about-us')

    @include('Home.views.partial_detail.our-product')

</div>
	
@endsection

{{-- Define script --}}
@section('script')

@endsection

