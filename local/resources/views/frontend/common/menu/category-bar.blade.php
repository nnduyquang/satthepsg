<div id="menu-category" class="col-md-12 hidden-sm hidden-xs">
    <div class="row">
        <h3><span>Danh Mục Sản Phẩm</span></h3>
        <ul class="main-list-item">
            @for($i=0;$i<count($menu_sidebar);$i++)
                @if($menu_sidebar[$i]->level==0)
                    <li class="sub-menu">
                        <a class="main-link" href="{{URL::to('danh-muc/'.$menu_sidebar[$i]->path)}}">{{$menu_sidebar[$i]->name}}</a>
                            @if($i==count($menu_sidebar)-1)
                                @break
                            @else
                                @if($menu_sidebar[$i+1]->parent_id==$menu_sidebar[$i]->id)
                                    <i class="fa fa-caret-right" aria-hidden="true"></i>
                                @endif
                            @endif

                        @if($i==count($menu_sidebar)-1)
                            @break
                        @else
                            @if($menu_sidebar[$i+1]->parent_id==$menu_sidebar[$i]->id)
                                <div class="nav-sub col-md-4">
                                    <div class="row">
                                        <h3>{{$menu_sidebar[$i]->name}}</h3>
                                        <ul class="sub-menu-item">
                                            @foreach($menu_sidebar as $key=>$dataSubmenu)
                                                @if($dataSubmenu->level==1 && $menu_sidebar[$i]->id==$dataSubmenu->parent_id)
                                                    <li><a href="{{URL::to('danh-muc/'.$dataSubmenu->path)}}">{{$dataSubmenu->name}}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        @endif
                    </li>
                @endif
            @endfor
        </ul>
    </div>
</div>