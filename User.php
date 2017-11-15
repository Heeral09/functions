<?php
class User{

private $userid;
private $usermail;
private $userfname;
private $userlname;
private $userphn;
private $userbith;
private $usergen;
private $userp;

public function _construct($id,$em,$fn,$ln,$ph,$bh,$gn,$ps) {
  $this->userid = $id;
  $this->usermail = $em;
  $this->userfname = $fn;
  $this->userlname = $ln;
  $this->userphn = $ph;
  $this->userbith = $bh;
  $this->usergen = $gn;
  $this->userp = $ps;
} 
public function getUId(){
  return $this->userid;
  }
  
public function setUId($id){
    $this->userid = $id;
}

public function getUEmail(){
  return $this->usermail;
  }
  
public function setUEmail($em){
    $this->usermail = $em;
}

public function getUFname(){
  return $this->userfname;
  }
  
public function setUFname($fn){
    $this->userfname = $fn;
}

public function getULname(){
  return $this->userlname;
  }
  
public function setULname($ln){
    $this->userlname = $ln;
}

public function getUPhone(){
  return $this->userphn;
  }
  
public function setUPhone($ph){
    $this->userphn = $ph;
}

public function getUBirthday(){
  return $this->userbith;
  }
  
public function setUBirthday($bh){
    $this->userbith = $bh;
}

public function getUGender(){
  return $this->usergen;
  } 

public function setUGender($gn){
    $this->usergen = $gn;
}

public function getUPassword(){
  return $this->userp;
  } 

public function setUPassword($ps){
    $this->userp = $ps;
}

public function display(){

$a = self::getUId();
$b = self::getUEmail();
$c = self::getUFname();
$d = self::getULname();
$e = self::getUPhone();
$f = self::getUBirthday();
$g = self::getUGender();
$h = self::getUPassword();
echo "<tr><td>".$a."</td>";
echo "<td>".$b."</td>";
echo "<td>".$c."</td>";
echo "<td>".$d."</td>";
echo "<td>".$e."</td>";
echo "<td>".$f."</td>";
echo "<td>".$g."</td>";
echo "<td>".$h."</td></tr>";
  }
}
?>