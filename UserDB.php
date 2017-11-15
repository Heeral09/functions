<?php
include('Database.php');
include('User.php');
class UserDB {

 public static function updateU($v) {
        $db = Database::getDB();
        $userid = $v->getUId();
        $userp = $v->getUPassword();
        
        $sqlquery = 'UPDATE accounts SET password= :userp WHERE id = :userid';
        $s = $db->prepare($sqlquery);
        $s->bindValue(':userid', $userid);
        $s->bindValue(':userp', $userp);
        $s->execute();
        $s->closeCursor();
 }
 
 public static function deleteU($userid) {
        $db = Database::getDB();
        $sqlquery = 'DELETE FROM accounts
                  WHERE id = :userId';
        $s = $db->prepare($sqlquery);
        $s->bindValue(':userId', $userid);
        $s->execute();
        $s->closeCursor();
    }
    

public static function getU(){
  
        $db = Database::getDB();
        echo "<table border = '1'>";
        echo "<tr><th>id</th>";
        echo "<th>email</th>";
        echo "<th>fname</th>";
        echo "<th>lname</th>";
        echo "<th>phone</th>";
        echo "<th>birthday</th>";
        echo "<th>gender</th>";
        echo "<th>password</th></tr>";

        $sqlquery = "select*from accounts";
        $s = $db->prepare($sqlquery);        
        $s->execute();
        $datas = $s->fetchAll();
        $s->closeCursor();
        foreach($datas as $data){
        $v = new User($data['id'],$data['email'],$data['fname'],$data['lname'],$data['phone'],$data['birthday'],$data['gender'],$data['password']);
        $v->setUId($data['id']);
        $v->setUEmail($data['email']);
        $v->setUFname($data['fname']);
        $v->setULname($data['lname']);
        $v->setUPhone($data['phone']);
        $v->setUBirthday($data['birthday']);
        $v->setUGender($data['gender']);
        $v->setUPassword($data['password']);
        $v->display();
        }
        echo "</table>";
 }
 public static function addU($t) {
        $db = Database::getDB();
        $userrid = $t->getUID();
        $usermail = $t->getUEmail();
        $userfname = $t->getUFname();
        $userlname = $t->getULname();
        $userphn = $t->getUPhone();
        $userbith = $t->getUBirthday();
        $usergen = $t->getUGender();
        $userp = $t->getUPassword();
        
        $sqlquery = 'INSERT INTO accounts (id, email, fname, lname, phone, birthday, gender, password) VALUES (:userid, :usermail, :userfname, :userlname, :userphn, :userbith, :usergen, :userp)';
        $s = $db->prepare($sqlquery);
        $s->bindValue(':userid', $userid);
        $s->bindValue(':usermail', $usermail);
        $s->bindValue(':userfname', $userfname);
        $s->bindValue(':userlname', $userlname);
        $s->bindValue(':userphn', $userphn);
        $s->bindValue(':userbith', $userbith);
        $s->bindValue(':usergen', $usergen);
        $s->bindValue(':userp', $userp);
        $s->execute();
        $s->closeCursor();
    }
}
$test = new UserDB();
$test->getU();

?>