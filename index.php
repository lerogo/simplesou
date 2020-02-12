<?php
//禁用错误报告
error_reporting(0);
$t = htmlspecialchars($_POST["t"]);
$q = urlencode(htmlspecialchars($_POST["q"],ENT_NOQUOTES));
if ($q == "" || $q == null) {
    if ($t == "0") {
        echo '<script>window.location.href=window.location.href</script>';
    }
} else {
    if ($t == "b") {
        //baidu
        echo '<script>window.location.href="//www.baidu.com/s?ie=utf-8&word=' . $q . '"</script>';
    } else if ($t == "g") {
        //google
        echo '<script>window.location.href="https://www.google.com/search?hl=zh&q=' . $q . '"</script>';
    } else {
        //默认百度
        echo '<script>window.location.href="//www.baidu.com/s?ie=utf-8&word=' . $q . '"</script>';
    }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <link rel="icon" href="icon/192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="icon/300.png" />
    <meta name="msapplication-TileImage" content="icon/300.png" />
    <link rel="shortcut icon" href="icon/32.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes">
    <!--UC强制全屏-->
    <meta name="browsermode" content="application">
    <!--UC应用模式-->
    <meta name="x5-fullscreen" content="true">
    <!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app">
    <!--QQ应用模式-->
    <title>simple search</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_1230786_gdvd1b4wlz.css">
    <!--改用本地js 可去掉注释 -->
    <!-- <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="jquery3.3.1.min.js"></script>
    <script src="sou.js"></script>
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?5659f09d4ea45c1fc2aa381d45b22b85";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
    <div id="menu"><i></i></div>
    <div class="list closed">
        <ul>
            <!------>
            <li class="title"><i class="iconfont icon-kongzhitai"></i> 开发</li>
            <li><a rel="nofollow" href="https://www.csdn.net/" target="_blank"><i class="iconfont icon-cdnjs" style="color: #e52;"></i>CSDN</a></li>
            <li><a rel="nofollow" href="https://stackoverflow.com/" target="_blank"><i class="iconfont icon-cloudflare" style="color: #f37f20;"></i>stackOF</a></li>
            <li><a rel="nofollow" href="https://github.com/login" target="_blank"><i class="iconfont icon-github"></i>Github</a></li>
            <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><i class="iconfont icon-msg" style="color:#096;"></i>SF思否</a></li>
            <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><i class="iconfont icon-windows" style="color: #48c;"></i>MSDN</a></li>
            <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><i class="iconfont icon-theater-masks" style="color:#f03;"></i>吾爱破解</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-ai-tool"></i> 工具</li>
            <li><a rel="nofollow" href="https://tool.lu" target="_blank"><i class="iconfont icon-ai-tool" style="color: #02f;"></i>在线工具</a></li>
            <li><a rel="nofollow" href="https://tools.imiku.me/" target="_blank"><i class="iconfont icon-ai-tool"></i>Miku工具</a></li>
            <li><a rel="nofollow" href="https://blog.lerogo.top/fun_api/" target="_blank"><i class="iconfont icon-wangluo" style="color: #02f;"></i>站长api</a></li>
            <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><i class="iconfont icon-fanyi" style="color: #02f;"></i>谷歌翻译</a></li>
            <li><a rel="nofollow" href="http://www.ip138.com/" target="_blank"><i class="iconfont icon-wangluo" style="color: #02f;"></i>IP查询</a></li>
            <li><a rel="nofollow" href="https://blog.lerogo.top/zyml/" target="_blank"><i class="iconfont icon-baiduyun" style="color: #148bfe;"></i>站长分享</a></li>
            <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i class="iconfont icon-baiduyun" style="color: #148bfe;"></i>百度网盘</a></li>
            <li><a rel="nofollow" href="https://www.baiduwp.com" target="_blank"><i class="iconfont icon-cloud-download" style="color: #148bfe;"></i>网盘解析</a></li>
            <li><a rel="nofollow" href="https://www.mdeditor.com/" target="_blank"><i class="iconfont icon-md" style="color:#09f;"></i>MD编辑器</a></li>
            <li><a rel="nofollow" href="http://cubic-bezier.com" target="_blank"><i class="iconfont icon-quxian" style="color: #f08;"></i>贝赛尔曲线</a></li>
            <li><a rel="nofollow" href="https://ping.pe" target="_blank"><i class="iconfont icon-wangluo1" style="color:#1d0;"></i>Ping.pe</a></li>
            <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank"><i class="iconfont icon-pingup" style="color:#2361ad;"></i>站长Ping</a></li>
            <li><a rel="nofollow" href="https://apkdl.in/" target="_blank"><i class="iconfont icon-anzhuo" style="color:#094;"></i>APK下载</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-sheji"></i> 设计视觉</li>
            <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><i class="iconfont icon-dribbble" style="color:#e48;"></i>Dribbble</a></li>
            <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><i class="iconfont icon-huaban" style="color:#f06;"></i>花瓣</a></li>
            <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><i class="iconfont icon-zhanku" style="color:#f90;"></i>站酷</a></li>
            <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><i class="iconfont icon-iconfont" style="color: #ff6019;"></i>阿里图标</a></li>
            <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><i class="iconfont icon-eye"></i>IconFinder</a></li>
            <li><a rel="nofollow" href="https://uiiiuiii.com/" target="_blank"><i class="iconfont icon-jiaocheng" style="color:#0aa;"></i>优设教程</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-shipin"></i> 视频媒体</li>
            <li><a rel="nofollow" href="https://www.lerogo.top/tools/music/" target="_blank"><i class="iconfont icon-yinle" style="color:#f4a;"></i>音乐解析</a></li>
            <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><i class="iconfont icon-tengxunshipin" style="color:#2a0;"></i>腾讯视频</a></li>
            <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><i class="iconfont icon-aiqiyi" style="color:#1d0;"></i>爱奇艺</a></li>
            <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><i class="iconfont icon-acfun" style="color:#f33;"></i>ACFUN</a></li>
            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i class="iconfont icon-bili" style="color:#09e;"></i>哔哩哔哩</a></li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><i class="iconfont icon-youtube" style="color:#f03;"></i>Youtube</a></li>
            <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><i class="iconfont icon-youku" style="color:#09e;"></i>优酷</a></li>
            <li><a rel="nofollow" href="https://www.nfmovies.com/" target="_blank"><i class="iconfont icon-yunbo" style="color:#0bf;"></i>影视搜索</a></li>
            <li><a rel="nofollow" href="https://www.ygdy8.com/" target="_blank"><i class="iconfont icon-yunbo" style="color:#0bf;"></i>阳光电影</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-youxiang"></i> 邮箱</li>
            <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><i class="iconfont icon-QQ" style="color: #f05;"></i>QQ邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.sina.com.cn/" target="_blank"><i class="iconfont icon-xinlang" style="color: #e6162d;"></i>新浪邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><i class="iconfont icon-wangyi" style="color: #169;"></i>网易邮箱</a></li>
            <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><i class="iconfont icon-windows" style="color: #059;"></i>Hotmail</a></li>
            <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><i class="iconfont icon-yunyouxiang" style="color: #f15534;"></i>阿里邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="iconfont icon-gmail" style="color: #f03;"></i>Gmail</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-msg"></i> 社交</li>
            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i class="iconfont icon-weibo" style="color: #e6162d;"></i>微博</a></li>
            <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><i class="iconfont icon-zhihu" style="color: #0084ff;"></i>知乎</a></li>
            <li><a rel="nofollow" href="https://www.douban.com" target="_blank"><i class="iconfont icon-douban" style="color: #072;"></i>豆瓣</a></li>
            <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><i class="iconfont icon-instagram" style="color: #93009f;"></i>Instagram</a></li>
            <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><i class="iconfont icon-twitter" style="color: #00bcff;"></i>Twitter</a></li>
            <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><i class="iconfont icon-facebook" style="color: #4267b2;"></i>Facebook</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-gouwuche"></i> 购物</li>
            <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><i class="iconfont icon-taobao" style="color: #ff6019;"></i>淘宝网</a></li>
            <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><i class="iconfont icon-jingdong" style="color: #e33333;"></i>京东</a></li>
            <li><a rel="nofollow" href="https://www.suning.com/" target="_blank"><i class="iconfont icon-suning" style="color: #f90;"></i>苏宁易购</a></li>
            <li><a rel="nofollow" href="http://you.163.com/" target="_blank"><i class="iconfont icon-yanxuan" style="color: #B4A078;"></i>网易严选</a></li>
            <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank"><i class="iconfont icon-amazon" style="color: #fc9b18;"></i>亚马逊</a></li>
            <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank"><i class="iconfont icon-dangdang" style="color: #ff2832;"></i>当当</a></li>
        </ul>
    </div>
    <div id="content">
        <div class="con">
            <div class="shlogo"></div>
            <div class="sou">
                <form action="" method="post" target="_self">
                    <input class="t" type="text" value="0" name="t" hidden>
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN">
                    <button><i style="font-size: 20px;" class="iconfont icon-sousuo"></i></button>
                </form>
                <ul>
                    <li data-s="baidu" target="_blank"><i style="background-image: url(icon/baidu.svg);"></i>百度一下</li>
                    <li data-s="google" target="_blank"><i style="background-image: url(icon/g.svg);"></i>Google</li>
                </ul>
            </div>
        </div>
        <div class="foot">
            © <?php echo date("Y") ?>
            <a href="https://blog.lerogo.top/">lerogo</a>.
            <a target="_blank" href="https://pay.lerogo.top/">donate</a>
            <p>
                <script src="https://api.lerogo.top/yiyan/api.php"></script>
            </p>
        </div>
    </div>
</body>

</html>