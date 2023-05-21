<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>adddetails</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  </head>
  <body>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="image">
      <label for="inputCity" class="form-label">Upload Image</label>
    <form action="/action_page.php">
  <input type="file" id="myFile" name="filename">
</div>
  <br>
  <div class="bloodgroup">
      <label for="inputState" class="form-label">Blood Group</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>AB-</option>
      <option>AB+</option>
      <option>O+</option>
      <option>O-</option>
    </select>
    </div>
    <br>
    <div class="number">
    <label for="inputCity" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="inputCity"><br>
    </div>
    
</form>

     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>