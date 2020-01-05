<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="{{url('/')}}">
                    MiniForum
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">


                    <li class="has-sub">
                        <a href="#">

                            <span class="bot-line"></span>Categories <i class="fa fa-arrow-down"></i></a>
                        <ul class="header3-sub-list list-unstyled">
                            <?php $categories = \App\Model\Category::all(); ?>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{url('/topics/'.$category->id)}}">{{$category->category_name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/my_topics')}}">
                            My Topics
                            <span class="bot-line"></span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/my_topics/create')}}">
                            Make New Topics
                            <span class="bot-line"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{ Auth::user()->username }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="account-dropdown__footer">
                                <a href="{{url('/signout')}}">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END HEADER DESKTOP-->