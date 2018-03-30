@extends('layouts.nav')
@section('title',$title)
@section('description',$description)

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="top" class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <a class="navbar-brand" href="#"><strong>浙江天炯</strong>电子商务有限公司</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#carousel-header">主页</a></li>
                        <li><a href="#about">关于公司</a></li>
                        <li><a href="#projects">项目介绍</a></li>
                        <!-- <li><a href="#blog"></a></li> -->
                        <li><a href="#social">招商加盟</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
            </div>
        </div>



        <div id="carousel-header" class="carousel slide" data-ride="carousel" data-interval="8000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- <div class="camera-icon hidden-sm hidden-xs">
                    <div class="circle">
                        <div class="hexagon">
                            <i class="fa  fa-camera"></i>
                        </div>
                    </div>
                </div> -->

                <div class="item active">
                    <img src="{{asset('tj/img/banner1.jpg')}}" alt="">
                </div>

                <div class="item">
                    <img src="{{asset('tj/img/banner2.jpg')}}" alt="">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-header" role="button" data-slide="next">
                <img src="{{asset('tj/img/left.png')}}" alt="上一张">
            </a>
            <a class="right carousel-control" href="#carousel-header" role="button" data-slide="next">
                <img src="{{asset('tj/img/right.png')}}" alt="下一张">
            </a>
        </div>




        <div id="about" class="content-block content-block-cyan">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1>浙江天炯电子商务有限公司</h1>
                        <p>
                            浙江天炯电子商务有限公司成立于2017年.公司自创立历来，一直致力于将眼镜产品互联网化，始终坚持"诚信、创新、沟通"的创业宗旨，以“技术，服务”为立业之本，在全国各地开设O2O验光配镜体验店，打造线上购买线下服务的验光配镜新体验，给消费者性价比至高的配镜服务。
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div id="projects" class="recent-projects">
            <div class="recent-projects-title">
                公司实景
            </div>

            <div class="recent-projects-content content-block-gray">
                <div id="owl-example" class="owl-carousel">
                    <div>
                        <img src="{{asset('tj/img/recent1.jpg')}}" alt="">
                        <a href="#">门店</a>
                    </div>
                    <div>
                        <img src="{{asset('tj/img/recent2.jpg')}}" alt="">
                        <a href="#">办公区</a>
                    </div>
                    <div>
                        <img src="{{asset('tj/img/recent3.jpg')}}" alt="">
                        <a href="#">运营部</a>
                    </div>
                    <div>
                        <img src="{{asset('tj/img/recent4.jpg')}}" alt="">
                        <a href="#">实体店</a>
                    </div>
                    <div>
                        <img src="{{asset('tj/img/recent5.jpg')}}" alt="">
                        <a href="#">连锁分店</a>
                    </div>
                    <!-- <div>
                        <img src="{{asset('tj/img/recent6.jpg')}}" alt="">
                        <a href="#">girl in sunset</a>
                    </div>
                    <div>
                        <img src="{{asset('tj/img/recent4.jpg')}}" alt="">
                        <a href="#">Lorem Ipsum</a>
                    </div> -->
                </div>
            </div>
        </div><!-- /.recent-projects -->



        <div id="blog" class="content-block content-block-gray">
            <div class="container">
                <header class="block-heading cleafix">
                    <a href="#" class="btn btn-o btn-lg pull-right">查看所有</a>
                    <h1>项目介绍</h1>
                    <p>YJDLM O2O配镜新模式，开始面向全国寻找合作伙伴</p>
                </header>
                <section class="block-body">
                    <div class="row">
                        <div class="col-sm-4 blog-post">
                            <img src="{{asset('tj/img/jiamen1.jpg')}}" alt="Design Your Mind">
                            <a href="#" data-toggle="modal" data-target="#myModal"><h2>加盟介绍</h2></a>
                           <!--  <div class="date">3 Nov, 2014</div> -->
                        </div>
                        <div class="col-sm-4 blog-post">
                            <img src="{{asset('tj/img/mac_glasses1-1000x600.jpg')}}" alt="Winter Is Comming">
                            <a href="#"><h2>我们的优势</h2></a>
                            <!-- <div class="date">3 Nov, 2014</div> -->
                        </div>
                        <div class="col-sm-4 blog-post">
                            <img src="{{asset('tj/img/brandh.jpg')}}" alt="The Illustration">
                            <a href="#"><h2>品牌故事</h2></a>
                           <!--  <div class="date">3 Nov, 2014</div> -->
                        </div>
                    </div>
                </section>
            </div><!--/container-->
        </div><!-- /.content-block content-blog-gray -->


        <div id="social" class="content-block">
            <div class="container text-center">
                <div class="hexagon"><a href="#"><i class="fa fa-facebook"></i></a></div>
                <div class="hexagon"><a href="#"><i class="fa fa-twitter"></i></a></div>
                <div class="hexagon"><a href="#"><i class="fa fa-google-plus"></i></a></div>
                <div class="hexagon"><a href="#"><i class="fa fa-instagram"></i></a></div>
                <div class="hexagon"><a href="#"><i class="fa fa-pinterest"></i></a></div>
                <div class="hexagon"><a href="#"><i class="fa fa-envelope"></i></a></div>
            </div>
        </div>


        <div id="join_submit" class="join_submit">
            <p style="text-align: center;font-size: 30px;font-weight: bold;">加盟热线:0571-85888930</p>
            <form action="{{url('Zjtj/join')}}" method="POST" style="width: 80%;margin: 0 auto;">
                {{ csrf_field() }}

                <ul style="width: 70%;margin: 0 auto;">
                    <li>姓名：</li>
                    <li><input type="text" name="username" id="username"></li>
                    <li>Email：</li>
                    <li><input type="text" name="email" id="email"></li>
                    <li>电话：</li>
                    <li><input type="text" name="phone" id="phone"></li>
                    <li>
                        <textarea name="more" style="width: 100%;height: 100px;border: 1px solid #000;">备注：</textarea>
                    </li>
                    <li>
                       <p style="width: 100%">{!! Geetest::render() !!}</p>
                    </li>
                    
                    <li><button style="width: 100%;height: 50px;border: 2px solid #000;background: #fff;" id="submit">提交</button></li>
                </ul>

            </form>



        </div>

@extends('layouts.foot')
@section('cpt_name',$title)