<div id="news_info">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('frontend.common.sidebar.index')
            </div>
            <div class="news_info_detail col-md-9">
                @if($data['type']==1)
                    <h1 class="title">Tin Tức</h1>
                    @foreach($data['news'] as $key=>$item)
                        <div class="col-md-12 p-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{URL::to('/tin-tuc/'.$item->path)}}">{{ Html::image($item->image,'',array('class'=>'news_page_img'))}}</a>
                                </div>
                                <div class="col-md-8">
                                    <a href="{{URL::to('/tin-tuc/'.$item->path)}}">
                                        <div class="news-title">{{$item->title}}</div>
                                    </a>
                                    <div class="news-description">{!! $item->description !!}</div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                @endif
                @if($data['type']==2)
                    <h1 class="title">{{$data['news']->title}}</h1>
                    <div class="description">{!! $data['news']->description !!}</div>
                    <div class="content">{!! $data['news']->content !!}</div>
                    <div id="news-other" class="col-md-12">
                        <h3 class="title">Có Thể Bạn Quan Tâm</h3>
                        <div class="list-news">
                            <div class="row">
                                @foreach($data['others'] as $key=>$item)
                                    <div class="one-news col-md-3 card">
                                        <div class="img-news">
                                            <a href="{{URL::to('tin-tuc/'.$item->path)}}">  {{ Html::image($item->image,'',array('class'=>'news_other_img'))}}</a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="title-news"><a
                                                        href="{{URL::to('tin-tuc/'.$item->path)}}">{{$item->title}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>