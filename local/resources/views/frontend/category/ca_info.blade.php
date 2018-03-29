<div id="ca_info">
    <div class="container p-0">
        <div class="row m-0">
            <div class="col-md-3 p-0">
                @include('frontend.common.sidebar.index')
            </div>
            <div class="ca_info_detail col-md-9">
                <h1 class="title">{{$data['category']->name}}</h1>
                {{ Html::image('images/temps/category/category-ca-info-intro.jpg','',array('class'=>'ca_info_intro_img'))}}
                <div class="description">
                    {!! $data['category']->description !!}
                </div>
                @if($data['type']==1)
                    <div class="list-sub-category col-md-12 p-0">
                        <div class="row">
                            @foreach($data['categorySub'] as $key=>$item)
                            <div class="one-product col-md-4 card">
                                <a href="{{URL::to('danh-muc/'.$data['category']->path.'/'.$item->path)}}">  {{ Html::image($item->image,'',array('class'=>'ca_category_sub_item_img'))}}</a>
                                <div class="card-body">
                                    <h4 class="title-product"><a href="{{URL::to('danh-muc/'.$item->path)}}">{{$item->name}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                <hr>
                <div class="list-product col-md-12 p-0">
                    @if($data['type']==1)
                        <h3 class="title">Tất Cả Sản Phẩm</h3>
                    @endif
                    <div class="row">
                        @foreach($data['products'] as $key=>$item)
                            <div class="one-product col-md-3 card">
                                <div class="img-product">
                                    <a href="{{URL::to('san-pham/'.$item->path)}}">  {{ Html::image($item->image,'',array('class'=>'ca_product_img'))}}</a>
                                </div>
                                @if($item->sale!=0)
                                    <span class="discount">{{$item2->sale}}%</span>
                                @endif
                                <div class="card-body">
                                    <h4 class="title-product"><a
                                                href="{{URL::to('san-pham/'.$item->path)}}">{{$item->name}}</a>
                                    </h4>
                                </div>
                                <div class="card-footer">
                                    @if($item->price!=0)
                                        @if($item->sale!=0)
                                            <span class="price-saving">{{$item->price}}₫</span>
                                        @endif
                                        <span class="price-sale float-right">{{$item->price}}₫</span>
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