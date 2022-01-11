<div class="features_items">
    <h2 class="title text-center">Sản Phẩm Nổi Bật</h2>

    @foreach($products as $product)
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ config('app.base_url') . $product->feature_image_path }}" alt=""/>
                        <h2>{{ number_format($product->price) }} VNĐ</h2>
                        <p>{{ $product->name }}</p>
                        <a href="#" class="btn btn-default add-to-cart"><i
                                class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
                    </div>
                    <div class="product-overlay">
                    <a href="" style="
                        display: block;
                        width: 100%;
                        height: 100%;
                    "></a>
                            <div class="overlay-content">
                               <a href=""> <h2>{{ number_format($product->price) }} VNĐ</h2></a>
                               <a href=""> <p>{{ $product->name }}</p></a>
                                <a href="#" class="btn btn-default add-to-cart"><i
                                        class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
                            </div>
                       
                    </div>
                </div>
                <!-- <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    @endforeach

</div>
