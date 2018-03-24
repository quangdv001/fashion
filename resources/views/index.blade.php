<!DOCTYPE html>
<!-- saved from url=(0035)http://www.ajidou.com/indexweb.html -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Em18shop</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
</head>

<body>

<div class="container">

    <div class="inner clearfix" style="">
        @foreach($banner as $v)
            <div class="innerwraper" style="width: 1600px;">
                <img class="img" id="pic" src="{{ asset('upload/banners/'.$v->img)}}" alt="" style="width: 1600px;">
            </div>
        @endforeach
    </div>

    <div class="" style="clear:both;overflow:hidden;display:block;overflow:hidden;"></div>

    <div class="foot" style="position:fixed;bottom:0;z-index:2;">

        <div class="menu">

            <div class="menu-left">

                <img id="logo" style="height:15px;width:125px;" src="{{ asset('upload/contents/'.$content->logo)}}" alt="">

            </div>

            <div class="menu-right">

                <a class="left-arrow" href="javascript:void(0);">

                    <img src="{{ asset('images/left.jpg')}}" alt="上一张">

                </a>

                <a class="right-arrow" href="javascript:void(0);">

                    <img src="{{ asset('images/right.jpg')}}" alt="下一张">

                </a>

            </div>

        </div>

        <div class="about">

            <a href="javascript:void(0);" target="_blank"><img class="blog"
                                                                                          src="{{ asset('upload/contents/'.$content->img_center)}}"
                                                                                          alt=""></a>

            <span class="text-hotline">HOTLINE: {{ $content->hot_line }}</span>
            {{--<img class="hotline" src="{{ asset('images/Hotline.png')}}" alt="">--}}

            <a class="us" href="javascript:void(0);" onclick="showabout();">
                <span class="text-aboutus">ABOUT US</span>
                {{--<img src="{{ asset('images/ABOUT--us.png')}}" alt="">--}}

            </a>

        </div>

        <div class="cp">

            {{--<img id="beian" src="{{ asset('images/beian.png')}}" alt="">--}}
            <img id="beian" src="{{ asset('upload/contents/'.$content->img_right)}}" width="200px" height="80px" alt="">

        </div>

    </div>

    <div class="left"
         style="position: fixed; left: 0px; background-color: rgb(255, 255, 255); z-index: 2; width: 64px; height: 900px;"></div>

    <div id="right" class="right"
         style="position: absolute; right: 0px; background-color: rgb(255, 255, 255); z-index: 2; top: -130px; width: 64px; height: 900px;"></div>

    <div class="top"
         style="position: fixed; top: 0px; background-color: rgb(255, 255, 255); z-index: 2; width: 1600px;"></div>

</div>


<div class="aboutus" id="aboutus"
     style="background:  0% 0% / 100% rgba(255, 255, 255, 0.4); position: fixed; z-index: 999; width: 100%; height: 100%; top: 0px; left: 0px; display: block;">

    <div class="aboutdialog" style="background:rgb(255,255,255);width:60%;height:60%;margin-left:20%;margin-top:10%;">

        <a href="javascript:void(0);" onclick="cancel()"><img style="float:right;width:50px;height:50px"
                                                              src="{{ asset('images/close.jpg')}}" alt=""></a>

        <div class="title" style="width:70%;margin-left:15%;height:10%;padding-top:8%;">

            <img src="{{ asset('upload/contents/'.$content->img_about)}}" alt="">

        </div>

        <div style="clear:both"></div>

        <div class="b" style="width:70%;margin-left:15%;height:70%;padding-top:2%;">

            <div class="u"
                 style="float:left;border-top:2px solid #000;border-bottom:2px solid #000;height:58%;width:22%;padding-top:10%;">

                About Us

            </div>

            <div class="c"
                 style="font-size:14px;float:left;border-top:2px solid #ddd;border-bottom:2px solid #ddd;height:58%;width:78%;padding-top:10%;color:#999;">

                {!! $content->about_us !!}

            </div>

        </div>

    </div>

</div>


<div class="video" id="video"
     style="position: fixed;z-index: 999;width: 100%;height: 100%;top: 0;left: 0;display: none;background-color:#000;">

    <video id="player" style="float:left;margin-top:3%;margin-left:6%" width="85%" height="85%" controls="controls"
           preload="metadata">

        <source src="video.mp4" type="video/mp4">

    </video>

    <a style="float:left;margin-top:3%;" href="javascript:void(0);" onclick="closevideo()"> <img
                src="{{ asset('images/videoclose.png')}}" alt=""></a>

    <div class="" style="clear:both"></div>

    <div class="videofooter" style="color:white;margin-left:6%;font-size:30px;margin-top:1%">

        <img src="{{ asset('images/logo2.png')}}" alt="">

    </div>

</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

</body>
</html>