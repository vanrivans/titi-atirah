{{-- Get layout --}}
@extends('Layouts.layout')

{{-- Define header --}}
@section('header')
	
@endsection

{{-- Define main --}}
@section('main')
<div class="layout">
    
    <section class="products detail">
        <div class="product-category">
            <strong>Product Category</strong>
            <ul class="nav nav-pills mb-auto" id="productCategory">
            </ul>
        </div>
        <div class="products__box">
            <div class="product__detail">
                <h1 class="title__menu">Product Details</h1>
                <div class="product__detail-box">
                    <img src="<?=base_url();?>assets/images/gallery-1.webp" class="product__detail-img" alt="celebes maritim product" title="celebes maritim product" width="320" height="320">
                    <div class="product__detail-content">
                        <div class="product__detail-header">
                            <div>
                                <h3><strong>Grapes Frozen</strong></h3>
                                <span>50.000 IDR</span>
                            </div>
                            <div>
                                <a href="#" class="btn share-link"><span>Share Link</span></a>
                            </div>
                        </div>
                        <div class="product__detail-desc">
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem</p>
                        </div>
                        <div class="product__detail-footer">
                            <div>
                                <span>Weight</span>
                                <span>1 Kg</span>
                            </div>
                            <div>
                                <span>Unit</span>
                                <span>Pack</span>
                            </div>
                            <div>
                                <span>Category</span>
                                <span class="detail-category">Frozen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products__content">
                <h2 class="title__menu">You May Also Like</h2>
                <div class="products__content-box">
                    <?php
                    for ($i = 0; $i < 3; $i++) {?>
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
    </script>
@endsection