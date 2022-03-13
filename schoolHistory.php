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
  <script type="text/javascript" defer>
    ///    let menus1 = document.querySelector("#actionMenu");
    let open = false;

    function first() {
      if (open === false) {
        let elements= document.querySelectorAll('.fi');

        for (var i = 0; i < elements.length; i++) {
         elements[i].removeAttribute("disabled");
        }
        document.querySelector('.option2').style.display = 'flex';
        document.querySelector('.addNewField1').style.visibility = 'hidden';



        //open = true;
      } else {
        //  document.querySelector('.actionMenu').style.visibility = 'hidden';
        //  open = false;
      }
    }


    function second() {
      if (open === false) {

        let elements= document.querySelectorAll('.fi2');

        for (var i = 0; i < elements.length; i++) {
         elements[i].removeAttribute("disabled");
        }

        document.querySelector('.option3').style.display = 'flex';
        document.querySelector('.addNewField2').style.visibility = 'hidden';
        //open = true;
      } else {
        //  document.querySelector('.actionMenu').style.visibility = 'hidden';
        //  open = false;
      }
    }


    function removeLast() {
      if (open === false) {



                let elements= document.querySelectorAll('.fi2');

                for (var i = 0; i < elements.length; i++) {
                 elements[i].removeAttribute("disabled");
                }

        document.querySelector('.option3').style.display = 'none';
        document.querySelector('.addNewField2').style.visibility = 'visible';
        //  document.querySelector('.addNewField2').style.visibility = 'hidden';
        //open = true;
      } else {
        //  document.querySelector('.actionMenu').style.visibility = 'hidden';
        //  open = false;
      }
    }



    function firstField() {
      if (open === false) {

        let elements= document.querySelectorAll('.hq');

        for (var i = 0; i < elements.length; i++) {
         elements[i].removeAttribute("disabled");
        }


        document.querySelector('.field2').style.display = 'flex';
        document.querySelector('.fF').style.visibility = 'hidden';
        //open = true;
      } else {
        //  document.querySelector('.actionMenu').style.visibility = 'hidden';
        //  open = false;
      }
    }


    function secondField() {
      if (open === false) {

        let elements= document.querySelectorAll('.hq2');

        for (var i = 0; i < elements.length; i++) {
         elements[i].removeAttribute("disabled");
        }


        document.querySelector('.field3').style.display = 'flex';
        document.querySelector('.fF2').style.visibility = 'hidden';
        //open = true;
      } else {
        //  document.querySelector('.actionMenu').style.visibility = 'hidden';
        //  open = false;
      }
    }

    function removeLastField(){
      if (open === false) {

        document.querySelector('.field3').style.display = 'none';
        document.querySelector('.fF2').style.visibility = 'hidden';
        //open = true;
      } else {
        //  document.querySelector('.actionMenu').style.visibility = 'hidden';
        //  open = false;
      }
    }







        function rplFirstField(){
          if (open === false) {
            let elements= document.querySelectorAll('.rpl');

            for (var i = 0; i < elements.length; i++) {
             elements[i].removeAttribute("disabled");
            }

            document.querySelector('.rplFirstField').style.display = 'flex';
            document.querySelector('.fF').style.visibility = 'hidden';
            //open = true;
          } else {
            //  document.querySelector('.actionMenu').style.visibility = 'hidden';
            //  open = false;
          }
        }


        function rplSecondField() {
          if (open === false) {
            let elements= document.querySelectorAll('.rpl2');

            for (var i = 0; i < elements.length; i++) {
             elements[i].removeAttribute("disabled");
            }

            document.querySelector('.rplSecondField').style.display = 'flex';
            document.querySelector('.fF2').style.visibility = 'hidden';
            //open = true;
          } else {
            //  document.querySelector('.actionMenu').style.visibility = 'hidden';
            //  open = false;
          }
        }

        function rplRemoveLast(){
          if (open === false) {

            document.querySelector('.rplSecondField').style.display = 'none';
            document.querySelector('.fF2').style.visibility = 'hidden';
            //open = true;
          } else {
            //  document.querySelector('.actionMenu').style.visibility = 'hidden';
            //  open = false;
          }
        }

  </script>
</head>

<body>
  <!-- ======= start of header-navigation ======= -->
<?php include 'appHeader.php'; ?>
  <!-- =======end of main-navigation ======= -->
  <div id="all">
    <div class="  wrapper">
      <h5 class="appFormLead">ILES ONLINE APPLICATION</h5>
    <div class="application-header">

      <h5>SCHOOL HISTORY</h5>
      <p>Fill in the form below</p>
    </div>
        <div class="row">
<div class="col-md-8 application-form form-container">
        <form class="" action="process.php" method="post">
          <div class="row form-row">
            <div class="col-md-3">
              <label for="">Name Of School</label>
            </div>
            <div class="col-md-2">
              <label for="">From</label>
            </div>
            <div class="col-md-2">
              <label for="">To</label>
            </div>
            <div class="col-md-2">
              <label for="">Qualification
                PSLE,JC.BGCSE</label>
            </div>
            <div class="col-md-3">
              <label for="">Grade
                attained</label>
            </div>
          </div>

          <div class="row form-row">
            <div class="col-md-3">
              <input class="input-sm" name="nameofSchool[]" id="inputsm" type="text" required>
            </div>
            <div class="col-md-2">
              <input class="input-sm" name="dateFrom[]" id="inputsm" type="date" required>
            </div>
            <div class="col-sm-2 form-group">
              <input id="inputsm" name="dateTo[]" type="date">
            </div>
            <div class="col-md-2">
              <input class="input-sm[]" name="qualification[]" id="inputsm" type="text" required>
            </div>
            <div class="col-md-2">
              <input class=" input-sm" name="grade[]" id="inputsm" type="text" required>
            </div>

            <div class="col-md-1 addNewField1">
              <p class="addNewField" onclick="first()">+</p>
            </div>
          </div>



          <div class="row form-row option2">
            <div class="col-md-3">
              <input class="input-sm fi" name="nameofSchool[]" id="inputsm" type="text" disabled required>
            </div>
            <div class="col-md-2">
              <input class="input-sm fi" name="dateFrom[]" id="inputsm" type="date" disabled required>
            </div>
            <div class="col-sm-2 form-group">
              <input id="inputsm " class="fi" name="dateTo[]" type="date" disabled required>
            </div>
            <div class="col-md-2">
              <input class="input-sm fi" name="qualification[]" id="inputsm" type="text" disabled required>
            </div>
            <div class="col-md-2">
              <input class=" input-sm fi" name="grade[]" id="inputsm" type="text " disabled required>
            </div>

            <div class="col-md-1">
              <p class="addNewField2" onclick="second()">+</p>
            </div>
          </div>


          <div class="row form-row option3">
            <div class="col-md-3">
              <input class="input-sm fi2" name="nameofSchool[]" id="inputsm" type="text" disabled required>
            </div>
            <div class="col-md-2">
              <input class="input-sm fi2" name="dateFrom[]" id="inputsm" type="date" disabled required>
            </div>
            <div class="col-sm-2 form-group">
              <input id="inputsm" class="fi2" name="dateTo[]" type="date" disabled  required>
            </div>
            <div class="col-md-2">
              <input class="input-sm[] fi2" name="qualification[]" id="inputsm" type="text" disabled required>
            </div>
            <div class="col-md-2">
              <input class=" input-sm fi2" name="grade[]" id="inputsm" type="text" disabled required>
            </div>

            <div class="col-md-1">
              <p class="addNewField" onclick="removeLast()">-</p>
            </div>
          </div>





          <hr>
          <h5>HIGHER LEVEL QUALIFICATIONS</h5>

          <div class="row">
            <div class="col-md-3">
              <label for="">Date of Attainment</label>
            </div>
            <div class="col-md-3">
              <label for="">Level of Qualifications</label>
            </div>
            <div class="col-md-3">
              <label for="">Institution Obtained from</label>
            </div>
            <div class="col-md-3">
              <label for="">Results</label>
            </div>
          </div>

          <div class="row form-row">
            <div class="col-md-3">
              <input class="input-sm" name="dateofAttainment[]" id="inputsm" type="text">
            </div>

            <div class="col-sm-3 form-group">
              <input id="inputsm" name="levelofQualifications[]"type="text">
            </div>
            <div class="col-md-3">
              <input class="input-sm"  name="institutionObtainedfrom[]" id="inputsm" type="text">
            </div>

            <div class="col-md-2">
              <input class="input-sm" name="results[]" id="inputsm" type="text">
            </div>

            <div class="col-md-1">
              <p class="addNewField fF" onclick="firstField()">+</p>
            </div>

          </div>


          <div class="row form-row field2">
            <div class="col-md-3">
              <input class="input-sm hq"  name="dateofAttainment[]" id="inputsm" type="text" disabled>
            </div>

            <div class="col-sm-3 form-group">
              <input id="inputsm hq" class="hq" name="levelofQualifications[]"type="text" disabled>
            </div>
            <div class="col-md-3">
              <input class="input-sm hq"  name="institutionObtainedfrom[]" id="inputsm" type="text" disabled>
            </div>

            <div class="col-md-2">
              <input class="input-sm hq" name="results[]" id="inputsm" type="text" disabled>
            </div>

            <div class="col-md-1">
              <p class="addNewField fF2" onclick="secondField()">+</p>
            </div>

          </div>

          <div class="row form-row field3">
            <div class="col-md-3">
              <input class="input-sm hq2"  name="dateofAttainment[]" id="inputsm" type="text" disabled>
            </div>

            <div class="col-sm-3 form-group">
              <input id="inputsm hq2" class="hq2" name="levelofQualifications[]"type="text" disabled>
            </div>
            <div class="col-md-3">
              <input class="input-sm hq2"  name="institutionObtainedfrom[]" id="inputsm" type="text" disabled>
            </div>

            <div class="col-md-2">
              <input class="input-sm hq2" name="results[]" id="inputsm" type="text" disabled>
            </div>

            <div class="col-md-1">
              <p class="addNewField" onclick="removeLastField()">-</p>
            </div>

          </div>


          <hr>

          <h5>
            RECOGNITION OF PRIOR LEARNING
          </h5>
          <p><i>*Attach motivation letter in justification of RPL</i></p>

          <div class="row">
            <div class="col-md-4">
              <label for="">Position Held</label>
            </div>
            <div class="col-md-4">
              <label for="">Period</label>
            </div>
            <div class="col-md-4">
              <label for="">Name of Organisation</label>
            </div>
          </div>


          <div class="row form-row">
            <div class="col-md-4">
              <input class="input-sm" name="positionHeld[]" id="inputsm" type="text">
            </div>
            <div class="col-md-3">
              <input class="input-sm " name="period[]" id="inputsm" type="text">
            </div>
            <div class="col-sm-4 form-group">
              <input id="inputsm" class="" name="nameOfOrganisation[]" type="text">
            </div>
            <div class="col-md-1">
            <p class="addNewField fF2" onclick="rplFirstField()">+</p>
            </div>
          </div>

          <div class="row form-row rplFirstField">
            <div class="col-md-4">
              <input class="input-sm rpl" name="positionHeld[]" id="inputsm" type="text" disabled>
            </div>
            <div class="col-md-3">
              <input class="input-sm rpl" name="period[]" id="inputsm" type="text" disabled>
            </div>
            <div class="col-sm-4 form-group">
              <input id="inputsm rpl" class="rpl" name="nameOfOrganisation[]" type="text" disabled>
            </div>
            <div class="col-md-1">
            <p class="addNewField fF2" onclick="rplSecondField()">+</p>
            </div>
          </div>

          <div class="row form-row rplSecondField">
            <div class="col-md-4">
              <input class="input-sm rpl2" name="positionHeld[]" id="inputsm" type="text" disabled>
            </div>
            <div class="col-md-3">
              <input class="input-sm rpl2" name="period[]" id="inputsm" type="text" disabled>
            </div>
            <div class="col-sm-4 form-group">
              <input id="inputsm" class="rpl2" name="nameOfOrganisation[]" type="text" disabled>
            </div>
            <div class="col-md-1">
            <p class="addNewField fF2" onclick="rplRemoveLast()">-</p>
            </div>
          </div>
          <button type="submit" class="badge badge-primary" name="schoolHistoryBtn">submit</button>
        </form>
      </div>
      <div class="col-md-4">
        <h4>Form Guide</h4>
        <div class="">
          <p>On this section of the form click the plus sign on the right of each input to add another field </p>

          <p>Make sure to complete the form with correct information</p>
        </div>

      </div>

    </div>



    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>



    <script src="../assets/js/main.js"></script>
</body>

</html>
