@extends('frontend.layouts.master')

@section('title')
    <title>Mật pet family</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/home/home.css') }}">
@endsection


@section('js')
    <link rel="stylesheet" href="{{ asset('home/home.js') }}">
@endsection

@section('content')
    <!--/slider-->
    @include('frontend.home.components.slider')
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                @include('frontend.components.sidebar')

                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                @include('frontend.home.components.feature_product')
                <!--features_items-->

                    <!--category-tab-->
                @include('frontend.home.components.category_tab')
                <!--/category-tab-->

                    <!--recommended_items-->
                @include('frontend.home.components.recommend_product')
                <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>
@endsection
