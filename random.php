<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .mk {
            border: 1px solid black;
            color: gray;
        }

    </style>
</head>
<body>
<canvas id="main" class="mk" width="1200" height="900"></canvas>
<canvas id="main2" class="mk" width="1200" height="900"></canvas>
<canvas id="main3" class="mk" width="1200" height="900"></canvas>


<canvas id="main4" class="mk" width="1200" height="900"></canvas>


</body>
<script>
    var c = document.getElementById('main');
    var ctx = c.getContext('2d');
    var c2 = document.getElementById('main2');
    var ctx2 = c2.getContext('2d');
    var c3 = document.getElementById('main3');
    var ctx3 = c3.getContext('2d');
    var c4 = document.getElementById('main4');
    var ctx4 = c4.getContext('2d');
    ctx.fillStyle = 'black';
    ctx.fillRect(0, 0, c.width, c.height);
    ctx2.fillStyle = 'black';
    ctx2.fillRect(0, 0, c2.width, c2.height);
    ctx3.fillStyle = 'black';
    ctx3.fillRect(0, 0, c2.width, c2.height);
    ctx4.fillStyle = 'black';
    ctx4.fillRect(0, 0, c2.width, c2.height);
    var l = [];
    var dx = [];
    dx[0] = 0;
    var i;
    var j;
    var k;
    var img = new Image;
    img.onload = function () {
        ctx3.drawImage(img, 0, 0);
//        var data = ctx3.getImageData(0, 0, 1, 1).data;//读取整张图片的像素。
//        console.log(data, data.toString());

        var kuai = 6;
        var bei = 3;
        for (i = 0; i < 300 / kuai; i++) {
            for (j = 0; j < 300 / kuai; j++) {
                var data = ctx3.getImageData(i * kuai, j * kuai, 1, 1).data;//读取整张图片的像素。
                var lel = data.toString();
                var lels = lel.split(',');
//                console.log(lels[0]);
                ctx2.fillStyle = 'rgba(' + data.toString() + ')';
//                ctx2.fillStyle='rgba(255,0,255,12)';
                ctx2.fillRect(i * kuai * bei, j * kuai * bei, kuai * bei, kuai * bei);
//                for (k = 0; k < (lels[0]) / ; k++) {
//                    var x = Math.random();
//                    var y = Math.random();
//                    x*=kuai*bei;
//                    y*=kuai*bei;
//                    x+=i * kuai * bei;
//                    y+=j * kuai * bei;
                    ctx4.fillStyle = 'white';
                    var ri = kuai*bei*lels[0]/255;
                    ctx4.fillRect((i+0.5) * kuai * bei-ri/2, (j+0.5) * kuai * bei-ri/2, ri, ri);
//                }
            }
        }
    };
    img.src = 'xk.bmp';//src也可以是从文件选择控件中取得。
    ctx.fillStyle = 'white';
//    ctx.fillRect(50, 50, 10, 10);


    //    for (i = 0; i <= 1200; i++) {
    //        l[i] = Math.sin(2 * Math.PI * i / 1200);
    //        l[i] += 1;
    //        l[i] /= 2;
    //        l[i] *= 99;
    //        l[i] /= 100;
    //        l[i] += 0.01;
    ////        l[i]=l[i-1]+(Math.random()-0.5)/70;
    //        ctx.fillStyle = 'white';
    //        ctx.fillRect(i, 900 - l[i] * 900, 2, 2);
    //    }
    //
    //
    //    for (i = 0; i < 120; i++) {
    //
    //        for (j = 0; j < l[Math.floor(i * 10)] * 2000; j++) {
    //            var x = Math.random();
    //            x *= 10;
    //            x = 10 * i + x;
    //            var y = Math.random();
    //            y *= 900;
    //            ctx4.fillStyle = 'white';
    //            ctx4.fillRect(x, y, 1, 1);
    //        }
    //    }

</script>
</html>