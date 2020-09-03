$(document).ready(function(){


    var flag=false;
    var scroll;


    $(window).scroll(function(){
    scroll =$(window).scrollTop();

        if (scroll > 200) {
            if(!flag){
               
                flag=true;

                $('.navegador1').css({"background-color":"#2D2C31"})
            }
            }else{
                if(flag){
                    $('.navegador1').css({"background-color":"transparent"})
                    flag=false;
                
            }
          /*  https://www.youtube.com/watch?v=jtzb2FNyzZY*/
            
        
        }



    

})


})