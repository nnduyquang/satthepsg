@extends('frontend.master')
@section('title')
{{$data['product']->seo_title}}
@stop
@section('description')
{{$data['product']->seo_description}}
@stop
@section('keyword')
{{$data['product']->seo_keywords}}
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')
    @include('frontend.home.h_introduce')
    @include('frontend.product.p_info')
@stop