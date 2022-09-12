<?php
class Mode extends Database
{
   public function upload($postdata,$target_file)
   {
      $id=$postdata['id'];
      $fname=$postdata['fname'];
      $lname=$postdata['lname'];
      $email=$postdata['email'];
      $pnumber=$postdata['pnumber'];
      $street=$postdata['street'];
      $city=$postdata['city'];
      $state=$postdata['state'];
      $coutry=$postdata['country'];
      $Photo=$target_file;
      
      $this->query("INSERT INTO employeeinfo (id,fname,lname,email,pnumber,street,city,state,country,Photo)
      VALUES('$id','$fname','$lname','$email','$pnumber','$street','$city','$state','$coutry','$Photo')");
      $this->execute();
    
   }
   
   public function display()
   {
    
    $this->query("select * from employeeinfo");
    return $this->resultset();
   }

   
   
 public function del($id)
{
          $this->query("DELETE from employeeinfo WHERE id='$id'");
          return $this->execute();
          
         
       }

public function find()
   {
      $fname=$_POST['search'];
      $this->query("SELECT * FROM employeeinfo WHERE fname='$fname' ");
      return $this->resultSet();
   }

public function rewrite($id){
   $this->query("SELECT * FROM employeeinfo where id='$id' ");
   return $this->single();
}

public function rewriteSave($data,$target_file){
    $id=$data[0];
    $fname=$data[1];
    $lname=$data[2];
    $email=$data[3];
    $pnumber=$data[4];
    $street=$data[5];
    $city=$data[6];
    $state=$data[7];
    $coutry=$data[8];
    $Photo=$target_file;

    $this->query("UPDATE employeeinfo SET id='$id', fname='$fname',lname='$lname',email='$email',pnumber='$pnumber',street='$street',city='$city',country='$coutry',Photo='$Photo' WHERE id='$id'");
    $this->execute();
    
}
}
