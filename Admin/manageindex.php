<?php
/* include '../bootstrap.php'; */
require 'navbar.php';


?>
<?php
$footertitle = "";
$footerdesc = "";
$facility1 = "";
$facility2 = "";
$facility3 = "";
$mymail = "";
$mycontact = "";
$abouttitle = "";
$firstimagetitle = "";
$secondimagetitle = "";
$thirdimagetitle = "";
$firstimage = "";
$secondimage = "";
$thirdimage = "";
$contactparagraph = "";
$FontAwesome1="";
$FontAwesomeTitle1="";
$FontAwesomeDesc1="";
$FontAwesome2="";
$FontAwesomeTitle2="";
$FontAwesomeDesc2="";
$FontAwesome3="";
$FontAwesomeTitle3="";
$FontAwesomeDesc3="";
$FontAwesome4="";
$FontAwesomeTitle4="";
$FontAwesomeDesc4="";
require '../connection.php';
$sql = "SELECT *
FROM footercontact";
$res = mysqli_query($conn, $sql);
if ($res) {
	$row = mysqli_fetch_assoc($res);
	$footertitle = $row['FooterTitle'];
	$footerdesc = $row['FooterDesc'];
	$facility1 = $row['Facility1'];
	$facility2 = $row['Facility2'];
	$facility3 = $row['Facility3'];
	$mymail = $row['Email'];
	$mycontact = $row['Mobile'];
	$abouttitle = $row['AboutTitle'];
	$firstimagetitle = $row['FirstImgTitle'];
	$secondimagetitle = $row['SecondImgTitle'];
	$thirdimagetitle = $row['ThirdImgTitle'];
	$firstimage = "../picture/" . $row['FirstImage'];
	$secondimage = "../picture/" . $row['SecondImage'];
	$thirdimage = "../picture/" . $row['ThirdImage'];
	$contactparagraph = $row['ContactParagraph'];
	$FontAwesome1=$row['FontAwesomeIcon1'];
  $FontAwesome2=$row['FontAwesomeIcon2'];
  $FontAwesome3=$row['FontAwesomeIcon3'];
  $FontAwesome4=$row['FontAwesomeIcon4'];
  $FontAwesomeTitle1=$row['FontAwesomeIcon1Title'];
  $FontAwesomeTitle2=$row['FontAwesomeIcon2Title'];
  $FontAwesomeTitle3=$row['FontAwesomeIcon3Title'];
  $FontAwesomeTitle4=$row['FontAwesomeIcon4Title'];
    $FontAwesomeDesc1=$row['FontAwesomeIcon1Desc'];
    $FontAwesomeDesc2=$row['FontAwesomeIcon2Desc'];
    $FontAwesomeDesc3=$row['FontAwesomeIcon3Desc'];
    $FontAwesomeDesc4=$row['FontAwesomeIcon4Desc'];
}
?>
<br><br><br>
<!DOCTYPE html>
<html lang="en">

	<title>MyMed</title>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/body.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
	
	<style>
		body{
    background-image: linear-gradient(rgb(90, 224, 239), rgb(90, 224, 239));
}
		hr {
			border: 2px solid black;
			height: 2px;
			background-color: black;
			/* Change the color here */
		}
	</style>
</head>

<body>

	<div class="container">
		<h1 class="well" style="display:flex; justify-content:center;">Manage Your Front Page</h1>
		<div class="col-lg-12 well">
			<div class="row">
				<form id="footerform" action="backendindex.php" method="POST" enctype="multipart/form-data">
					<div class="col-sm-12">
						<hr>
						<div class="row">
							<div class="d-flex justify-content-center">
								<label class="text-center" style=" font-weight: bold;">Manage Footer</label>
							</div>
							<hr>
							<div class="col-sm-6 form-group">
								<label>Footer Title</label>
								<input type="text" name="footertitle" value="<?= $footertitle; ?>" class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								<label>Footer Description</label>
								<input type="text" name="footerdesc" value="<?= $footerdesc; ?>" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Project Facility(1st)</label>
								<input type="text" name="facility1" value="<?= $facility1; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Project Facility(2nd)</label>
								<input type="text" name="facility2" value="<?= $facility2; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Project Facility(3rd)</label>
								<input type="text" name="facility3" value="<?= $facility3; ?>" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Your email</label>
								<input type="text" name="mymail" value="<?= $mymail; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Mobile Number</label>
								<input type="text" name="mynumber" value="<?= $mycontact; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>About Us Title</label>
								<input type="text" name="abouttitle" value="<?= $abouttitle; ?>" class="form-control">
							</div>
						</div>
						<hr>
						<!-- Font Awesome Starts Here -->
						<div class="row">
							<div class="d-flex justify-content-center">
								<label class="text-center" style=" font-weight: bold;">Font Awesome Change <a href="https://fontawesome.com/icons/categories/medical-health?f=sharp&s=solid" target="_blank">(Go to this website) </a> and copy HTML Tag </label>
							</div>
							<hr>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 1st</label>
								<input type="text" name="font1" value='<?= $FontAwesome1; ?>' class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 1st (Title)</label>
								<input type="text" name="fonttitle1" value="<?= $FontAwesomeTitle1; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 1st (Desc)</label>
								<input type="text" name="fontdesc1" value="<?= $FontAwesomeDesc1; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 2nd</label>
								<input type="text" name="font2" value='<?= $FontAwesome2; ?>' class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 2nd (Title)</label>
								<input type="text" name="fonttitle2" value="<?= $FontAwesomeTitle2; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 2nd (Desc)</label>
								<input type="text" name="fontdesc2" value="<?= $FontAwesomeDesc2; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 3rd</label>
								<input type="text" name="font3" value='<?= $FontAwesome3; ?>' class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 1st (Title)</label>
								<input type="text" name="fonttitle3" value="<?= $FontAwesomeTitle3; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 1st (Desc)</label>
								<input type="text" name="fontdesc3" value="<?= $FontAwesomeDesc3; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 4th</label>
								<input type="text" name="font4" value='<?= $FontAwesome4; ?>' class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 4th (Title)</label>
								<input type="text" name="fonttitle4" value="<?= $FontAwesomeTitle4; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Font Awesome 4th (Desc)</label>
								<input type="text" name="fontdesc4" value="<?= $FontAwesomeDesc4; ?>" class="form-control">
							</div>

						</div>

						<hr>
						<!-- Font Awesome Ends Here -->
						<div class="row">
							<div class="d-flex justify-content-center">
								<label class="text-center" style=" font-weight: bold;">Manage About Us Page</label>
							</div>
							<hr>
							<div class="col-sm-4 form-group">
								<label>Image Title(1st)</label>
								<input type="text" name="imagetitle1" value="<?= $firstimagetitle; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Image Title(2nd)</label>
								<input type="text" name="imagetitle2" value="<?= $secondimagetitle; ?>" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Image Title(3rd)</label>
								<input type="text" name="imagetitle3" value="<?= $thirdimagetitle; ?>" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Choose Image(1st)</label>
								<input type="file" name="imagefirst" id="img1" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Choose Image(2nd)</label>
								<input type="file" name="imagesecond" id="img2" class="form-control">
							</div>
							<div class="col-sm-4 form-group">
								<label>Choose Image(3rd)</label>
								<input type="file" name="imagethird" id="img3" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4 form-group mt-4">
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
									<img id="profilePicture1" alt="Image1st" src="<?= $firstimage; ?>" class=""
										style="object-fit: contain;object-position: center; width: 100%; height: 100%;">
								</div>

							</div>
							<div class="col-sm-4 form-group mt-4">
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
									<img id="profilePicture2" alt="Image2nd" src="<?= $secondimage; ?>" class=""
										style="object-fit: contain;object-position: center; width: 100%; height: 100%;">
								</div>
							</div>
							<div class="col-sm-4 form-group mt-4">
								<div style="width: 150px; height: 150px; border: 2px solid blue;margin-left:4vw;">
									<img id="profilePicture3" alt="Image3rd" src="<?= $thirdimage; ?>" class=""
										style="object-fit: contain;object-position: center; width: 100%; height: 100%;">
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="d-flex justify-content-center">
								<label class="text-center" style=" font-weight: bold;">Manage Contact Us</label>
							</div>
							<hr>
							<div class="col-sm-12 form-group">
								<label>Write Brief about How,when and why your User should Contact You.</label>
								<input type="text" name="contactparagraph" value="<?= $contactparagraph; ?>" id="img1"
									class="form-control">
							</div>
						</div>
						<div class="d-flex justify-content-center  mt-4">
							<button type='button' class='btn btn-success footerDetails' data-bs-toggle='modal'
								data-bs-target='#footerModal'
								>Edit</button>
						</div>
				</form>
			</div>
		</div>
	</div>
	<br><br>

	<!-- Modal Start -->
	<div class="modal fade" id="footerModal" tabindex="-1" aria-labelledby="footerModalLabel"
		aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="footerModalLabel">Yes!Edit</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Are you sure you want to edit?Once edited information</p>
					<p>will be changed?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-danger" onclick="submitsForm()">Yes</button>

				</div>
			</div>
		</div>
	</div>
	<!-- Modal End -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
	<script>
		const inputElement = document.getElementById("img1");
		const imageElement = document.getElementById("profilePicture1");

		inputElement.addEventListener("change", function (event) {
			const file = event.target.files[0];
			const reader = new FileReader();

			reader.onload = function (e) {
				imageElement.src = e.target.result;
			};

			reader.readAsDataURL(file);
		});
	</script>
	<script>
		const inputElement2 = document.getElementById("img2");
		const imageElement2 = document.getElementById("profilePicture2");

		inputElement2.addEventListener("change", function (event) {
			const file2 = event.target.files[0];
			const reader2 = new FileReader();

			reader2.onload = function (e) {
				imageElement2.src = e.target.result;
			};

			reader2.readAsDataURL(file2);
		});
	</script>
	<script>
		const inputElement3 = document.getElementById("img3");
		const imageElement3 = document.getElementById("profilePicture3");

		inputElement3.addEventListener("change", function (event) {
			const file3 = event.target.files[0];
			const reader3 = new FileReader();

			reader3.onload = function (e) {
				imageElement3.src = e.target.result;
			};

			reader3.readAsDataURL(file3);
		});
	</script>
<script>
    function submitsForm() {
      document.getElementById("footerform").submit();
    }
  </script>
</body>

</html>