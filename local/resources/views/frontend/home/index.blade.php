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
    @include('frontend.home.h_product')
    @include('frontend.home.h_sample')
@stop