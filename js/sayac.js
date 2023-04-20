$(function(){
    var saniye = 1;
    var sayacYeri = $("div.sayac span");
    $.sayimiBaslat = function(){
    if(saniye > 1){
    saniye--;
    sayacYeri.text(saniye);
    } else {
    $("div.sayac").load('index.php');
    }
    }
    sayacYeri.text(saniye);
    setInterval("$.sayimiBaslat()", 3600000);
    
    });