<?php
require 'navbar.php';
session_start();
if (isset($_SESSION['sliderdetails'])){
        echo $_SESSION['sliderdetails'];
        unset($_SESSION['sliderdetails']);
       
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Slider</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <style>
    .custom-top-spacing {
    margin-top: 70px!important; /* Adjust the value as needed */
    </style>
  }
  </head>
  <body>
  <div class="container mt-5 custom-top-spacing">
  <form action="sliderbackend.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <input type="text" name="paragraph" class="form-control" id="content">
  </div>
  <div id="file-input">
      <input type="file" name="imageFile" id="choosefile"  onchange="getImagePreview(event)">
      <div class="container">
  <div class="row">
    <div class="col d-flex justify-content-center align-items-center">
      <div id="preview" class="img-thumbnail rounded-circle"></div>
      </div>
  </div>
</div>
   </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<table id="slidertable" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Heading</th>
                <th>Paragraph</th>
                <th>View Images</th>
                <th>Edit Slider</th>
                <th>Delete Slider</th>
            </tr>
        </thead>
        <tbody>
           
            <?php
            require '../connection.php';
            include 'deleteslider.php';
  $sql="SELECT *
  FROM slidertable";
$res=mysqli_query($conn,$sql);
  while($answer=mysqli_fetch_array($res)){
    $imageLink= $answer['sliderimage'];
   echo "<tr>
  <td>".$answer['sliderid']."</td>
  <td>".$answer['sliderheading']."</td>
   <td>".$answer['sliderparagraph']."</td>
   <td><img src='".$imageLink."' alt='Image'  style='width: 100px; height: auto;'></td>
   <td><a href='editslider.php?sliderid=".$answer['sliderid']."'>Edit</a></td>
   <td>
   <form  id='deleteForm' action='deleteslider.php' method='post'>
   <input type='hidden' name='sliderid' value=".$answer['sliderid'].">
  <button type='button' class='btn btn-link deleteButton' data-bs-toggle='modal' data-bs-target='#deleteModal' data-sliderid=".$answer['sliderid'].">Delete</button>


  </form>
  </div>
  </td>
   </tr>";
  }
  ?>
    </table>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Slider</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" form="deleteForm" class="btn btn-danger">Yes</button>
        <!-- <a href="deleteslider.php?sliderid=<?php echo $sliderid; ?>"  form="deleteForm" class="btn btn-danger">Delete</a> -->
      </div>
    </div>
  </div>
</div>

    <script>
        $(document).ready(function () {
    $('#slidertable').DataTable();
});
</script>
<script>
   function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="300";
    imagediv.appendChild(newimg);
  }
  </script>


<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- DeleteModal -->
<script>
  $(document).on('click', '.deleteButton', function () {
    var sliderid = $(this).data('sliderid');
    $('#sliderIdValue').text(sliderid);
  });
</script>
  </body>
</html>