<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  </head>
  <body>
  
    <?php

    $sliderid="";
    $sliderheading="";
    $slidercontent="";
    $sliderimage="";
    require('../connection.php');
    if (isset($_GET['sliderid']) ){
        $sliderId= $_GET['sliderid'];
        $sql="SELECT *
        FROM slidertable
        WHERE sliderid = '$sliderId'";
      $res=mysqli_query($conn,$sql);
      while($answer=mysqli_fetch_array($res)){
        $sliderid=$answer['sliderid'];
        $sliderheading= $answer['sliderheading'];
        $sliderparagraph=$answer['sliderparagraph'];
        $sliderimage="sliderimages/".$answer['sliderimage'];
      }
}
?>
  <form action="updatesliderquery.php" method="POST" enctype="multipart/form-data">
  
  <div class="col-md-6">
  <div class="d-flex justify-content-center">
  <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px; border: 2px solid blue;">
      <img id="changeimg" src=<?=$sliderimage ?> alt='Image'  class="img-fluid rounded-circle" style="object-fit: cover; width: 100%; height: 100%;">  
   </div>
   </div>
   </div>
   <input type="file" name="imageFile" id="choosefile"  value="<?php echo $sliderimage ?>">
  <div class="mb-3">
    <input type="hidden" name="sliderid" class="form-control" id="title"  value="<?php echo $sliderid?>">
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title"  value="<?php echo $sliderheading?>">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <input type="text" name="paragraph" class="form-control" id="content"  value="<?php echo $sliderparagraph ?>">
  </div>

 
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Update
</button>
</form>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to Update?Once update it will not reverse.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitForm()">Confrim</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
  const inputElement = document.getElementById("choosefile");
  const imageElement = document.getElementById("changeimg");

  inputElement.addEventListener("change", function(event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
      imageElement.src = e.target.result;
    };

    reader.readAsDataURL(file);
  });
</script>
<script>
    function submitForm() {
      var form = document.querySelector("form");
      form.action = "updatesliderquery.php?sliderid=<?php echo $sliderid ?>&sliderheading=<?php echo $sliderheading ?>&sliderparagraph=<?php echo $sliderparagraph ?>";
      form.submit();
    }
  </script>
</body>
</html>

