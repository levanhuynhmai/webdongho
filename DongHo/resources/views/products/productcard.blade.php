
@foreach($product as $sp)
<div class="owl-item col-xs-6 col-sm-4 col-md-4 col-lg-4" style="width: 280px; margin-right: 10px;">

    <div class="product-card">
        <a class="product-url" href="/products/black-link" title="Black Link"></a>

        

        <div class="product-card__inner">
            <div class="product-card__image">
                <picture>
                    <img src="{{ asset('img/product/upload_a89e9dd9b502466b97efbbf6bd5c41a3_large.jpg') }}"
                        class="product-card-image-front img-responsive center-block" alt="Black Link">
                </picture>

                <picture>
                    <img src="{{ asset('img/product/upload_56430257bb264300b9a9d0581ed22a21_large.jpg') }}"
                        class="product-card-image-back img-responsive center-block" alt="Black Link">
                </picture>

            </div>
            <h4 class="product-single__series">Khác</h4>
            <h3 class="product-card__title">{{$sp->Ten}}</h3>
            <div class="product-price">


                <strong>{{$sp->Gia}}</strong>


            </div>
        </div>
        

        <form action="/cart/add" method="post" enctype="multipart/form-data"
            class="hidden-md variants form-nut-grid form-ajaxtocart has-validation-callback"
            data-id="product-actions-1029334227">
            <div class="product-card__actions">


                <input type="hidden" name="id" value="1065133589">
                <a class="button ajax_addtocart add_to_cart" href="/products/black-link" title="Thêm vào giỏ hàng">Xem sản phẩm</a>


            </div>
        </form>
        
    </div>
</div>
@endforeach