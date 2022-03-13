<!DOCTYPE html>
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
  <title>APPLICATIONS || ILES</title>

</head>

<body>
  <!-- ======= start of header-navigation ======= -->
<?php include 'appHeader.php'; ?>
  <!-- =======end of main-navigation ======= -->
  <div id="all ">
<div class="wrapper">
  <h5 class="appFormLead">ILES ONLINE APPLICATION</h5>
<div class="application-header">
  <h5>PRELIMINARY INFORMATION</h5>
  <p>Fill in the form below</p>
</div>
    <div class="row">
<div class="col-md-8 application-form form-container">
        <form class="" action="process.php" method="post">
            <div class="form-row no-gutters">
              <div class="col-md-3">
                <label for="">Private Sponsorship</label>
              </div>
              <div class="col-md-3">
              <input type="checkbox" name="sponserhip[]" value="Private Sponsorship">
              </div>
              <div class="col-md-3">
                <label for="">Government sponsorship</label>
              </div>
              <div class="col-md-3">
              <input type="checkbox" name="sponserhip[]" value="Government sponsorship">
              </div>
            </div>
            <div class="form-row no-gutters">
              <div class="col-md-3">
                <label for="">Employer Sponsorship</label>
              </div>
              <div class="col-md-3">
              <input type="checkbox" name="sponserhip[]" value="Employer Sponsorship">
              </div>
              <div class="col-md-3">
                <label for="">Social & Community Development(S&CD)</label>
              </div>
              <div class="col-md-3">
              <input type="checkbox" name="sponserhip[]" value="Social & Community Development(S&CD)">
              </div>
            </div><p>DECLARATION</p>
            <div class="row">


<div class="col-md-1">
  <input type="checkbox" name="declaration" value="true" required>
</div>              <p>I hereby certify the foregoing information to be correct and complete.
            </p>
            </div>

          <button type="submit" class="badge badge-primary" name="financialdetailsBtn">submit</button>  <button type="submit" class="badge badge-primary" name="refreshSponsership">refresh</button>
        </form>


      </div>


      <div class="col-md-4 checkList" id="checkList">
        <h5>CHECK LIST</h5>
        <p><i>Please attach the following when you submit your application</i> </p>
        <div class="form-row">
          <div class="col-md-6">
            <label for="">Two passport size photos</label>
          </div>

          <div class="col-md-6">
          <input type="file" name="sponserhip" value="privateSponsership">
          </div>


      </div>

      <div class="form-row">
        <div class="col-md-6">
          <label for="">A copy of national ID/Passport </label>
        </div>

        <div class="col-md-6">
        <input type="file" name="sponserhip" value="privateSponsership">
        </div>


    </div>

    <div class="form-row">
      <div class="col-md-6">
        <label for="">Copy of sponsorship letter, if applicable</label>
      </div>

      <div class="col-md-6">
      <input type="file" name="sponserhip[]" value="privateSponsership">
      </div>


  </div>

  <div class="form-row">
    <div class="col-md-6">
      <label for="">Copies of Academic Results</label>
    </div>

    <div class="col-md-6">
    <input type="file" name="sponserhip[]" value="privateSponsership">
    </div>


</div>

<div class="form-row">
  <div class="col-md-6">
    <label for="">Motivational letter (for RPL students)</label>
  </div>

  <div class="col-md-6">
  <input type="file" name="sponserhip[]" value="privateSponsership">
  </div>


</div>

    </div>
      </div>
        </div>


    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>



    <script src="../assets/js/main.js"></script>
</body>

</html>
