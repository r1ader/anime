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
<h1>点击拖动白球撞击黑球</h1>
<canvas id="main" width="1200" height="900"></canvas>
</body>
<script>
    var c = document.getElementById('main');
    var ctx = c.getContext('2d');
    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, 1200, 900);
    var px = 400;
    var py = 400;
    var px2 = 400;
    var py2 = 400;
    var fx = 400;
    var fy = 400;
    var dx = 5;
    var dy = 2;
    var dx2 = 0;
    var dy2 = 0;
    var rad = 50;
    draw_c(px, py, 50);
    function draw_c(x, y, r,col) {
//        console.log('a');

        ctx.fillStyle = col;
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

//        console.log(dx + ' ' + dy);
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
            rad = 50;
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

    function jud() {
        if(Math.sqrt((px2 - px) * (px2 - px) + (py2 - py) * (py2 - py)) <= 100)
        {
//            console.log(dx2*dx2+dy2*dy2);
//            dx+=0.5*Math.sqrt(dx2*dx2+dy2*dy2)*(px-px2)/100;
//            dy+=0.5*Math.sqrt(dx2*dx2+dy2*dy2)*(py-py2)/100;
//            dx2+=-0.5*Math.sqrt(dx*dx+dy*dy)*(px-px2)/100;
//            dy2+=-0.5*Math.sqrt(dx*dx+dy*dy)*(py-py2)/100;
            dx+=0.5*Math.sqrt(dx2*dx2+dy2*dy2)*(px-px2)/100;
            dy+=0.5*Math.sqrt(dx2*dx2+dy2*dy2)*(py-py2)/100;
            dx2+=-0.5*Math.sqrt(dx*dx+dy*dy)*(px-px2)/100;
            dy2+=-0.5*Math.sqrt(dx*dx+dy*dy)*(py-py2)/100;
//            console.log('stop');
        }
    }

    setInterval(function () {
        jud();
        if (!chose) {
            dx*=0.997;
            dy*=0.997;
            dx2*=0.997;
            dy2*=0.997;
            if(dx<=0.1&&dx>=-0.1&&dy<=0.1&&dy>=-0.1)
            {
                dx=0;
                dy=0;
            }
            px += dx;
            py += dy;
            px2 += dx2;
            py2 += dy2;
            if (px < 50 || px > 1150) {
                if(px<50) px=50;
                if(px>1150) px=1150;
                dx *= -1;
            }
            if (py < 50 || py > 850) {
                if(py<50) py=50;
                if(py>850) py=850;
                dy *= -1;
            }
            if (px2 < 50 || px2 > 1150) {
                if(px2<50) px2=50;
                if(px2>1150) px2=1150;
                dx2 *= -1;
            }
            if (py2 < 50 || py2 > 850) {
                if(py2<50) py2=50;
                if(py2>850) py2=850;
                dy2 *= -1;
            }
        }
        ctx.fillStyle = 'black';
        ctx.fillRect(0, 0, 1200, 900);
        draw_c(px, py, rad,'white');
        draw_c(px2, py2, 50,'blue');
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