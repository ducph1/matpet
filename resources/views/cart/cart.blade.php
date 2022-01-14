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
   
    <section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang Chủ</a></li>
				  <li class="active">Giỏ Hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Sản Phẩm</td>
							<td class="description"></td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img class="cart_products" src="/assets/img/product/alaska.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Chó Alaska</a></h4>
								<p>ID: 1</p>
							</td>
							<td class="cart_price">
								<p>20.000.000 VND</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down" href=""> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_up" href=""> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">20.000.000 VND</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        <tr>
							<td class="cart_product">
								<a href=""><img class="cart_products" src="/assets/img/product/alaska.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Chó Alaska</a></h4>
								<p>ID: 1</p>
							</td>
							<td class="cart_price">
								<p>20.000.000 VND</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_down" href=""> - </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_up" href=""> + </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">20.000.000 VND</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						
						
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
            <div class="heading">
				<h2>Giỏ Hàng</h2>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tạm Tính <span>40.000.000 VNĐ</span></li>
							
							<li>Phí Giao Hàng <span>Miễn Phí</span></li>
							<li>Tổng <span>40.000.000 VNĐ</span></li>
						</ul>
							<a class="btn btn-default update" href="">Cập Nhật</a>
							<a class="btn btn-default check_out" href="">Thanh Toán</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection
