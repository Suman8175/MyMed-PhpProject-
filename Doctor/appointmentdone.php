
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body,
    html {
      height: 100%;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .confirmation-box {
      max-width: 600px;
      width: 100%;
    }
  </style>
  <title>Appointment Confirmation</title>
</head>

<body>
  <div class="container">
    <div class="card mt-5 confirmation-box">
      <div class="card-header bg-primary text-white">
        <h4><i class="fas fa-calendar-check"></i> Appointment Checking Finished</h4>
      </div>
      <div class="card-body">
        <p>Respected Doctor</p>
        <p>Your have just finished a appointment.</p>
        <p>Feel free to relax until next appointment time arrives</p>
        <p>Thank you for choosing our services. We look forward to seeing you!</p>
        <p>Best regards,</p>
        <p>MyMed</p>
      </div>
      <div class="card-footer bg-light">
        <small class="text-muted">You just finished a Appointment.</small>
      </div>
      <div class="card-footer bg-light d-flex justify-content-end">
        <button type="button" class="btn btn-success">
          <i class="fas fa-print"></i><a href="showupcomingpatient.php" style="text-decoration: none;color: white;">View Other Appointment</a>
        </button>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>

</html>
