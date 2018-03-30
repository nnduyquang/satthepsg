@extends('frontend.master')
@section('title')
    Thép Khánh Nam
@stop
@section('description')
    Tìm kiếm sắt thép
@stop
@section('styles')
    {{ Html::style('css/themes/default/default.css') }}
@stop
@section('slider')
    @include('frontend.common.slider')
@stop
@section('container')
    @include('frontend.home.h_introduce')
    @include('frontend.search.se_info')
@stop