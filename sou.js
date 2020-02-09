$(document).ready(function() {
    //body
    var wid = $("body").width();
    if (wid < 640) {
        $(".wd").attr('autocomplete', 'off');
    }
    //button
    $(".sou li").click(function() {
        var dt = $(this).attr('data-s');
        wd = $(".wd").val();
        if (dt == "google") {
            if (wd == "" || wd == null) {
                window.location.href = "https://www.google.com/?hl=zh";
            } else {
                $(".t").val("g");
                $("form").submit();
            }
        } else {
            if (wd == "" || wd == null) {
                window.location.href = "https://www.baidu.com/?tn=simple";
            } else {
                $(".t").val("b");
                $("form").submit();
            }
        }

    });
    //menu
    $("#menu").click(function(event) {
        $(this).toggleClass('on');
        $(".list").toggleClass('closed');
    });
    $("#content").click(function(event) {
        $(".on").removeClass('on');
        $(".list").addClass('closed');
    });
});