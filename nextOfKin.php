<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/footer.css">




  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/header.css">

  <script type="text/javascript" async>
    function specifyDisability() {

      alert('We here');
      //  document.querySelector('.actionMenu').style.visibility = 'visible';
    }
  </script>
  <title>APPLICATIONS || ILES</title>
</head>

<body>


  <!-- ======= start of header-navigation ======= -->
<?php include 'appHeader.php'; ?>


  <!-- =======end of main-navigation ======= -->
  <div id="all">
    <div class="wrapper">
      <h4>ILES ONLINE APPLICATION</h4>
    <div class="application-header">

      <h5>DETAILS OF NEXT OF KIN</h5>
      <p>Fill in the form below</p>
    </div>
    <div class="row">


      <div class="col-md-8 application-form  form-container">
        <form action="process.php" method="post">
          <div class="form-group row">
            <label for="sname" class="col-sm-2 col-form-label">Surname</label>
            <div class="col-sm-10">
              <input type="text" id="sname" name="sname" placeholder="Second Name" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="fname" class="col-sm-2 col-form-label">First Names</label>
            <div class="col-sm-10">
              <input type="text"  id="fname" name="fname" placeholder="First Name" required>
            </div>
          </div>
          <hr>
          <div class="form-group row">
            <label for="postalAddress" class="col-sm-2 col-form-label">Postal Address</label>
            <div class="col-sm-10">
              <input type="text"  id="postalAddress" name="postalAddress" placeholder="" required>
            </div>
          </div>

          <div class="form-group row">
            <label for="physicalAddress" class="col-sm-2 col-form-label">Relationship to the Applicant</label>
            <div class="col-sm-10">
              <input type="text"  id="physicalAddress" name="relation" placeholder="Relationship to applicant" required>
            </div>
          </div>



          <div class="form-group row">
            <label for="dateOfBirth" class="col-sm-2 col-form-label">Mobile Number</label>
            <div class="col-sm-3">
              <input type="text" name="mobileNumber" id="mobileNumberinput">
            </div>

            <label for="emailnput" class="col-sm- col-form-label">Email</label>
            <div class="col-sm-3">
              <input type="email" name="email" id="emailnput">
            </div>
          </div>


                <button type="submit" class="badge badge-primary" name="nextOfKinFDetailsBtn">Save & Continue</button>

                <button type="sumt" class="badge badge-primary" name="editNextOfKinDetails">edit</button>
      </div>

<div class="col-md-4">

  <p>Provide details of next of Kin</p>

</div>
  </div>

</div>

      </form>
    </div>
  </div>





  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>



  <script src="../assets/js/main.js"></script>




</body>

</html>
