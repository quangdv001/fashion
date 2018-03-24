var width = screen.width;

var hh = screen.height;

var imgwidth = $("#pic").width();

var imgheight = $("#pic").height();

var pro = width / imgwidth;

var height = imgheight * pro;

var hidwid = width * 0.04;

var hidhei = height * 0.07;

var videoimgh = $(".videoa").height();

var videoimgw = $(".videoa").width();

window.onload = function onload() {

    var videoh = videoimgh * pro;

    var videow = videoimgw * pro;

    var videoat = 570 * pro;

    var videoal = 400 * pro;

    $(".innerwraper").css('width', width);

    $(".innerwraper").css('height', height);

    $(".img").css('width', width);

    $(".img").css('height', height);

    $(".left").css('width', hidwid);

    $(".left").css('height', hh);

    $(".right").css('width', hidwid);

    $(".right").css('height', hh);

    $(".top").css("width", width);

    $(".top").css("height", hidhei);

    $("#logo").css("margin-left", hidwid - 65 * pro);

    $("#beian").css("margin-right", hidwid - 58 * pro);

    $(".videoi").css('height', videoh);

    $(".videoi").css('width', videow);

    $(".videoa").css('top', videoat);

    $(".videoa").css('left', videoal);

    $("#right").css({top: window.innerHeight + window.scrollY - $("#right").outerHeight()});

}

$(window).resize(function () {

    $("#right").css({top: window.innerHeight + window.scrollY - $("#right").outerHeight()});

});

function showabout() {

    $("#aboutus").css('display', 'block');

}


function cancel() {

    $("#aboutus").css('display', 'none');

}


function showvideo() {

    $("#video").css('display', 'block');

    $("#player")[0].volume = 0.5;
    ;

    $("#player")[0].play();

}


function closevideo() {

    $("#player")[0].pause();

    $("#video").css('display', 'none');

}

var innerGroup = $(".innerwraper");

var leftArrow = $(".left-arrow");

var rightArrow = $(".right-arrow");

var imgWidth = $(".innerwraper img:first-child").eq(0).width();

var _index = 0;

var timer = null;

var flag = true;

rightArrow.on("click", function () {

    //右箭头

    flag = false;

    clearInterval(timer);

    _index++;

    selectPic(_index);

})

leftArrow.on("click", function () {

    //左箭头

    flag = false;

    clearInterval(timer);

    if (_index == 0) {

        _index = innerGroup.length - 1;

        $(".inner").css("left", -(innerGroup.length - 1) * width);

    }

    _index--;

    selectPic(_index);

})

$(".container").hover(function () {

    //鼠标移入

    clearInterval(timer);

    flag = false;

}, function () {

    flag = true;

    timer = setInterval(go, 3000);

});


function autoGo(bol) {

    //自动行走

    if (bol) {

        timer = setInterval(go, 3000);

    }

}

autoGo(flag);


function go() {

    //计时器的函数

    _index++;

    selectPic(_index);

}


function selectPic(num) {

    $(".inner").animate({

        left: -num * width,

    }, 1000, function () {

        //检查是否到最后一张

        if (_index == innerGroup.length - 1) {

            _index %= 3;

            $(".inner").css("left", "0px");

        }

    })

}