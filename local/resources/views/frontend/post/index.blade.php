@extends('frontend.master')
@section('title')
    Nội Thất
@stop
@section('description')
    Nội Thất
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