<div id="po_info">
    <div class="container p-0">
        <div class="row m-0">
            <div class="col-md-3 p-0">
                @include('frontend.common.sidebar.index')
            </div>
            <div class="po_info_content col-md-9">
                @if($data['type']==1)
                    <h1 class="title">{{$data['categoryPost']->name}}</h1>

                    <div class="description">
                        {!!$data['categoryPost']->	description !!}
                    </div>

                @else
                    <h1 class="title">{{$data['post']->title}}</h1>
                    <div class="description">
                        {!!$data['post']->	content !!}
                    </div>
                @endif
                @if($data['type']==1)
                    <div class="po_info_detail col-md-12 p-0">
                        <div class="row m-0">
                            @foreach($data['categoryPost']->posts as $key=>$item)
                                <div class="one-po-item col-md-4 card">
                                    <a href="{{URL::to('bai-viet/'.$data['categoryPost']->path.'/'.$item->path)}}">  {{ Html::image($item->image,'',array('class'=>'po_item_img'))}}</a>
                                    <div class="card-body">
                                        <h4 class="title-product"><a
                                                    href="{{URL::to('bai-viet/'.$data['categoryPost']->path.'/'.$item->path)}}">{{$item->title}}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>