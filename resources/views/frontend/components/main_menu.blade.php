<div class="mainmenu pull-left">
    <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="{{ route('home') }}" class="active">Trang Chủ</a></li>
        @foreach($categoriesLimit as $categoryParent)
            <li class="dropdown"><a href="{{ route('category.product',
                                        ['slug' => $categoryParent->slug, 'id' => $categoryParent->id]) }}">
                    {{ $categoryParent->name }}
                    <i class="fa fa-angle-down"></i></a>
                @include('frontend.components.child_menu', ['categoryParent' => $categoryParent])
            </li>
        @endforeach


        <li><a href="">Dịch Vụ</a></li>
        <li><a href="">Hỗ Trợ</a></li>

    </ul>
</div>
