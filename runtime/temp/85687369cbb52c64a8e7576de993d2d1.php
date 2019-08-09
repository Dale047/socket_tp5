<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"G:\PHP\WWW\kefuxitong\public/../application/admin\view\login\index.html";i:1533144155;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>whisper <?php echo $version; ?> -- 后台登录</title>
    <link href="__STATIC__/admin/css/login.css" type="text/css" rel="stylesheet">
</head>
<body>

<div class="login">
    <div class="message">whisper <?php echo $version; ?>-管理登录</div>
    <div id="darkbannerwrap"></div>
    <input name="user_name" placeholder="用户名" type="text" id="user_name">
    <hr class="hr15">
    <input name="password" placeholder="密码" type="password" id="password">
    <hr class="hr15">
    <input value="登录" style="width:100%;" type="button" id="login">
    <hr class="hr20">
</div>
<div class="copyright">© 2017-2018 whisper <?php echo $version; ?> by<a href="http://baiyf.com/" target="_blank"> baiyf.com</a></div>
<script src="__STATIC__/admin/js/jquery.min.js" type="text/javascript"></script>
<script src="__STATIC__/admin/js/layui/layui.js" type="text/javascript"></script>

<script>
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if(e && e.keyCode==13){ // enter 键
            doLogin();
        }
    };
    $(function(){

        $('#login').click(function(){
            doLogin();
        });
    });

    function doLogin(){
        var user_name = $("#user_name").val();
        var password = $("#password").val();

        layui.use('layer', function(){
            var layer = layui.layer;

            layer.ready(function(){
                if('' == user_name){
                    layer.tips('用户名不能为空', '#user_name');
                    return false;
                }

                if('' == password){
                    layer.tips('密码不能为空', '#password');
                    return false;
                }

                var index = layer.load(0, {shade: false});
                $.post("<?php echo url('login/doLogin'); ?>", {user_name: user_name, password: password}, function(res){
                    layer.close(index);
                    if(1 == res.code){
                        layer.msg(res.msg);
                        window.location.href = res.data;
                    }else{
                        return layer.msg(res.msg, {anim: 6, time: 1000});
                    }
                }, 'json');
            });
        });
    }
</script>
</body>
</html>