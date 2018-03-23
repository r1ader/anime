<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    <script src="js/Rcanvas/Rcanvas.js"></script>-->
    <title>Document</title>
    <style>
        #main {
            border: 1px solid black;
        }

        .dir {
            height: 50px;
            width: 50px;
            font-size: 50px;
            /*background-color: aqua;*/
        }

        .ds {
            color: #000;
        }
    </style>
</head>
<body>
<div style="display: inline-block">
    <!--    <h1 id="test">test</h1>-->
    <button onclick="start()">start</button>
    <button onclick="stop()">stop</button>
</div>
<div>
    <div id="w" class="dir" style="margin-left: 55px">w</div>
    <div id="a" class="dir" style="display: inline-block">a</div>
    <div id="s" class="dir" style="display: inline-block">s</div>
    <div id="d" class="dir" style="display: inline-block">d</div>
    <div id="f" class="dir" style="display: inline-block">F</div>
    <div id="left" class="dir" style="display: inline-block;">L</div>
</div>


<canvas id="main" width="1200" height="900"></canvas>
</body>
<script>

    var test = document.getElementById('test');
    var c = document.getElementById('main');
    var ctx = c.getContext('2d');
    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, 1200, 900);
    //requestanime 开始与停止
    {
        var ball = function () {
            this.x = Math.floor(Math.random() * c.width);
            this.y = Math.floor(Math.random() * c.height);

            this.draw = function () {
                ctx.fillStyle = 'white';
//            console.log(this.x+' '+this.y);
                ctx.fillRect(this.x, this.y, 5, 5);
            }
        };

        var st = [];

        for (var i = 0; i < 10; i++) {
            st[i] = new ball;
        }

        var requestId;

        var draw = function () {
            ctx.fillStyle = 'black';
            ctx.fillRect(0, 0, 1200, 900);
            for (var i = 0; i < 10; i++) {
                st[i].x++;
                st[i].draw();
            }
//        requestAnimationFrame(draw);
            requestId = window.requestAnimationFrame(draw, c);
        };

        function start() {
            if (!requestId) {
                draw();
            }
        }

        function stop() {
//        console.log(requestId);
            if (requestId) {
                window.cancelAnimationFrame(requestId);
                requestId = undefined;
            }
        }
    }

    var mousex = 0; //角色在X轴的运动速度
    var mousey = 0;
    var keyw = 0;   //是否按下W建
    var keya = 0;
    var keys = 0;
    var keyd = 0;
    var keyf = 0;
    var mouse_left = 0; //是否按下鼠标左键
    var pian_x;    //在X轴的画面偏移
    var pian_y;
    var pian_len;     //画面偏移量
    var bullet_num = 0;     //画面内的子弹数量
    var bullets = [];      //子弹数组
    var bullet_cd = 0;        //是否能发射子弹
    var light_cd = 100;        //是否能发射光线

    var points = [];        //光源聚焦点数组
    var points_num = 2000;     //光源聚焦点数


    var tank = function () {
        this.x = c.width / 2;
        this.y = c.height / 2;
        this.dir = 0;
        this.movex = 0;
        this.movey = 0;
        this.speed = 10;
    };


    var bullet = function (ax, ay, adir, aspeed=30) {
        this.x = ax;
        this.y = ay;
        this.dir = adir;
        this.speed = aspeed;
    };


    var draw_buttles = function () {
        if (bullet_cd != 0) {
            bullet_cd--;
        }
        else if (mouse_left) {
            bullet_cd = 10;
            bullets[bullet_num] = new bullet(me.x, me.y, me.dir);
            bullet_num++;
            console.log(bullet_num);
        }
        for (var i = 0; i < bullet_num; i++) {
            bullets[i].x += bullets[i].speed * Math.cos(bullets[i].dir);
            bullets[i].y += bullets[i].speed * Math.sin(bullets[i].dir);
            ctx.fillStyle = 'white';
//            ctx.fillRect(bullets[i].x,bullets[i].y,5,5);
            ctx.beginPath();
            ctx.arc(bullets[i].x, bullets[i].y, 5, 0, 2 * Math.PI);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.moveTo(bullets[i].x, bullets[i].y);
            ctx.lineTo(bullets[i].x - 10 * Math.cos(bullets[i].dir), bullets[i].y - 10 * Math.sin(bullets[i].dir));
            ctx.strokeStyle = 'white';
            ctx.lineWidth = 10;
            ctx.stroke();
            ctx.closePath();
            ctx.beginPath();
            ctx.arc(bullets[i].x - 10 * Math.cos(bullets[i].dir), bullets[i].y - 10 * Math.sin(bullets[i].dir), 5, 0, 2 * Math.PI);
            ctx.fill();
            ctx.closePath();
        }
        for (var i = 0; i < bullet_num; i++) {
            if (bullets[i].x < 0 || bullets[i].y < 0 || bullets[i].x > c.width || bullets[i].y > c.height) {
                bullets[i] = bullets[bullet_num - 1];
                bullet_num--;
            }
        }


    };


    var point = function (aout, ain, adir) {
        this.x = 0;
        this.y = 0;
        this.wai = aout;
        this.li = ain;
        this.dir = adir;
        this.flag = 0;
    };


    var draw_light = function () {
        if (light_cd != 100) {
            light_cd--;
            if (light_cd < 0) light_cd = 100;
        }
        else if (light_cd == 100) {
            if (keyf) {
                light_cd--;
                if (light_cd < 0) light_cd = 100;
                for (var i = 0; i < points_num; i++) {
                    var temp = Math.ceil(Math.random() * 100) + 20;
                    var temp2 = Math.ceil(Math.random() * 20);
                    var temp3 = Math.random() * Math.PI * 2;
                    points[i] = new point(temp, temp2, temp3);
                }
            }
        }

        if (light_cd >= 50 && light_cd < 100) {
            var prec = 100 - light_cd;
            var col = Math.floor(254 / 50 * prec);
            ctx.fillStyle = 'rgba(' + col + ',' + col + ',' + col + ',' + '1)';
            var light_center_x = me.x + 80 * Math.cos(me.dir);
            var light_center_y = me.y + 80 * Math.sin(me.dir);
            ctx.beginPath();
            ctx.arc(light_center_x, light_center_y, prec / 2.5, 0, 2 * Math.PI);
            ctx.fillStyle = 'rgba(255,255,255,' + prec / 50 + ')';
            ctx.fill();
            ctx.closePath();
            for (var i = 0; i < points_num; i++) {
                points[i].x = light_center_x + Math.cos(points[i].dir) * (points[i].wai - (points[i].wai - points[i].li) * prec / 50);
                points[i].y = light_center_y + Math.sin(points[i].dir) * (points[i].wai - (points[i].wai - points[i].li) * prec / 50);
                ctx.fillRect(points[i].x, points[i].y, 1, 1);
            }
        }
        if (light_cd < 50 && light_cd > 20) {
            console.log('lig');
            var prec = 50 - light_cd;
            var light_center_x = me.x + 80 * Math.cos(me.dir);
            var light_center_y = me.y + 80 * Math.sin(me.dir);
            ctx.beginPath();
            ctx.moveTo(light_center_x, light_center_y);
            ctx.lineTo(me.x + 100 * prec * Math.cos(me.dir), me.y + 100 * prec * Math.sin(me.dir));
            ctx.strokeStyle = 'white';
            ctx.lineWidth = prec / 2;
            ctx.stroke();
            ctx.closePath();
            ctx.beginPath();
            ctx.arc(light_center_x, light_center_y, 20, 0, 2 * Math.PI);
            ctx.fillStyle = 'white';
            ctx.fill();
            ctx.closePath();
//            for (var i = 0; i < points_num; i++) {
//                if (points[i].flag == 0 && Math.random() > 0.99) {
//                    points[i].x = light_center_x + 10 * prec * Math.cos(me.dir) + 50 * Math.random() - 25;
//                    points[i].y = light_center_y + 10 * prec * Math.sin(me.dir) + 50 * Math.random() - 25;
//                    points[i].flag = 1;
//                }
//                else {
//                    points[i].x += 20 * Math.random() - 10 + 5 * Math.cos(me.dir);
//                    points[i].y += 20 * Math.random() - 10 + 5 * Math.sin(me.dir);
//                }
//                ctx.fillRect(points[i].x, points[i].y, 1, 1);
//            }
        }
        if (light_cd <= 20) {
            var prec = 20 - light_cd;
            var col = 255 - Math.floor(254 / 20 * prec);
            ctx.fillStyle = 'rgba(' + col + ',' + col + ',' + col + ',' + '1)';
            ctx.strokeStyle = 'rgba(' + col + ',' + col + ',' + col + ',' + '1)';
            var light_center_x = me.x + 80 * Math.cos(me.dir);
            var light_center_y = me.y + 80 * Math.sin(me.dir);
            ctx.beginPath();
            ctx.arc(light_center_x, light_center_y, 20, 0, 2 * Math.PI);
            ctx.fill();
            ctx.closePath();
            ctx.beginPath();
            ctx.moveTo(me.x + 80 * Math.cos(me.dir), me.y + 80 * Math.sin(me.dir));
            ctx.lineTo(me.x + 2000 * Math.cos(me.dir), me.y + 2000 * Math.sin(me.dir));
            ctx.lineWidth = 15;
            ctx.stroke();
            ctx.closePath();
//            for (var i = 0; i < points_num; i++) {
//                points[i].x += 20 * Math.random() - 10 + 5 * Math.cos(me.dir);
//                points[i].y += 20 * Math.random() - 10 + 5 * Math.sin(me.dir);
//                ctx.fillRect(points[i].x, points[i].y, 1, 1);
//            }
        }
    };


    var me = new tank;


    var drawme = function () {
//        var temp_x = me.x;
//        var temp_y = me.y;
//        if (light_cd <= 50) {
//            me.x += 10 * Math.random();
//            me.y += 10 * Math.random();
//        }
        ctx.fillStyle = 'black';
        ctx.fillRect(0, 0, 1200, 900);
        ctx.strokeStyle = 'white';
        ctx.fillStyle = 'white';
        //画圆
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.arc(me.x, me.y, 30, 0, Math.PI * 2);
        ctx.stroke();
        ctx.fill();
        ctx.closePath();
        //画三角形
        ctx.beginPath();
        ctx.moveTo(me.x + 60 * Math.cos(me.dir), me.y + 60 * Math.sin(me.dir));
        ctx.lineTo(me.x + 30 * Math.cos(me.dir + Math.PI / 3), me.y + 30 * Math.sin(me.dir + Math.PI / 3))
        ctx.lineTo(me.x + 30 * Math.cos(me.dir - Math.PI / 3), me.y + 30 * Math.sin(me.dir - Math.PI / 3))
        ctx.stroke();
        ctx.fill();
        ctx.closePath();
        //画黑边
        ctx.beginPath();
        ctx.arc(me.x, me.y, 31, 0, Math.PI * 2);
        ctx.strokeStyle = 'black';
        ctx.lineWidth = 5;
        ctx.stroke();
        ctx.closePath();
//        me.x = temp_x;
//        me.y = temp_y;
    };


    var gui = function () {
        if (keya)
            document.getElementById('a').style.backgroundColor = 'green';
        else
            document.getElementById('a').style.backgroundColor = 'white';
        if (keyw)
            document.getElementById('w').style.backgroundColor = 'green';
        else
            document.getElementById('w').style.backgroundColor = 'white';
        if (keys)
            document.getElementById('s').style.backgroundColor = 'green';
        else
            document.getElementById('s').style.backgroundColor = 'white';
        if (keyd)
            document.getElementById('d').style.backgroundColor = 'green';
        else
            document.getElementById('d').style.backgroundColor = 'white';
        if (mouse_left)
            document.getElementById('left').style.backgroundColor = 'green';
        else
            document.getElementById('left').style.backgroundColor = 'white';
        if (keyf)
            document.getElementById('f').style.backgroundColor = 'green';
        else
            document.getElementById('f').style.backgroundColor = 'white';
    };


    var update_speed = function () {
        if (light_cd != 100) {
            keya = 0;
            keys = 0;
            keyd = 0;
            keyw = 0;
            keyf = 0;
            mouse_left = 0;
        }
        if (keya && !keyd) {
            me.movex = -1 * me.speed;
        }
        if (!keya && keyd) {
            me.movex = me.speed;
        }
        if (keyw && !keys) {
            me.movey = -1 * me.speed;
        }
        if (!keyw && keys) {
            me.movey = me.speed;
        }
        if(Math.abs(keyw-keys)+Math.abs(keya-keyd)==2)
        {
            me.movex/=Math.sqrt(2);
            me.movey/=Math.sqrt(2);
            me.movex = Math.floor(me.movex);
            me.movey = Math.floor(me.movey);
        }
    };


    var update_postion = function () {
        if (light_cd == 100) {
            me.dir = Math.atan2(mousey - me.y, mousex - me.x);
        }
        if (me.x > 0 && me.movex < 0 || me.x < c.width && me.movex > 0)
            me.x += me.movex;
        if (me.y > 0 && me.movey < 0 || me.y < c.height && me.movey > 0)
            me.y += me.movey;
        if (me.movex != 0)
            me.movex -= me.movex > 0 ? 1 : -1;
        if (me.movey != 0)
            me.movey -= me.movey > 0 ? 1 : -1;
    };

    //主要循环函数，每帧运行一次
    var pr = function () {
        //画面偏移模拟震动
        if (light_cd != 100) {
            pian_len = (50 - Math.abs(50 - light_cd)) / 3;
            pian_x = pian_len * Math.random() - pian_len / 2;
            pian_y = pian_len * Math.random() - pian_len / 2;
            ctx.translate(pian_x, pian_y);
        }

        gui();      //显示此时操作

        update_speed();     //更新速度

        update_postion();   //更新位置

        drawme();   //打印角色

        draw_buttles();     //打印子弹

        draw_light();   //打印光线

        //坐标回复到画面偏移之前
        if (light_cd != 100) {
            ctx.translate(-1 * pian_x, -1 * pian_y);
        }
        window.requestAnimationFrame(pr);
    };

    document.onkeydown = function (event) {
        var e = e || event;
//        console.log(e.keyCode);
        var speed = 10;
        if (e && e.keyCode == 87) { // 按 w
            keyw = 1;
        }
        if (e && e.keyCode == 83) { // 按 s
            keys = 1;
        }
        if (e && e.keyCode == 68) { // 按 d
            keyd = 1;
        }
        if (e && e.keyCode == 65) { // 按 a
            keya = 1;
        }
        if (e && e.keyCode == 70) { // 按 f
            keyf = 1;
        }
    };

    document.onkeyup = function (event) {
        var e = e || event;
        if (e && e.keyCode == 87) { // 松开 w
            keyw = 0;
        }
        if (e && e.keyCode == 83) { // 松开 s
            keys = 0;
        }
        if (e && e.keyCode == 68) { // 松开 d
            keyd = 0;
        }
        if (e && e.keyCode == 65) { // 松开 a
            keya = 0;
        }
        if (e && e.keyCode == 70) { // 按 f
            keyf = 0;
        }
    };

    document.onmousemove = function (e) {
        e = e || window.event;
        var rc = c.getBoundingClientRect();
        mousex = Math.floor(e.clientX - rc.left);//获取鼠标在canvsa中的坐标
        mousey = Math.floor(e.clientY - rc.top);
//        console.log(me.dir);
    };

    c.onmousedown = function (e) {
        mouse_left = 1;
    };

    c.onmouseup = function (e) {
        mouse_left = 0;
    };

    pr();
</script>
</html>











