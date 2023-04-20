jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
};

$(document).ready(function () {

    // keyup ile inputa herhangi bir değer girilince fonksiyonu tetikliyoruz
    $("#searchTags").keyup(function(){

        // inputa yazılan değeri alıyoruz
        var value = $("#searchTags").val();

        // eğer input içinde değer yoksa yani boşsa tüm menüyü çıkartıyoruz
        if(value.length==0){
		
            $("#menuFull tr").show();

		// arama yapılmışsa ilk olarak tüm menüyü gizliyoruz ve girilen değer ile eşleşen kısmı çıkarıyoruz
        }else{

            $("#menuFull tr").hide();
            $("#menuFull tr:contains("+value+")").show();

        }

    });

});