<!DOCTYPE html>

<?php include 'classes/appmodel.php'; ?>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/header.css">

  <script type="text/javascript" async>



  </script>
  <title>APPLICATIONS || ILES</title>
</head>

<body>


  <!-- ======= start of header-navigation ======= -->

<?php include 'appHeader.php'; ?>


  <div id="all">
    <div class=" wrapper">
        <h4>ILES ONLINE APPLICATION</h4>
      <div class="application-header">

        <h5>PERSONAL DETAILS</h5>
        <p>Fill in the form below</p>
      </div>

      <div class="col-md-8 application-form form-container">
        <form action="process.php" method="post">
          <div class="form-group row">
            <label for="sname" class="col-sm-2 col-form-label">Surname</label>
            <div class="col-sm-10">
              <input type="text" id="sname" name="sname" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="fname" class="col-sm-2 col-form-label">First Names</label>
            <div class="col-sm-10">
              <input type="text"  id="fname" name="fname" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="otherNames" class="col-sm-2 col-form-label">Other Names</label>
            <div class="col-sm-10">
              <input type="text"  id="otherNames" name="otherNames" placeholder="">
            </div>
          </div>

          <hr>

          <div class="form-group row">
            <label for="identity" class="col-sm-2 col-form-label">ID / Passport</label>
            <div class="col-sm-10">
              <input type="text"  id="identity" name="idNumber" placeholder="">
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
            <div class="col-sm-10">
              <input type="text" name="nationality" id="nationality" placeholder="">
            </div>
          </div>
          <div class="form-group row">
            <label for="dateOfBirth" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-3">
              <input type="date"   id="dateOfBirth" name="dateOfBirth" placeholder="">
            </div>
          </div>


          <div class="form-group row">
            <label for="dateOfBirth" class="col-sm-2 col-form-label">Male</label>
            <div class="col-sm-3">
              <input type="checkbox" name="gender" value="Male">
            </div>

            <label for="dateOfBirth" class="col-sm-2 col-form-label">Female</label>
            <div class="col-sm-3">
              <input type="checkbox" name="gender" value="Female">
            </div>
          </div>




          <div class="form-group row">
            <label for="postalAddress" class="col-sm-2 col-form-label">Postal Address</label>
            <div class="col-sm-10">
              <input type="text" id="postalAddress" name="postalAddress" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="physicalAddress" class="col-sm-2 col-form-label">Physical Address</label>
            <div class="col-sm-10">
              <input type="text"  id="physicalAddress"  name="physicalAddress" placeholder="">
            </div>
          </div>



                    <div class="form-group row">
                      <label for="dateOfBirth" class="col-sm-2 col-form-label">Mobile Number</label>
                      <div class="col-sm-3">
                        <input type="text" name="mobileNumber" id="mobileNumberinput">
                      </div>

                      <label for="emailnput" class="col-sm- col-form-label">Email</label>
                      <div class="col-sm-3">
                        <input type="email" name="email"  id="emailnput" >
                      </div>
                    </div>


                    <hr>
                    <p>Do you suffer from the following</p>


<?php $getAllIllnesses = new appModel();
$stmt =$getAllIllnesses->getAllIllnesses();


while($row = $stmt->fetch()){
?>

<div class="form-group row">
  <label for="Allergies" class="col-sm-2 col-form-label"><?php echo $row['illnessDescription'] ?>:</label>
  <label for="AllergiesInput" class="col-sm-2 col-form-label">Yes</label>
    <div class="col-sm-3">
    <input type="radio" name="illness"  id="AllergiesInput" value="yes" onmouseover="specifyDisability()">
  </div>

  <label for="disabilityCheckBox" class="col-sm-2 col-form-label">No</label>
  <div class="col-sm-3">
    <input type="radio" name="allergies" id="disabilityCheckBox" value="no">
  </div>
</div>
<hr>

  <?php } ?>


              <button type="submit"  class="badge badge-primary"name="personalDetailsBtn">Save & Continue</button>

              <button type="button"  class="badge badge-primary"name="button">edit</button>
      </div>
      </form>
    </div>
  </div>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>



  <script src="../assets/js/main.js"></script>




</body>

</html>
