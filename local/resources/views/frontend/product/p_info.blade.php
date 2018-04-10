<div id="p_info">
    <div class="container">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('frontend.common.sidebar.index')
            </div>
            <div class="p_info_detail col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        {{ Html::image($data['product']->image,'',array('class'=>'p_product_img'))}}
                    </div>
                    <div id="p-short-info" class="col-md-6">
                        <h1 class="title">{{$data['product']->name}}</h1>
                        {{--<span class="product-code">Mã Sản phẩm: WS 821-12</span>--}}
                        @if($data['product']->price!=0)
                            @if($data['product']->sale!=0)
                                <span class="price-sale">{{$data['product']->final_price}} VND</span>
                                <span class="price-nosale">Giá Trước Đây: <span> {{$data['product']->price}}
                                        VND</span></span>
                                <span class="price-saving">Tiết Kiệm:{{$data['product']->sale}}%</span>
                            @else
                                <span class="price-sale">{{$data['product']->price}} VND</span>
                            @endif
                        @else
                            <span class="price-contact">Liên Hệ</span>
                        @endif

                        {{--<span class="price-contact">Liên Hệ</span>--}}
                        <input class="btn-confirm btn" type="button" value="0973.889.336">
                    </div>
                    <div class="col-md-12 p-description">
                        {!!  $data['product']->description!!}

                    </div>
                </div>

                <div id="p-content" class="col-md-12">
                    {!!  $data['product']->content!!}
                    <div class="contact-info">
                        {!!  $listFrontEndInfo['configContact']->content !!}
                    </div>

                </div>
                <div id="p-other" class="col-md-12">
                    <h3 class="title">Có Thể Bạn Quan Tâm</h3>
                    <div class="list-product">
                        <div class="row">
                            @foreach($data['orther'] as $key=>$item)
                                <div class="one-product col-md-3 card">
                                    <div class="img-product">
                                        <a href="{{URL::to('san-pham/'.$item->path)}}">  {{ Html::image($item->image,'',array('class'=>'p_product_other_img'))}}</a>
                                    </div>

                                    @if($item->sale!=0)
                                        <span class="discount">{{$item->sale}}%</span>
                                    @endif
                                    <div class="card-body">
                                        <h4 class="title-product"><a
                                                    href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}</a></h4>
                                    </div>
                                    <div class="card-footer">
                                        @if($item->price!=0)
                                            @if($item->sale!=0)
                                                <span class="price-saving">{{$item->price}}₫</span>
                                            @endif
                                            <span class="price-sale">{{$item->price}}₫</span>
                                        @else
                                            <span class="price-contact">Liên Hệ</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>