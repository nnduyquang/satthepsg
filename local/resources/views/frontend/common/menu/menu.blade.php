<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div id="menu_top">
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-7 justify-content-left align-self-center text-left">
                        <span><i class="fa fa-phone" aria-hidden="true"></i> 0938.318.678 - 0982.515.777</span>
                        {{--<span><i class="fa fa-home" aria-hidden="true"></i> 55/4 KP3 Hà Huy Giáp, Q.12, TPHCM</span>--}}
                    </div>
                    {{--<div class="col-md-2 p-0">--}}
                    {{--{{ Html::image('images/temps/logo/logo_demo.png','',array('class'=>'menu_logo'))}}--}}
                    {{--</div>--}}
                    <div class="col-md-5 pl-0">
                        <div class="col-md-8 float-right">
                            <ul class="menu-search">
                                <li><a href="#" id="clickSearch"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </li>
                                <li style="width: 100%">
                                    {!! Form::open(array('route' => 'search','method'=>'POST','id'=>'formSearch')) !!}
                                    {!! Form::text('key-search', '', array('placeholder' => 'Tìm Kiếm','class' => 'form-control','id'=>'searchInput')) !!}
                                    {!! Form::close() !!}
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{--<div class="col-md-6 justify-content-center align-self-center text-right">--}}
                    {{--<span><i class="fa fa-phone" aria-hidden="true"></i> 0965.322.239 - 0901.196.676</span>--}}
                    {{--<span><i class="fa fa-home" aria-hidden="true"></i> 55/4 KP3 Hà Huy Giáp, Q.12, TPHCM</span>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
    <div id="menu_logo_center col-md-12">
        <div class="container">
            {{ Html::image('images/logo/logo_center.png','',array('class'=>'menu_logo'))}}
        </div>
    </div>
    <div id="menu_bottom">
        <div class="container">
            <div class="col-md-12 p-0">
                <ul class="main_menu">
                    <li class="li-normal"><a href="{{URL::to('/')}}">Trang Chủ</a></li>
                    <li class="li-normal"><a href="{{URL::to('/trang/gioi-thieu')}}">Giới Thiệu</a></li>
                    <li class="has-item-down"><a href="#">Sản Phẩm</a>
                        <div class="drop-down col-md-12">
                            <div class="row">
                                @foreach($listMenu['categoryMain'] as $key=>$item)
                                <div class="col-md-3">
                                    <ul>
                                        <li class="title"><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></li>
                                        @foreach($item->categorySub as $key2=>$item2)
                                        <li class="sub-item"><a href="{{URL::to('danh-muc/'.$item->path.'/'.$item2->path)}}">{{$item2->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </li>
                    <li class="has-item-down-price"><a href="{{URL::to('bai-viet/'.$listMenu['postMain']->path)}}">{{$listMenu['postMain']->name}}</a>
                        <ul class="sub_menu">
                            @foreach($listMenu['postMain']->postSub as $key=>$item)
                            <li><a href="{{URL::to('bai-viet/'.$listMenu['postMain']->path.'/'.$item->path)}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="has-item-down-price"><a href="{{URL::to('bai-viet/'.$listMenu['priceMain']->path)}}">{{$listMenu['priceMain']->name}}</a>
                        <ul class="sub_menu">
                            @foreach($listMenu['priceMain']->priceSub as $key=>$item)
                                <li><a href="{{URL::to('bai-viet/'.$listMenu['priceMain']->path.'/'.$item->path)}}">{{$item->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="li-normal"><a href="{{URL::to('/tin-tuc')}}">Tin Tức</a></li>
                    <li class="li-normal"><a href="{{URL::to('/trang/lien-he')}}">Liên Hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
