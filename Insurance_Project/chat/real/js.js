
    function cash(a)
    {
        $.ajax({
            url:"chat/real/data.php?v="+a,
            method:"GET",
            success:function(data){
                $('#data').html(data);
            }
        })
        console.log('helo');
    }
    $( "#coins" ).click(function() {
        cash('coins');
      });

      $( "#loved" ).click(function() {
        cash('loved');
      });
    $( "#donate" ).click(function() {
        cash(3);
      });
      $( "#withdraw" ).click(function() {
        cash(4);
      });
      $( "#accounts" ).click(function() {
        cash(10);
      });
      $( "#history" ).click(function() {
        cash(1);
      });
      $( "#redeem" ).click(function() {
        cash(2);
      });
    /*  */
    

    