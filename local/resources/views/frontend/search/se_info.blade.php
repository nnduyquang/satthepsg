<div id="se_info">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('frontend.common.sidebar.index')
            </div>
            <div class="se_info_result col-md-9">
                <h1 class="title">KẾT QUẢ TÌM KIẾM CHO: <span class="key-search"> {{$data['key-search']}}</span></h1>
                <div class="list-product col-md-12 p-0">
                    <div class="row">
                        @foreach($data['products'] as $key=>$item)
                        <div class="one-product col-md-4 card">
                            <div class="img-product">
                                <a href="{{URL::to('san-pham/'.$item->path)}}">  {{ Html::image($item->image,'',array('class'=>'se_product_img'))}}</a>
                            </div>
                            @if($item->sale!=0)
                                <span class="discount">{{$item->sale}}%</span>
                            @endif
                            <div class="card-body">
                                <h4 class="title-product"><a href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}</a></h4>
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