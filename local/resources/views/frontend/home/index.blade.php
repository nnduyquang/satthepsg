@extends('frontend.master')
@section('title')
    Thép Khánh Nam
@stop
@section('description')
Thép Khánh Nam chuyên nhập khẩu và kinh doanh các loại sắt thép dùng trong xây dựng công nghiệp, xây dựng dân dụng, cơ khí chế tạo máy, đóng tàu.v.v. ngoài những mặt hàng nhập khẩu, chúng tôi còn là đại lý cho một số nhà máy sản xuất thép lớn và có uy tín tại Việt Nam
@stop
@section('keyword')
Sắt thép giá rẻ, công ty sắt thép, đại lý sắt thép, công ty sắt thép miền nam, công ty sắt thép sài gòn, công ty thép tại tphcm
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