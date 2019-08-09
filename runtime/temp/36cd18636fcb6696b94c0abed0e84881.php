<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"G:\PHP\WWW\kefuxitong\public/../application/index\view\index\index.html";i:1533143955;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>whisper客服测试页面</title>
    <meta name="keywords" content="whisper客服">
    <meta name="description" content="whisper客服">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.staticfile.org/font-awesome/4.4.0/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="__STATIC__/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="__STATIC__/demo/css/common.css" rel="stylesheet"  />
</head>

<body class="gray-bg">

<!-- 右侧悬浮 -->
<div id="service">
    <ul>
        <li>
            <a href="javascript:;">
                <div class="hides" style="width:161px;display:none;">
                    <div class="hides p1">
                        <img src="__STATIC__/demo/images/ll04.png">
                    </div>
                    <div class="hides p2" id="buy-1" data-group="1">
                        <span style="color:#FFF;font-size:13px">售前客服</span>
                    </div>
                </div>
                <img src="__STATIC__/demo/images/l04.png" width="47" height="49" class="shows" />
            </a>
        </li>

        <li>
            <a href="javascript:;">
                <div class="hides" style="width:161px;display:none;">
                    <div class="hides p1">
                        <img src="__STATIC__/demo/images/ll04.png">
                    </div>
                    <div class="hides p2" id="buy-2" data-group="2">
                        <span style="color:#FFF;font-size:13px">售后客服</span>
                    </div>
                </div>
                <img src="__STATIC__/demo/images/l04.png" width="47" height="49" class="shows" />
            </a>
        </li>

        <li id="btn">
            <a id="top_btn">
                <div class="hides" style="width:161px;display:none">
                    <img src="__STATIC__/demo/images/ll06.png" width="161" height="49" />
                </div>
                <img src="__STATIC__/demo/images/l06.png" width="47" height="49" class="shows" />
            </a>
        </li>
    </ul>
</div>
<!-- 右侧悬浮 -->

<script src="https://cdn.staticfile.org/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="__STATIC__/admin/js/content.min.js?v=1.0.0"></script>
<script src="__STATIC__/customer/js/layer/layer.js"></script>
<script src="__STATIC__/customer/js/whisper-tool.js"></script>

<script type="text/javascript">
    $(function() {
        $("#service a").hover(function() {
            if ($(this).prop("className") == "weixin_area") {
                $(this).children("img.hides").show();
            } else {
                $(this).children("div.hides").show();
                $(this).children("img.shows").hide();
                $(this).children("div.hides").animate({marginRight: '0px'}, '0');
            }
        }, function() {
            if ($(this).prop("className") == "weixin_area") {
                $(this).children("img.hides").hide();
            } else {
                $(this).children("div.hides").animate({marginRight: '-163px'}, 0, function() {
                    $(this).hide();
                    $(this).next("img.shows").show();
                });
            }
        });

        var ws = new whisper();
        var uid = parseInt(Math.random() * 40) + 1;

        $("#buy-1,#buy-2").click(function(){
            var group = $(this).attr('data-group');
            ws.init({
                id: uid,
                url: '/',
                name: '会员' + uid,
                avatar: 'http://wx2.sinaimg.cn/mw690/5db11ff4gy1flxmew7edlj203d03wt8n.jpg',
                group: group
            });
        });

        $("#top_btn").click(function() {
            $("html,body").animate({scrollTop: 0}, 600);
        });
    });
</script>
</body>
</html>