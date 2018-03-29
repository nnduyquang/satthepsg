@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Chuyên Mục Sản Phẩm</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('categorypost.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($categorypost,array('route' => ['categorypost.update',$categorypost->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Tên Chuyên Mục:</strong>
                            {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Menu Cấp</strong>
                            <select class="form-control" name="parent">'
                                @foreach($dd_category_post as $key=>$data) {
                                @if($data['index']===$categorypost->parent_id)
                                    <option value="{{$data['index']}}" selected>{{$data['value']}}</option>
                                @else
                                    <option value="{{$data['index']}}">{{$data['value']}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Mô Tả Ngắn:</strong>
                            {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                        </div>
                        <div class="form-group">
                            <strong>Thứ Tự:</strong>
                            {!! Form::text('order',null, array('placeholder' => 'Thứ Tự','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Hình Đại Diện: </strong>
                            {!! Form::text('image', url('/').'/'.$categorypost->image, array('class' => 'form-control','id'=>'pathImage')) !!}
                            <br>
                            {!! Form::button('Tìm', array('id' => 'btnBrowseImage','class'=>'btn btn-primary')) !!}
                        </div>
                        <div class="form-group">
                            {{ Html::image($categorypost->image,'',array('id'=>'showHinh','class'=>'show-image'))}}
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-12">
                <div class="row no-gutters">
                    <h3>SEO</h3>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Tiêu Đề (title):</strong>
                            {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Mô Tả (description):</strong>
                            {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <strong>Keywords (cách nhau dấu phẩy ','):</strong>
                            {!! Form::text('seo_keywords',null, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <strong>Kích Hoạt:</strong>
                        <input {{$categorypost->isActive==1?'checked':''}} name="page_is_active" data-on="Có" data-off="Không" type="checkbox" data-toggle="toggle">
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="text-align:  center;">
                <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Chuyên Mục Bài Viết</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop
