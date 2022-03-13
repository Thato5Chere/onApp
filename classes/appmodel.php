<?php

include 'classes/Dbh.php';
class appModel extends Dbh{

  public function setPreInfo($firstChoice,$secondChoice,$dateOfCommencement,$mod,$advertmode){
    $sql = 'INSERT INTO applications(firstChoice,secondChoice,sDate,modeOfStudy) VALUES (?,?,?,?)';
    $pdo = $this->connect();
    $stmt = $pdo->prepare($sql);
    try {
    $pdo->beginTransaction();
    $stmt->execute([$firstChoice,$secondChoice,$dateOfCommencement,$mod]);
    $appId = $pdo->lastInsertId();

    if($stmt){
      echo 'success';
         $pdo->commit();
         foreach ($advertmode as $key) {
           $sqls = "INSERT INTO selectedmodes(appId,addModeId) VALUES (?,?)";
           $pdo = $this->connect();
           $stmts = $this->connect()->prepare($sqls);
           $pdo->beginTransaction();
           $stmts->execute([$appId, $key]);
           $pdo->commit();
           header('Location:personalDetails.php');
         }

        }
      } catch (PDOException $e) {
   $pdo->commit();
  }
  }
  //update PRELIMINARY INFORMATION

  public function updatePreInfo($firstChoice,$secondChoice,$dateOfCommencement,$mod,$advertmode){
    $sql = 'UPDATE applications SET (firstChoice,secondChoice,sDate,modeOfStudy) VALUES (?,?,?,?)';
    $pdo = $this->connect();
    $stmt = $pdo->prepare($sql);
    try {
    $pdo->beginTransaction();
    $stmt->execute([$firstChoice,$secondChoice,$dateOfCommencement,$mod]);
    $appId = $pdo->lastInsertId();

    if($stmt){
      header('Location:personalDetails.php');
         $pdo->commit();
        }
      } catch (PDOException $e) {
   $pdo->commit();
  }
  }
//Applicant DETAILS
public function setApplicantDetails($fname,$sname,$otherNames,$idNumber,$nationality,$dateOfBirth,$gender,$postalAddress, $physicalAddress,$mobileNumber,$email){
  $sql = 'INSERT INTO applicantdetails (firstname,secondname,othernames,idNumber,nationality,dateOfBirth,gender,postalAddress,physicalAddress,mobileNumber,email) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
  $pdo = $this->connect();

  $stmt = $pdo->prepare($sql);
  try {
  $pdo->beginTransaction();
  $stmt->execute([$fname,$sname,$otherNames,$idNumber,$nationality,$dateOfBirth,$gender,$postalAddress, $physicalAddress,$mobileNumber,$email]);
  $appId = $pdo->lastInsertId();

  if($stmt){
    header('Location:nextofKin.php');
       $pdo->commit();


      }
    } catch (PDOException $e) {
 $pdo->commit();
}
}

public function setNextOfDetails($fname,$sname, $postalAddress,$mobileNumber,$relationship,$email){
  $appId =1;
  $sql = "UPDATE applicantdetails SET nextOfkinSname = ?, nextOfkinFname = ?, nextOfkinPostalAddress = ?, relationship = ?, nextOfEmail= ?, nextOfKinMobile= ?  WHERE  applicantDetailsId = ?";
  $pdo = $this->connect();
  $stmt = $pdo->prepare($sql);

//
  try {
  $pdo->beginTransaction();

  $stmt->execute([$fname,$sname,$postalAddress,$relationship,$email,$mobileNumber,$appId]);
  echo $fname.$sname. $postalAddress.$mobileNumber.$relationship.$email;
  if($stmt){


    header('Location:schoolHistory.php');
       $pdo->commit();
      }
    } catch (PDOException $e){
 $pdo->commit();
}
}

//shool History DETAILS
public function setSchoolHistoryDetails($nameofSchool,$dateFrom, $dateTo,$qualification,$grade){


  try {

    for ($i=0; $i < count($nameofSchool); $i++) {

  $sql = 'INSERT INTO schoolHistory (appId,nameofSchool,dateFrom,dateTo,qualification,grade) VALUES (?,?,?,?,?,?)';
  $pdo = $this->connect();
  $appId =1;
  $stmt = $pdo->prepare($sql);

$stmt->execute([$appId,$nameofSchool[$i],$dateFrom[$i], $dateTo[$i],$qualification[$i],$grade[$i]]);
$appId = $pdo->lastInsertId();

  }

  if($stmt){
  //  header('Location:personalDetails.php');



      }
    } catch (PDOException $e) {
 $pdo->commit();
}

}



public function setHigherQualificationDetails($dateofAttainment,$levelofQualifications, $institutionObtainedfrom,$results){
  try {
    for ($i=0; $i < count($dateofAttainment); $i++) {

  $sql = 'INSERT INTO higherlevelqualification (appId,dateofAttainment,levelofQualifications,institution,results) VALUES (?,?,?,?,?)';
  $pdo = $this->connect();
  $appId =1;
  $stmt = $pdo->prepare($sql);

$stmt->execute([$appId,$dateofAttainment[$i],$levelofQualifications[$i], $institutionObtainedfrom[$i],$results[$i]]);
$appId = $pdo->lastInsertId();
  }

  if($stmt){
  //  header('Location:personalDetails.php');
      }
    } catch (PDOException $e) {
  //echo $mesage = $e.getMessage();
}
}





public function setRpldetails($positionHeld,$period,$nameOfOrganisation){
  try {
    for ($i=0; $i < count($positionHeld); $i++) {

  $sql = 'INSERT INTO rpl(appId,positionHeld,period,nameOfOrganisation) VALUES (?,?,?,?)';
  $pdo = $this->connect();
  $appId =1;
  $stmt = $pdo->prepare($sql);

$stmt->execute([$appId,$positionHeld[$i],$period[$i],$nameOfOrganisation[$i]]);
$appId = $pdo->lastInsertId();
  }

  if($stmt){
 header('Location:financialInformation.php');
      }
    } catch (PDOException $e) {
  //echo $mesage = $e.getMessage();
}
}
//FINANCIAL Details

public function setFinacialDetails($sponserhip){
  $appId = 1;
foreach ($sponserhip as $sponser) {
  $sql = 'INSERT INTO financial(appId,description) VALUES (?,?)';
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$appId, $sponser]);

  if ($stmt) {
 header('Location:complete.php');
  }
}
}

public function deleteSponser(){
  $appId = 1;
  $sql ='DELETE FROM financial WHERE appId = ?';
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$appId]);
}

public function getAllIllnesses(){
  $sql = "SELECT * FROM Illnesses";
  $stmt = $this->connect()->query($sql);
  $stmt->execute();
  return $stmt;
  }
}


 ?>
