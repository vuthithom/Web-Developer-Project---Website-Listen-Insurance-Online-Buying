        
        var status = 1;
        var title = "C1908G2 - V Triple T";
        var load = "<div class='centered' style='top:150%'><img src='img/load.gif' style='width:60px'></div>";
        var tick = "<div class='centered' style='top:130%'><img src='img/greentik.png' style='width:30px'></div>";
        setTimeout(() => {   
            document.getElementById('loading').style.width ="100%";
            document.getElementById('loading').innerHTML =  "<center>" + title + "<br>0%"
        }, 0);
        if (status == 1){
            document.getElementById('load-item').innerHTML = '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><link rel="stylesheet" href="loading/load.css">    <div id="load-gui" class="fixed-top" style="z-index:10000;width:100%;height:100%;opacity: 1;background-color: white;">        <div class="centered" style="top:33%">            <div id="loading">            </div>        </div>    </div>';
            var i = 1;
            setTimeout(() => {
                setTimeout(() => {   
                    document.getElementById('loading').innerHTML =  "<center>" + title + "<br>86%"
                }, 200);
                setTimeout(() => {   
                    document.getElementById('loading').innerHTML = "<center>" + title + "<br>99%"
                    setTimeout(() => { 
                        /* Ready */
                            document.getElementById('loading').innerHTML = "<center>" + title + "<br>100%"
                            setTimeout(() => {
                                document.getElementById('load-gui').style.opacity = '0';
                            }, 600);
                            setTimeout(() => {
                                document.getElementById('load-gui').style.display = 'none';
                            }, 1600);
                            /*  */
                    }, 300);
                }, 700);
            }, 500);
        }
        