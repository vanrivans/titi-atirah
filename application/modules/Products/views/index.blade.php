{{-- Get layout --}}
@extends('Layouts.layout')

{{-- Define header --}}
@section('header')
	
@endsection

{{-- Define main --}}
@section('main')
<div class="layout">
    
    <section class="products">
        <div class="product-category">
            <strong>Product Category</strong>
            <ul class="nav nav-pills mb-auto" id="productCategory">
            </ul>
        </div>
        <div class="products__box">
            <div class="products__header">
                <div class="products__filter" id="productSubCategory"></div>   
                <div class="input-group">
                    <span class="input-group-text"><i class="bi-search"></i></span>
                    <input type="text" aria-label="Search Product" class="form-control" placeholder="Search product here">
                    <button type="button" class="btn">Search</button>
                </div>
            </div>
            <div class="products__content">
                <h1 class="title__menu">Frozen Fruits</h1>
                <div class="products__content-box">
                    <?php
                    for ($i = 0; $i < 12; $i++) {?>
                    <div class="card products__item">
                        <img src="<?=base_url();?>assets/images/gallery-1.webp" class="card-img-top" alt="celebes maritim products" title="celebes maritim products">
                        <div class="card-body">
                            <h5 class="card-title">Grapes Frozen</h5>
                            <div class="card-text">
                                <span>50.000 IDR</span>
                                <a href="" class="">Details</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
            productCategory();
            productSubCategory();
        });

        function productCategory() {

            const data = ['Fruits', 'Vegetables', 'Beef', 'Fish & other seafood', 
            'Nuts-beans and lentil', 'Grain & oil seeds products', 'Mineral water products', 
            'Plastic & other packaging', 'Coffe and tea', 'Chicken'];
            
            var html = '';

            for (i = 0; i < data.length; i++) {
                
                var active = '';

                if (i == 0) { active = 'active' }

                html += '<li class="nav-item">';
                    html += '<a href="#" class="nav-link ' + active + '" aria-current="page">';
                        html += data[i];
                    html += '</a>';
                html += '</li>';
            }

            $('#productCategory').html(html);
        }

        function productSubCategory() {

            const data = ['Fresh', 'Canned', 'Frozen', 'Dried'];

            var html = '<div class="btn-group" role="group" aria-label="Sub Category">';

            for (i = 0; i < data.length; i++) {

                var active = '';

                if (i == 0) { active = 'active' }

                html += '<button type="button" class="btn ' + active + '">' + data[i] + '</button>';
            }
            
            html += '</div>';

            $('#productSubCategory').html(html);
        }
    </script>
@endsection