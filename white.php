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
            /*width: 160px;*/
            /*height: 100px;*/
            border: 1px solid #000000;
        }
    </style>

</head>

<body>
<h1 id="test"></h1>
<canvas id="main" width="1600" height="1200"></canvas>
</body>
<script>


    var c = document.getElementById("main");
    var ctx = c.getContext("2d");
    ctx.fillStyle = "#000000";
    ctx.fillRect(0, 0, 2000, 1600);
    var x = 700;
    var y = 0;
    var num = 100;
    var xj = new Array(num);
    var yj = new Array(num);
    var dir = new Array(num);
    var col = new Array(num);
    var time = window.requestAnimationFrame(a);
    //    var xj = [0,0,0,0];
    //    var yj = [0,0,0,0];
    //    var dir = [0,0,0,0];
    //    var time = window.setInterval(a, 7);
    var time3;
    for (var i = 0; i < num; i++) {
        xj[i] = Math.random() * 1600;
        yj[i] = Math.random() * 1200;
        dir[i] = Math.random() * 6.28;
        col[i] = 'rgba(' + Math.random() * 255 + ',' + Math.random() * 255 + ',' + Math.random() * 255 + ',300)';
//        xj[i] = 0;
//        yj[i] = 0;
//        dir[i] =0;
    }

    function a() {
        requestAnimationFrame(a);
        ctx.fillStyle = "rgba(0,0,0,0.02)";
        ctx.fillRect(0, 0, 2000, 1600);
        for (var i = 0; i < num; i++) {
//            var lGrd = ctx.createLinearGradient(xj[i],yj[i], xj[(i+1)%num],yj[(i+1)%num]);
//            lGrd.addColorStop(0,col[i]);
//            lGrd.addColorStop(1,col[(i+1)%num]);
            ctx.strokeStyle = "white";
            ctx.fillStyle = col[i];
            ctx.beginPath();
            ctx.moveTo(xj[i], yj[i]);
            ctx.lineTo(xj[(i + 1) % num], yj[(i + 1) % num]);
            ctx.closePath();
            ctx.stroke();
//            ctx.fillRect(xj[i] - 5, yj[i] - 5, 10, 10);
            xj[i] += 4 * Math.cos(dir[i]);
            yj[i] += 4 * Math.sin(dir[i]);
            if (xj[i] < 0 || xj[i] > 1600 || yj[i] < 0 || yj[i] > 1200) {
                dir[i] = 6.28 * Math.random();
                while (xj[i] + 4 * Math.cos(dir[i]) < 0 || xj[i] + 4 * Math.cos(dir[i]) > 1600 || yj[i] + 4 * Math.sin(dir[i]) < 0 || yj[i] + 4 * Math.sin(dir[i]) > 1200) {
                    dir[i] = 6.28 * Math.random();
                }
//                dir[i] = (dir[i] + 3 * Math.random()) % 6.28;
            }
        }
    }

</script>
</html>