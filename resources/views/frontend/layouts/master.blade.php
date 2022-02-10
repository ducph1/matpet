<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('assets/font-icon/fontawesome-free-5.15.4-web/css/all.min.css')}}">
    <link href="{{ asset('eshopper/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/main.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    @yield('css')
</head>

<body>

    @include('frontend.components.header')
    @yield('content')
    @include('frontend.components.footer')

    <script src="{{ asset('eshopper/js/jquery.js') }}"></script>
    <script src="{{ asset('eshopper/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('eshopper/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('eshopper/js/price-range.js') }}"></script>
    <script src="{{ asset('eshopper/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('eshopper/js/main.js') }}"></script>
    <script src="{{ asset('eshopper/js/simple.money.format.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
        $( "#slider-range" ).slider({
        orientation: "horizontal",
        range: true,
        min:{{$min_price}},
        max:{{$max_price}},
        values: [0, {{$max_price}} ],
        step: 1000000,
        slide: function( event, ui ) {
            $( "#amount_start" ).val( ui.values[ 0 ]).simpleMoneyFormat();
            $( "#amount_end" ).val(ui.values[ 1 ]).simpleMoneyFormat();

            $( "#start_price" ).val( ui.values[ 0 ]);
            $( "#end_price" ).val( ui.values[ 1 ]);
        }
        });
        $( "#amount_start" ).val($( "#slider-range" ).slider( "values", 0 )).simpleMoneyFormat();
        $( "#amount_end" ).val($( "#slider-range" ).slider( "values", 1 )).simpleMoneyFormat();
    });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
        $('#sort').on('change', function() {
            var url = $(this).val();
                if(url) {
                    window.location = url;
                }
                return false;
        })
    });
    </script>
    <script>
        function addToCart(event){
        event.preventDefault();
        let urlCart = $(this).data('url');
        $.ajax({
            type: "GET",
            url: urlCart,
            dataType: "json",
            success: function(data){
                if(data.code === 200){
                    alert('Thêm Sản Phẩm Thành Công');
                }
            },
            error: function(){

            }
        });
    }
    $(function(){
        $('.add-to-cart').on('click',addToCart);
        $('.addToCart').on('click',addToCart);

    });
    </script>
    <script>
        function cartUpdate(event) {
        event.preventDefault();
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).parents('tr').find('input.cart_quantity_input').val();
        $.ajax({
            type: 'GET',
            url: urlUpdateCart,
            data: {id: id, quantity: quantity},
            success: function(data) {
                if(data.code === 200){
                    $('.cart_wrapper').html(data.cart_component);
                    alert('Cập Nhật Thành Công!')
                }
            },
            error: function(){

            }
        });
    }
    function cartDelete(event) {
        event.preventDefault();
        let urlDeleteCart = $('.cart_info').data('url');
        let id = $(this).data('id');
        $.ajax({
            type: 'GET',
            url: urlDeleteCart,
            data: {id: id},
            success: function(data) {
                if(data.code === 200){
                    $('.cart_wrapper').html(data.cart_component);
                    alert('Xóa Thành Công!')
                }
            },
            error: function(){

            }
        });
    }
    $(function(){
        $(document).on('click','.cart_quantity_update',cartUpdate);
        $(document).on('click','.cart_quantity_delete',cartDelete);
    })
    </script>
    @yield('js')
</body>

</html>
