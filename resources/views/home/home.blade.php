@extends('layouts.master')

@section('title')
Mật pet family
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('home/home.css') }}"> --}}
@endsection


@section('js')
<link rel="stylesheet" href="{{ asset('home/home.js') }}">
@endsection

@section('content')

@include('home.components.slider')

<div class="main-content">
  <div class="grid wide">
    <div class="main-nav">
      <a href="" class="main-nav-home">Trang Chủ</a>
      <h3 class="main-nav-text">Danh mục sản phẩm</h3>
    </div>
    <!-- Phần sản phẩm -->
    <div class="main-product">
      <h2 class="product-heading">
        <a href="">Shop Bán Chó Mèo Cảnh</a>
      </h2>
      <div class="row product-wrapper">
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
      </div>
      <div class="row product-wrapper">
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
      </div>
      <div class="button button-more">
        <a href="" class="product-more-text">Xem Thêm <i class="fas fa-chevron-right icon-right"></i></a>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- ------------------------------- -->
    <div class="main-product">
      <h2 class="product-heading">
        <a href="">Shop Bán Chó Mèo Cảnh</a>
      </h2>
      <div class="row product-wrapper">
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
      </div>
      <div class="row product-wrapper">
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
      </div>
      <div class="button button-more">
        <a href="" class="product-more-text">Xem Thêm <i class="fas fa-chevron-right icon-right"></i></a>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- ----------------------------------- -->
    <div class="main-product">
      <h2 class="product-heading">
        <a href="">Shop Bán Chó Mèo Cảnh</a>
      </h2>
      <div class="row product-wrapper">
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
        <div class="col l-3">
          <div class="product-item">
            <a class="product-item-img-link" href="">
              <div class="product-item-img" style="background-image: url('/assets/img/product-1.jpg')"></div>
            </a>
            <div class="product-item-id">id:sp00136</div>
            <h4 class="product-item-name">
              <a href="">Alaska Xám cute</a>
            </h4>
            <div class="product-item-cost">50.000.000đ</div>
          </div>
        </div>
      </div>
      <div class="button button-more">
        <a href="" class="product-more-text">Xem Thêm <i class="fas fa-chevron-right icon-right"></i></a>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- Hết Phần sản phẩm -->
  </div>
</div>

@endsection
