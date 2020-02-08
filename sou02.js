/*
作者:D.Young
主页：https://yyv.me/
github：https://github.com/5iux/sou
日期：2019-07-11
版权所有，请勿删除
*/

$(document).ready(function() {
    //判断窗口大小，添加输入框自动完成
    var wid = $("body").width();
    if (wid < 640) {
        $(".wd").attr('autocomplete', 'off');
    }

    function sub() {
        var nm = $(".wd").attr('name');
        if (nm == "q") {
            $("form").attr('action', 'https://www.google.com/search?hl=zh');
            $("form").submit();
        } else {
            $("form").attr('action', 'https://www.baidu.com/s?ie=utf-8');
            $("form").submit();
        }
    }
    //按钮
    $(".sou li").click(function() {
        var dt = $(this).attr('data-s');
        if (dt == "google") {
            $(".wd").attr('name', 'q');
            sub();
        } else {
            $(".wd").attr('name', 'wd');
            sub();
        }
    });
    //菜单点击
    $("#menu").click(function(event) {
        $(this).toggleClass('on');
        $(".list").toggleClass('closed');
        $(".mywth").toggleClass('hidden');
    });
    $("#content").click(function(event) {
        $(".on").removeClass('on');
        $(".list").addClass('closed');
        $(".mywth").removeClass('hidden');
    });
});