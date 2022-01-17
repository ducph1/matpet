@extends('layouts.master')

@section('title')
    <title>Home page</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('home/home.css') }}">
@endsection


@section('js')
    <link rel="stylesheet" href="{{ asset('home/home.js') }}">
@endsection

@section('content')


    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')

                <div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{ config('app.base_url') . $product->feature_image_path }}" alt="" />
								<!-- <h3>ZOOM</h3> -->
							</div>
							<!-- <div id="similar-product" class="carousel slide" data-ride="carousel"> -->
								
								  <!-- Wrapper for slides -->
								    <!-- <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div> -->

								  <!-- Controls -->
								  <!-- <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a> -->
							<!-- </div> -->

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$product->name}}</h2>
								<p>ID: {{$product->id}}</p>
								<!-- <img src="images/product-details/rating.png" alt="" /> -->
								<span>
									<span>{{ number_format($product->price) }} VNĐ</span>
									<label>Số Lượng:</label>
									<input type="text" value="1" />
									
								</span>
								<p><b>Tình Trạng:</b> Còn Hàng</p>
								<p><b>Tags:</b>
								@foreach($tags_id as $tags)
								<span class="tags_product_detail">{{$tags->name }}</span>
								@endforeach
								</p>
								
								<p><b>Danh Mục:</b> {{ $category_details->name }}</p>
								<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm Giỏ Hàng
								</button>
								<!-- <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a> -->
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Mô Tả</a></li>
								<!-- <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li> -->
								<li ><a href="#reviews" data-toggle="tab">Đánh Giá</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-12">
									<p>{{$product->content}}</p>
								</div>
							</div>
					
							
							<div class="tab-pane fade" id="reviews" >
								<div class="col-sm-12">
									<!-- <ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form> -->
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
				
					<!--recommended_items-->
					@include('home.components.recommend_product')
                	<!--/recommended_items-->	
				</div>

                

			</div>   
        
        </div>
    </section>
@endsection

	
