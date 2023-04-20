

<?php require_once  'upload.php';
    require_once 'function/config.php';
    $belgesor = $db->prepare("select * from dosya");
    $belgesor -> execute();
?>
<?php
 require_once 'modal.php';
 ?>
        <div id='menuFull'>
<?php
error_reporting(0);

$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\"username\":\"365\", \"password\":\"1\"}",
  CURLOPT_HTTPHEADER => [
    "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
    "Content-Type: application/json"
  ],
]);
echo "


            <div class='table'>
                <table    id='menu' class='table align-left table-nowrap mb-0' align='left' border = '2' >
                    <thead class='table-light'>
                    <tr >
                    <TR>

                    <TH COLSPAN=2>Information</TH>
                
            
                
                </TR>
                    <th class='column-title'>isim</th>
                    <th class='column-title'>token </th>
               
                    </tr>
                    </thead>
                    </div>
                
                   
                    

                  ";
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$json = json_decode($response,true);
foreach($json as $person){
    foreach($person as $key => $value){
        if (!is_numeric($key)) {
        echo "
      
        <tr>
        <td>$key</td>
        <td >$value</td>
       
        </tr>
        ";
    }

    }
}

?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Mina Ecer</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
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
</script>



</head>
<body>
<div class="sayac"> </div>
<div class='row'>


            <div  class='table'>
                <table align='middle'  class='table align-middle table-nowrap mb-0' border = '2' id="tb">
                    <thead class='table-light'>
                    <tr >
                    <TR>

                    <TH COLSPAN=2>Description</TH>
                
                   
                
                </TR>
                <th class='column-title'>no </th>
                    <th class='column-title'>islev </th>
                    <?php
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                      CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => "{\"username\":\"365\", \"password\":\"1\"}",
                      CURLOPT_HTTPHEADER => [
                        "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
                        "Content-Type: application/json"
                      ],
                    ]);
                    
                    $response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
$json = json_decode($response,true);
foreach($json as $person){
    foreach($person as $key => $value){

                    
                     if (is_numeric($key)) {
    echo "
    <tbody >
 
    <tr>
  
    <td>$key</td>
    <td>$value</td>
    </tr>
  
    ";
    }
    }
}
                    
                           ?>
                   
         </div>
        <script src="js/zemin.js">
        </script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript">
       jQuery.expr[':'].contains = function(a, i, m) {
    return jQuery(a).text().toUpperCase()
        .indexOf(m[3].toUpperCase()) >= 0;
};

$(document).ready(function () {
    $("#searchTags").keyup(function(){
        var value = $("#searchTags").val();
        if(value.length==0){
	
            $("#menuFull tr").show();

        }else{
            $("#menuFull tr").hide();
            $("#menuFull tr:contains("+value+")").show();

        }

    });

});
      </script>
</body>
</html>