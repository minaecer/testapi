<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<input type="text" autocomplete="off" name="searchTags" id="searchTags" placeholder="Search" />
        
      
  
        <button class="gri" onClick="zeminRenginiDegistir()">#5b5b5b</button>
        <button class="lila" onClick="zD()">#A5879E</button>
        <button class="pembe" onClick="zF()">#f4cccc</button>
        <button class="mavi" onClick="zG()">#9fc5e8</button>
        <button class="sari" onClick="zC()">#e7e89f</button>
        <button class="kirm" onClick="zB()">#f44336</button>
    
        <a href="javascript:void(0);" id="pencereLink">Modal</a> 
<div id="pencereKutu" class="pencere">
   <div class="pencere-content">
      <div class="pencere-head">
         <span class="kapat">x</span>
         <h2>Upload</h2>
      </div>
      <div class="pencere-main">
    
         <form action="" method="post" enctype="multipart/form-data">
  					<div class="form-group">
  						<label>Select File</label>
  						<input type="file" name="dosya" class="form-control-file" required />
         
              <button type="submit" class="btn" name="yukle">Upload</button>
            </div>
      </div>
      
   </div>
</div>
</div>
<?php
        if ($_FILES) {
        if($_FILES['dosya']['error']==0){
          if(isset($_POST["yukle"])){
          $dosya= new Upload($_FILES['dosya']);
          $geciciad=$_FILES['dosya']['name'];
                if($dosya->yukle("upload/")){
          $belgesor=$db->prepare('INSERT INTO dosya set dosya =:dosya');
          $belgesor->execute(array("dosya"=>$geciciad));
            echo '<div class="alert alert-success">Success!</div>';
          }
          else {
            echo '<div class="alert alert-danger">Failed!</div>';
          }
        }
      }
    }


        ?>