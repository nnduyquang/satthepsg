<div id="h_introduce" content="container-fluid p-0">
    <div class="container p-0">
        <div class="row m-0">
            <div id="h_introduce_left text-center" class="col-md-4">
                {{ Html::image('images/logo/logo_main.png','',array('class'=>'h_introduce_logo_img'))}}
            </div>
            <div id="h_introduce_right" class="col-md-8 justify-content-left align-self-center">
                <h1 class="title">Chào Mừng Quý Khách Đến Với Thép Khánh Nam</h1>
                <p class="description">
                    Thép Khánh Nam luôn là nhà phân phối vật liệu xây dựng hàng đầu ở khu vực thành

                    phố Hồ CHí Minh và khu vực lân cận. Với phương châm lấy khách hàng làm

                    trọng tâm, sản phẩm và dịch vụ của Thép Khánh Nam được đông đảo khách hàng

                    gần xa biết tới và tin dùng. Chính trong những thời kỳ khó khăn nhất tập thể công

                    nhân viên Thép Khánh Nam cùng khách hàng vượt qua và phát triển như hiện nay.
                </p>
            </div>
            {{--<div id="h_introduce_bottom" class="col-md-12">--}}
            {{--{{ Html::image('images/beauty/h_introduce_bar.png','',array('class'=>'h_introduce_bar_img'))}}--}}
            {{--</div>--}}
            <div id="h_introduce_bottom" class="col-md-12">
                <div class="row">
                    <div class="col-6">
                        <a href="{{URL::to('danh-muc/cat-xay-dung')}}">
                            {{ Html::image('images/beauty/h_introduce_3.jpg','',array('class'=>'h_introduce_bar_img'))}}
                            <div class="h_home_info">
                                <h4>Cát Xây Dựng</h4>
                                <span>Xem Chi Tiết</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="{{URL::to('bai-viet/gia-vat-lieu-xay-dung')}}">
                            {{ Html::image('images/beauty/h_introduce_2.jpg','',array('class'=>'h_introduce_bar_img'))}}
                            <div class="h_home_info">
                                <h4>Giá VLXD Hôm Nay</h4>
                                <span>Xem Chi Tiết</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<hr>