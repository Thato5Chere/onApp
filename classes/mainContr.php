<?php

include 'appmodel.php';
class mainContr extends appModel{

public function addPreInfo($firstChoice,$secondChoice,$dateOfCommencement,$mod,$advertmode){
  $this->setPreInfo($firstChoice,$secondChoice,$dateOfCommencement,$mod,$advertmode);
}


public function addApplicantDetails($fname,$sname,$otherNames,$idNumber,$nationality,$dateOfBirth,$gender,$postalAddress, $physicalAddress,$mobileNumber,$email){

  echo $nationality;
  $this->setApplicantDetails($fname,$sname,$otherNames,$idNumber,$nationality,$dateOfBirth,$gender,$postalAddress, $physicalAddress,$mobileNumber,$email);
}



public function addNextOfDetails($fname,$sname, $postalAddress,$mobileNumber,$relationship,$email){
  $this->setNextOfDetails($fname,$sname, $postalAddress,$mobileNumber,$relationship,$email);
}




public function addSchoolHistoryDetails($nameofSchool,$dateFrom, $dateTo,$qualification,$grade){
  $this->setSchoolHistoryDetails($nameofSchool,$dateFrom, $dateTo,$qualification,$grade);
}
//addSchoolHistoryDetails($dateofAttainment,$levelofQualifications, $institutionObtainedfrom,$results)

public function addHigherQualificationDetails($dateofAttainment,$levelofQualifications, $institutionObtainedfrom,$results){
  $this->setHigherQualificationDetails($dateofAttainment,$levelofQualifications, $institutionObtainedfrom,$results);
}

public function addRplDetails($positionHeld,$period,$results){
$this-> setRpldetails($positionHeld,$period,$period);

}

public function addFinacialDetails($sponserhip){
$this-> setFinacialDetails($sponserhip);
}


public function updateFinacialDetails($sponserhip){
$this-> setRpldetails($sponserhip);
}


public function deleteSponsership(){
  $this-> deleteSponser();
}



}

 ?>
