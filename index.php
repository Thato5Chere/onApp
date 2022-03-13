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

  <title>APPLICATIONS || ILES </title>
</head>
<body>
  <!-- ======= start of header-navigation ======= -->
<?php include 'appHeader.php'; ?>
  <!-- =======end of main-navigation ======= -->
  <div id="all">
    <div class="  wrapper">
      <h5 class="appFormLead">ILES ONLINE APPLICATION</h5>
    <div class="application-header">

      <h5>PRELIMINARY INFORMATION msds</h5>
      <p>Fill in the form below</p>
    </div>

      <div class="col-md-8 application-form form-container">
        <form action="process.php" method="POST">
          <div class="form-row  no-gutter">
            <div class="form-group col-md-3 ">
              <label for="">First Choice</label>
            </div>
            <div class="form-group col-md-9 ">
              <select name="firstChoice">
                <option value="3">--</option>
                <option value="3">Managing Stress in a work place</option>
              </select>
            </div>
          </div>

          <div class="form-row  no-gutter">
            <div class="form-group col-md-3 ">
              <label for="">Second Choice</label>
            </div>
            <div class="form-group col-md-9 ">
              <select  name="secondChoice" required>
                <option>--</option>
                <option value="1">Managing Stress in a work place</option>
                <option value="2">Managing Stress in a work place</option>
              </select>
            </div>
          </div>
          <hr>
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="dateOfCommencement">Month || Year</label>
              <input type="month" class="" id="dateOfCommencement" name="dateOfCommencement" required>
            </div>
          </div>
          <hr>
          <p>How did you know about us</p>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="shortcourse">Advertisement</label>
              <input type="checkbox" class="" name="check_list[]"  value="Advertisement">
            </div>
            <div class="form-group col-md-2">
              <label for="Walkins">Walk ins</label>
              <input type="checkbox" class="" name="check_list[]" id="Walkins" value="Walk ins">
            </div>

            <div class="form-group col-md-3">
              <label for="EducationFair">Education Fair</label>
              <input type="checkbox" name="check_list[]" class="" id="EducationFair" value="">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="shortcourse">Introduced by Friend</label>
              <input type="checkbox" class="" name="check_list[]" id="shortcourse" >
            </div>
            <div class="form-group col-md-4">
              <label for="RoadShow">Road Show</label>
              <input type="checkbox" class="" name="check_list[]" id="RoadShow">
            </div>

            <div class="form-group col-md-3">
              <label for="Other">Other</label>
              <input type="checkbox" class="" name="advert[]" id="Other">
            </div>
          </div>
          <hr>
          <p>Mode of Delivery</p>
          <div class="form-row">
            <div class="form-group col-md-3 row">
              <label for="mod">Full Time :</label>
              <input type="checkbox" class="" id="mod" name="mod" value="Full time">
            </div>
            <div class="form-group col-md-3 row">
              <label for="mod">Block Release :</label>
              <input type="checkbox" class="" name="mod" id="mod" value="Block Releaase">
            </div>
          </div>
          <br>
          <button type="submit" class="badge badge-primary" name="pre_infoBtn">Save & Continue</button>
      </div>
      </form>
    </div>
  </div>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
