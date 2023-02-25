
        var count = document.querySelectorAll('#count');
        var count_le =  document.querySelectorAll('#count').length;
        var start;

        var i;

        for (i = 0; i< count_le;i++){
            var mang = [];
            var ii;
            for (ii = 1; ii< count[i].innerHTML; ii++){
                mang.push(ii);
                setTimeout(() => {
                   alert(mang[ii]);
                }, 100*ii,count,start,ii);
            }
        }