<div id="pa_info">
    <div class="container p-0">
        <div class="row">
            <div class="col-md-3 p-0">
                @include('frontend.common.sidebar.index')
            </div>
            <div class="pa_info_detail col-md-9">
                <h1 class="title">{{$data['page']->title}}</h1>
                <div class="description">
                    {!!$data['page']->content !!}
                </div>
            </div>
        </div>
    </div>
</div>