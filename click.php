<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #main{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<canvas id="main" width="1200" height="900"></canvas>
</body>
<script>
    var c=document.getElementById('main');
    var ctx=c.getContext('2d');

    c.onclick=function(e){//给canvas添加点击事件
        e=e||event;//获取事件对象
        //获取事件在canvas中发生的位置
        var x=e.clientX-c.offsetLeft;
        var y=e.clientY-c.offsetTop;
        //如果事件位置在矩形区域中
//        ctx.fillStyle='blue';
        ctx.rect(x,y,100,100);
        ctx.stroke();
//        ctx.fill();
        console.log(x+' '+y);
    }
</script>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: HASEE
 * Date: 2017/4/21
 * Time: 16:57
 */
?>