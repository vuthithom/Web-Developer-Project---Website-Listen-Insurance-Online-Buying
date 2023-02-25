        var x = document.querySelectorAll(".lib-tb"); 
        var slidee = document.querySelectorAll("#tao-slide-moi");
        var slide_sec = document.querySelectorAll("#tao-slide-moi").length; 
        var slide = document.getElementById('tao-slide-moi').querySelectorAll(".vatpham"); 

        var num = document.querySelectorAll(".lib-tb").length;

        var item = document.getElementById('slide-content');
        var num_s = document.querySelectorAll(".vatpham").length;
        var temp = ''

        /*  */
        for (var i = 0; i < num; i ++){
            var b = x[i].getAttribute('cao');
            x[i].style.height = "" + b + "px"; 
        }
        /*  */
        for (iii = 0; iii < slide_sec; iii++){
        temp = '<section class="clients cid-rZBrD2HGBH slide-2-mg" data-interval="false" style="padding:0px" id="clients-' + slidee[iii].getAttribute('carousel-data') + '" style="background-color: transparent;">                    <div class="container">                        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel"' 
        temp += ' data-interval="' + slidee[iii].getAttribute('tocdo')  + '">                            <div class="carousel-inner" data-visible="' + slidee[iii].getAttribute('hienthi') + '">';
            for (ii = 0; ii < slidee[iii].querySelectorAll(".vatpham").length; ii ++){
                var xx = document.querySelectorAll(".vatpham"); 
                temp += '<div class="carousel-item">                                    <div class="media-container-row">                                        <div class="col-md-12">                                            <div class="wrap-img2 " style="padding-top:20px;padding-bottom:10px">                                                                                                <div style="margin-top:15px">                                                    <p style="font-size: 16px;color:black">                                                        '
                temp += xx[ii].innerHTML + '                                                    </p>                                                    </button>                                                </div>                                            </div>                                        </div>                                    </div>                                </div>';
                xx[ii].innerHTML = '';
            }
            temp += '</div>                            <div class="carousel-controls">                                ';
            temp += '<a class="carousel-control-prev" style="width:44px;height:44px;margin:auto" role="button" data-slide="prev">';
            temp += '                                    <span class="carousel-control-prev-iconn right-s" aria-hidden="true"></span>                                    <span class="sr-only">Previous</span>                                </a>                                ';
            temp += '<a class="carousel-control-next" style="width:44px;height:44px;margin:auto" role="button" data-slide="next">                                    <span class="carousel-control-next-iconn right-s" aria-hidden="true" style=""></span>                                    <span class="sr-only">Next</span>                                </a>                            </div>                        </div>                    </div>                </section>';
            slidee[iii].innerHTML = temp;
            
        }