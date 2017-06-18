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
            color: gray;
        }
    </style>
</head>
<body>
<canvas id="main" width="1200" height="900"></canvas>
</body>
<script>
    var c=document.getElementById('main');
    var ctx=c.getContext('2d');
    ctx.fillStyle='gray';
    ctx.fillRect(0,0,c.width,c.height);

    ctx.beginPath();
    ctx.arc(600,450,440,0,2*Math.PI);
    ctx.closePath();
    ctx.fillStyle='black';
    ctx.fill();

    var r = 128;
    var yuan = function (ax,ay,ar) {
        this.x=ax;
        this.y=ay;
        this.r=ar;
    };
    var ys = [];
    var yuan_num=0;
    while(r>=4)
    {
        for(var k=0;k<10000;k++)
        {
            var tempx=Math.floor(Math.random()*1200);
            var tempy=Math.floor(Math.random()*900);
//            console.log(tempx+' '+tempy);
            var flag=0;
            if(440-Math.sqrt((tempx-600)*(tempx-600)+(tempy-450)*(tempy-450))-r<=r/3)
                continue;
            for(var i=0;i<yuan_num;i++)
            {
                var dis = Math.ceil(Math.sqrt((ys[i].x-tempx)*(ys[i].x-tempx)+(ys[i].y-tempy)*(ys[i].y-tempy)));

//                console.log(dis);
                    if(dis<r/3+r+ys[i].r) {
//                    console.log(dis+' '+r);
                        flag++;
                        break;
                }
            }
            if(flag) continue;
            ctx.beginPath();
            ctx.arc(tempx,tempy,r,0,2*Math.PI);
            ctx.closePath();
            ctx.fillStyle='white';
            ctx.fill();
            console.log(r);
            ys[yuan_num]=new yuan(tempx,tempy,r);
            yuan_num++;

        }
        r-=2;
    }
</script>
</html>