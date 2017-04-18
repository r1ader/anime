var CTX;
function focus_On(ctx) {
    CTX = ctx;
}

function draw_Background(c, color) {
    console.log('asd');
    var ctx = c.getContext('2d');
    ctx.fillStyle = color;
    // CTX.fillRect(0,0,20,20);
    ctx.fillRect(0, 0, c.width, c.height);
}



function draw_Flash_Line(start_X, start_Y, end_X, end_Y, time, color,width) {
    var timer;
    var x = start_X;
    var y = start_Y;

    function a() {
        timer = window.requestAnimationFrame(a);
        test.innerText = x + ' ' + y;
        CTX.beginPath();
        CTX.moveTo(x, y);
        x += (end_X - start_X) / (time);
        y += (end_Y - start_Y) / (time);
        CTX.lineTo(x, y);
        // CTX.fillStyle='white';
        // CTX.fillRect(x,y,1,1);
        if (!color)
            CTX.strokeStyle = 'white';
        else
            CTX.strokeStyle = color;

        CTX.lineWidth = width;
        CTX.closePath();
        CTX.stroke();
        if (Math.abs(x - end_X) < 2 && Math.abs(y - end_Y) < 2) {
            window.cancelAnimationFrame(timer);
        }

    }
    a();
}

function draw_Flash_Rect(x1,y1,x2,y2,len) {
    var i=0;
    function a() {
        var timer=requestAnimationFrame(a);
        i+=10;
        CTX.fillStyle='white';
        var temp=-i*i/len+2*i;
        CTX.fillRect(x1,y1,x2+temp,y2);
        if(i==len)
            window.cancelAnimationFrame(timer);
    }
    a();
}

function draw_Flash_circle(x1,y1,r) {
    var i=0;
    var x=x1;
    var y=y1;
    y1-=r;
    function a() {
        console.log('yuan');
        var timer=requestAnimationFrame(a);
        x=x1+r*Math.sin(i);
        y=y1+r*Math.cos(i);
        CTX.beginPath();
        CTX.moveTo(x,y);
        i+=0.2;
        x=x1+r*Math.sin(i);
        y=y1+r*Math.cos(i);
        CTX.lineTo(x,y);
        CTX.closePath();
        CTX.strokeStyle='white';
        CTX.stroke();
        if(i>=6.28)
            window.cancelAnimationFrame(timer);
    }
    a();
}

function draw_Flash_yuan(x1,y1,r) {
    var i=0;
    var x=x1;
    var y=y1;
    y-=r;
    function a() {

        // console.log('yuan');
        var timer=requestAnimationFrame(a);
        i+=0.1;
        // x=x1-r*Math.sin(i);
        // y=y1+r*Math.cos(i);
        CTX.beginPath();
        CTX.arc(x,y,r,-i,i);
        CTX.fillStyle='white';

        CTX.closePath();
        CTX.fill();
        // CTX.stroke();
        if(i>=3.14)
            window.cancelAnimationFrame(timer);
    }
    a();
}


function ShowObjProperty(Obj) {
    var PropertyList = '';
    var PropertyCount = 0;
    for (i in Obj) {
        if (Obj.i != null)
            PropertyList = PropertyList + i + '属性：' + Obj.i + '\r\n';
        else
            PropertyList = PropertyList + i + '方法\r\n';
    }
    test.innerText = PropertyList;
}