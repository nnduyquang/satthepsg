@extends('frontend.master')
@section('title')
    @if($data['type']==1)
{{$data['categoryPost']->seo_title}}
    @endif
    @if($data['type']==2)
{{$data['post']->seo_title}}
    @endif
@stop
@section('description')
    @if($data['type']==1)
{{$data['categoryPost']->seo_description}}
    @endif
    @if($data['type']==2)
{{$data['post']->seo_description}}
    @endif
@stop
@section('keyword')
    @if($data['type']==1)
{{$data['categoryPost']->seo_keywords}}
    @endif
    @if($data['type']==2)
{{$data['post']->seo_keywords}}
    @endif
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')
    @include('frontend.home.h_introduce')
    @include('frontend.post.po_info')
@stop