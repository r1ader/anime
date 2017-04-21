<!DOCTYPE html>

<html lang="zh">

<head>

    <meta charset="gbk"/>

    <title>HTML5 Canvas中处理鼠标事件</title>

    <script type="text/javascript" src="script.js"></script>
    <style>
        #scene {
            border: 1px solid black;
        }
    </style>
</head>

<body>

<div class="container">

    <canvas id="scene" width="900" height="600"></canvas>

</div>


</body>

</html>

<script>

    var canvas, ctx;

    var circles = [];//所有的圆

    var selectedCircle;//选中的圆

    var hoveredCircle;//滑过的圆

    //圆对象

    function Circle(x, y, radius, speed) {

        this.x = x;

        this.y = y;

        this.radius = radius;

        this.speed = speed;
    }

    //清除canvas

    function clear() {

        ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);

    }

    //画圆

    function drawCircle(ctx, x, y, radius) {

        ctx.fillStyle = 'rgba(255, 35, 55, 1.0)';

        ctx.beginPath();

        ctx.arc(x, y, radius, 0, Math.PI * 2, true);

        ctx.closePath();

        ctx.fill();

    }

    //画场景

    function drawScene() {

        clear();

        ctx.beginPath();

        ctx.fillStyle = 'rgba(255, 110, 110, 0.5)';

        ctx.moveTo(circles[0].x, circles[0].y);

        for (var i = 0; i < circles.length; i++) {

            ctx.lineTo(circles[i].x, circles[i].y);
//            circles[i].x--;
            if (circles[i].speed != 0.01) {
                circles[i].speed++;
                circles[i].y += circles[i].speed;
            }
            if (circles[i].y >= 575) {
                console.log(i+' '+circles[i].speed);
                if (circles[i].speed <= 1&&circles[i].speed >= -1)
                    circles[i].speed = 0.01;
                else if(circles[i].speed>0)
                    circles[i].speed *= -1;
            }
        }

        ctx.closePath();

        ctx.fill();

        ctx.lineWidth = 5;

        ctx.strokeStyle = 'rgba(0, 0, 255, 0.5)';

        ctx.stroke(); // 画边界,用直线连接所有圆心

//画出所有的圆,滑过的圆半径稍大

        for (var i = 0; i < circles.length; i++) {

            drawCircle(ctx, circles[i].x, circles[i].y, (hoveredCircle == i) ? 25 : 15);

        }

    }

    //初始化

    window.onload = function () {

        canvas = document.getElementById('scene');

        ctx = canvas.getContext('2d');

        var circleRadius = 15;//每个小圆的半径

        var width = canvas.width;

        var height = canvas.height;

        var circlesCount = 7; // 圆的数目

        for (var i = 0; i < circlesCount; i++) {

            var x = Math.random() * width;//随机的圆心坐标

            var y = Math.random() * height;

            var speed = 0;

            circles.push(new Circle(x, y, circleRadius, speed));

        }

//鼠标按下事件,这是传统的事件绑定,它非常简单而且稳定,适应不同浏览器.e表示事件,this指向当前元素.

//但是这样的绑定只会在事件冒泡中运行,捕获不行.一个元素一次只能绑定一个事件函数.

        canvas.onmousedown = function (e) {

            var e = window.event || e

            var rect = this.getBoundingClientRect();

            var mouseX = e.clientX - rect.left;//获取鼠标在canvsa中的坐标

            var mouseY = e.clientY - rect.top;

            for (var i = 0; i < circles.length; i++) { //检查每一个圆，看鼠标是否落在其中

                var circleX = circles[i].x;

                var circleY = circles[i].y;

                var radius = circles[i].radius;

//到圆心的距离是否小于半径

                if (Math.pow(mouseX - circleX, 2) + Math.pow(mouseY - circleY, 2) < Math.pow(radius, 2)) {

                    selectedCircle = i;//选中此圆

                    break;

                }

            }

        }

//鼠标移动

        canvas.onmousemove = function (e) {

            var e = window.event || e

            var rect = this.getBoundingClientRect();

            var mouseX = e.clientX - rect.left;//获取鼠标在canvsa中的坐标

            var mouseY = e.clientY - rect.top;

            if (selectedCircle != undefined) {

                var radius = circles[selectedCircle].radius;

                circles[selectedCircle] = new Circle(mouseX, mouseY, radius,0); //改变选中圆的位置

            }

            hoveredCircle = undefined;

            for (var i = 0; i < circles.length; i++) { // 检查每一个圆，看鼠标是否滑过

                var circleX = circles[i].x;

                var circleY = circles[i].y;

                var radius = circles[i].radius;

                if (Math.pow(mouseX - circleX, 2) + Math.pow(mouseY - circleY, 2) < Math.pow(radius, 2)) {

                    hoveredCircle = i;

                    break;

                }

            }

        }

//鼠标松开

        canvas.onmouseup = function (e) {
            selectedCircle = undefined;
        };

        setInterval(drawScene, 25);

    }
</script>