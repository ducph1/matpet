	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Trang Chủ</a></li>
				  <li class="active">Giỏ Hàng</li>
				</ol>
			</div>
			<div class="table-responsive cart_info" data-url="{{route('deleteCart')}}">
				<table class="table table-condensed update_cart_url" data-url="{{route('updateCart')}}">
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
						@php 
							$total = 0;
						@endphp
						@foreach($carts as $id =>$cartItem)
							
						<tr>
							<td class="cart_product">
								<a href="{{route('productdetail',['id' => $id])}}"><img class="cart_products" src="{{config('app.base_url') .$cartItem['image']}}" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="{{route('productdetail',['id' => $id])}}">{{$cartItem['name']}}</a></h4>
								<p>ID: {{$id}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($cartItem['price'])}} VND</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<!-- <a class="cart_quantity_down" href=""> - </a> -->
									<input class="cart_quantity_input" type="number" name="quantity" value="{{$cartItem['quantity']}}" autocomplete="off" size="2" min='1' style="width:50px">
									<!-- <a class="cart_quantity_up" href=""> + </a> -->
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{number_format($cartItem['price'] * $cartItem['quantity'])}} VND</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_update" data-id="{{$id}}" href=""><i class="fa fa-redo"></i></a>
								<a class="cart_quantity_delete" data-id="{{$id}}" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@php
						$total += $cartItem['price'] * $cartItem['quantity'];
						@endphp
                        @endforeach
						
						
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
							<li>Tạm Tính <span>{{number_format($total)}} VNĐ</span></li>
							
							<li>Phí Giao Hàng <span>Miễn Phí</span></li>
							<li>Tổng <span>{{number_format($total)}} VNĐ</span></li>
						</ul>
							<!-- <a class="btn btn-default update" href="">Cập Nhật</a> -->
							<a class="btn btn-default check_out" href="">Thanh Toán</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->