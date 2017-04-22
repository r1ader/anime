<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #main {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h1>点击拖动小球</h1>
<canvas id="main" width="1200" height="900"></canvas>
</body>
<script>
    var c = document.getElementById('main');
    var ctx = c.getContext('2d');
    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, 1200, 900);
    var px = 400;
    var py = 400;
    var fx = 400;
    var fy = 400;
    var dx = 5;
    var dy = 2;
    var rad = 30;
    draw_c(px, py, 30);
    function draw_c(x, y, r) {
//        console.log('a');
        ctx.fillStyle = 'black';
        ctx.fillRect(0, 0, 1200, 900);
        ctx.fillStyle = 'white';
        ctx.beginPath();
        ctx.arc(x, y, r, 0, 2 * Math.PI);
        ctx.closePath();
        ctx.fill();
    }


    var chose = false;
    c.onmousemove = function (e) {
//        console.log(rad);
        e = e || window.event;
        var rc = c.getBoundingClientRect();
        var mx = e.clientX - rc.left;//获取鼠标在canvsa中的坐标
        var my = e.clientY - rc.top;

        console.log(dx + ' ' + dy);
//        ctx.fillStyle='black';
//        ctx.fillRect(0,0,1200,900);
//        draw_c(px,py,30);
        if (chose) {
            px = mx;
            py = my;
            dx = mx - fx;
            dy = my - fy;
            fx = mx;
            fy = my;
        }
        if (Math.sqrt((mx - px) * (mx - px) + (my - py) * (my - py)) <= 30) {

            rad = 50;
        }
        else {
            rad = 30;
        }

    };

    c.onmousedown = function (e) {
        e = e || window.event;
//        var rc = c.getBoundingClientRect();
//        var mx = e.clientX - rc.left;//获取鼠标在canvsa中的坐标
//        var my = e.clientY - rc.top;
////        console.log(e.clientX + ' ' + e.clientY);
//        if (Math.sqrt((mx - px) * (mx - px) + (my - py) * (my - py)) <= 30) {
        chose = true;
//        }

    };

    c.onmouseup = function (e) {
        e = e || window.event;
//        console.log(e.clientX + ' ' + e.clientY);
        chose = false;
    };

    setInterval(function () {
        if (!chose) {
            px += dx;
            py += dy;
            if (px < 0 || px > 1200) {
                dx *= -1;
            }
            if (py < 0 || py > 900) {
                dy *= -1;
            }
        }
        draw_c(px, py, rad);
    }, 10);
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