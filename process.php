<?php


 include 'classes/mainContr.php';


if (isset($_POST['pre_infoBtn'])) {
  foreach ($_POST['check_list'] as $key) {
    $advertmode[] = $key;
  }
  //PRELIMINARY INFORMATION DETAILS
  echo $_POST['pre_infoBtn'];
  $firstChoice= $_POST['firstChoice'];
  $secondChoice= $_POST['secondChoice'];
  $dateOfCommencement= $_POST['dateOfCommencement'];
  $mod= $_POST['mod'];
  $pre_info = new mainContr();
  $pre_info->addPreInfo($firstChoice,$secondChoice,$dateOfCommencement,$mod,$advertmode);
}


//update PRELIMINARY INFORMATION
if (isset($_POST['updatePre_infoBtn'])) {
  foreach ($_POST['check_list'] as $key) {
    $advertmode[] = $key;
  }
  //PRELIMINARY INFORMATION DETAILS
  echo $_POST['pre_infoBtn'];
  $firstChoice= $_POST['firstChoice'];
  $secondChoice= $_POST['secondChoice'];
  $dateOfCommencement= $_POST['dateOfCommencement'];
  $mod= $_POST['mod'];
  $pre_info = new mainContr();
  $pre_info->updatePreInfo($firstChoice,$secondChoice,$dateOfCommencement,$mod,$advertmode);
}





//Persona Details
if (isset($_POST['personalDetailsBtn'])) {
  //PRELIMINARY INFORMATION DETAILS
  $sname= $_POST['sname'];
  $fname= $_POST['fname'];
  $otherNames= $_POST['otherNames'];
  $idNumber= $_POST['idNumber'];
  $nationality= $_POST['nationality'];
  $dateOfBirth= $_POST['dateOfBirth'];
  $postalAddress= $_POST['postalAddress'];
  $gender= $_POST['gender'];
  $physicalAddress= $_POST['physicalAddress'];
  $mobileNumber= $_POST['mobileNumber'];
  $email= $_POST['email'];
  $personalDetails = new mainContr();
  $personalDetails->addApplicantDetails($fname,$sname,$otherNames,$idNumber,$nationality,$dateOfBirth,$gender,$postalAddress, $physicalAddress,$mobileNumber,$email);
}


if (isset($_POST['nextOfKinFDetailsBtn'])) {
  //PRELIMINARY INFORMATION DETAILS
  $sname= $_POST['sname'];
  $fname= $_POST['fname'];

  $postalAddress= $_POST['postalAddress'];

  $mobileNumber= $_POST['mobileNumber'];
    $relationship= $_POST['relation'];
  $email= $_POST['email'];
  $personalDetails = new mainContr();
  $personalDetails->addNextOfDetails($fname,$sname, $postalAddress,$mobileNumber,$relationship,$email);
}








if (isset($_POST['schoolHistoryBtn'])) {
  //SCHOOL HISTORY
  $nameofSchool= $_POST['nameofSchool'];
  $dateFrom= $_POST['dateFrom'];
  $dateTo= $_POST['dateTo'];
  $qualification= $_POST['qualification'];
  $grade= $_POST['grade'];

  $personalDetails = new mainContr();
  $personalDetails->addSchoolHistoryDetails($nameofSchool,$dateFrom, $dateTo,$qualification,$grade);




  $dateofAttainment= $_POST['dateofAttainment'];
  $levelofQualifications= $_POST['levelofQualifications'];
  $institutionObtainedfrom= $_POST['institutionObtainedfrom'];
  $results= $_POST['results'];
  $personalDetails = new mainContr();
  $personalDetails->addHigherQualificationDetails($dateofAttainment,$levelofQualifications, $institutionObtainedfrom,$results);


  //SCHOOL HISTORY
  $positionHeld= $_POST['positionHeld'];
  $period= $_POST['period'];
  $nameOfOrganisation= $_POST['nameOfOrganisation'];
  $personalDetails = new mainContr();
  $personalDetails->addRplDetails($positionHeld,$period,$nameOfOrganisation);
}



if (isset($_POST['financialdetailsBtn'])) {  //PRELIMINARY INFORMATION DETAILS
  $sponserhip= $_POST['sponserhip'];
  $sponserhipDetails = new mainContr();
  $sponserhipDetails->addFinacialDetails($sponserhip);

}



if (isset($_POST['refreshSponsership'])) {  //PRELIMINARY INFORMATION DETAILS

  $sponserhipDetails = new mainContr();
  $sponserhipDetails->deleteSponsership();

}
