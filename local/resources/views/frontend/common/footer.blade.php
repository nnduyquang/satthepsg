<div id="footer" class="col-md-12 p-0">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    {{--{{ Html::image('images/logo/logo duyhoai_new.png','',array('class'=>'menu_logo'))}}--}}
                    <ul>

                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>201 Bình Thành, Khu phố 4, phường Bình Hưng Hòa B, Quận Bình Tân, Tp.Hcm</span></a>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Số 11 Đường 5A, Khu phố 4, phường Bình Hưng Hòa B, Quận Bình Tân, Tp.Hcm</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>Chăm sóc khách hàng: </br>
                                    0938.318.678 - 0914.675.777</br>
                                    Từ 8h00-17h00 các ngày thứ 2 đến thứ 7</span></a></li>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span>vlxdtaysaigon@gmail.com</span></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Báo Giá Sắt Thép Mới Nhất</h3>
                    <ul>
                        @foreach($listMenu['postMain']->postSub as $key=>$item)
                            <li><a href="{{URL::to('bai-viet/'.$listMenu['postMain']->path.'/'.$item->path)}}">{{$item->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    {{ Html::image('images/logo/logo_footer.png','',array('class'=>'menu_logo'))}}
                </div>
                {{--<div class="col-md-3">--}}
                {{--<h3>Giới Thiệu</h3>--}}
                {{--<ul>--}}
                {{--<li><a href="#">Về Chúng Tôi</a></li>--}}
                {{--<li><a href="#">Liên Hệ</a></li>--}}
                {{--</ul>--}}
                {{--</div>--}}

                {{--<div class="col-md-4">--}}
                    {{--{{ Html::image('images/logo/logo_main.png','',array('class'=>'h_introduce_logo_img'))}}--}}
                {{--</div>--}}
                .
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <span>Designed by Smartlinks.vn</span>
        </div>
    </div>

</div>