<?php
  class Pages extends Controller {
    public function __construct(){
     
    }


    public function admin()
    {
      
      $this->view('pages/login');
    }
    public function log()
    {
      session_destroy();
      $this->view('pages/login');
    }
    public function insert()
    {
      $models=$this->model('Mode');
     $models->upload();
     
    }
    
    public function delete($id)
    {
      if(isset($_SESSION['admin']))                                                                                                  
      {
      $model1=$this->model('Mode');
      $model1->del($id);
      header('Location:http://localhost/mvc/pages/director');
      }
      else{
        $this->view('pages/login');
      }
     
    }
    
    public function display()
    {
        $target_dir="../public/img";
        $target_file=$target_dir.basename($_FILES["Photo"]["name"]);
        move_uploaded_file($_FILES["Photo"]["tmp_name"],$target_file);
        $models=$this->model('Mode');
        $postdata=$_POST;
        $models->upload($postdata,$target_file);
        header('Location:http://localhost/mvc/pages/director');
    
  }
   
    public function adminLogin()
    {
      error_reporting(E_ERROR | E_PARSE);
      
      if(isset($_POST)){
      $ad=$_POST['name'];
      $pas=$_POST['password'];
      if(admin==$ad && password==$pas)
      {
        $_SESSION['admin']='name';
        header('Location:http://localhost/mvc/pages/director');
        exit;

      }
      else
      {
        echo "Invalid username or password";
        // $data=[
        //   'title'=>$show
        // ];
        $this->view('pages/login',$data);
      }
      
    }
  }
  public function director(){
 if(isset($_SESSION['admin'])){
 
         $model=$this->model('Mode');
         $posts=$model->display();
         $data=[
         'post'=>$posts
          ];
          $this->view('pages/adminPage',$data);
  }
  else {
    header('Location:http://localhost/mvc/pages/admin');
    exit;
  }
}
    public function emp()
    {
      $model=$this->model('Mode');
      $posts=$model->display();
      $data=[
        'post'=>$posts
      ];
      
      $this->view('pages/adminPage',$data);
      
    }
    public function visibility()
    {
      if(isset($_SESSION['admin']))
      {
      $model=$this->model('Mode');
      $posts=$model->display();
      $data=[
        'post'=>$posts
      ];
    $this->view('pages/first',$data);
    }
    else{
      $this->view('pages/login');
    }

    }
    public function guest()
    {
      $model=$this->model('Mode');
      $posts=$model->display();
      $data=[
        'post'=>$posts
      ];
    $this->view('pages/first',$data);
    }
    
    
    public function edit()
    {
      if(isset($_SESSION['admin']))
      {
        $this->view('pages/data');
      }
      else{
        // $this->view('pages/login');
        header('Location:http://localhost/mvc/pages/log');
        exit;
      }
      
      
    }
    
    public function index(){
      $data = [
        'title' => 'TraversyMVC',
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }

    public function search()
    {
      error_reporting(E_ERROR | E_PARSE);
      if(isset($_SESSION['admin']))
      {
      $model=$this->model('Mode');
      $posts=$model->find();
      if($posts)
      {
      $data = [
        'posts' => $posts
      ];
      $this->view('pages/third', $data);
    }
    else
    {
      $data =[
        'error'=>"name not found"
      ];
      $this->view('pages/second', $data);
    }
    }
    else{
      $this->view('pages/login');
    } 

    }

    public function reword($id)
    {
      if(isset($_SESSION['admin']))
      {
        $models=$this->model('Mode');
        $model1=$models->rewrite($id);
        $this->view('pages/update',$model1);
      }
      else {
        $this->view('pages/login');
      }
    }

  public function  upgrade()
  {
    $target_dir="../public/img";
    $target_file=$target_dir.basename($_FILES["Photo"]["name"]);
    move_uploaded_file($_FILES["Photo"]["tmp_name"],$target_file);
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pnumber=$_POST['pnumber'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $coutry=$_POST['country'];
    $Photo=$target_file;
    $data=[$id,$fname,$lname,$email,$pnumber,$street,$city,$state,$coutry,$Photo];
    $model2=$this->model('Mode');
    $model3=$model2->rewriteSave($data,$target_file);
    header('Location:http://localhost/mvc/pages/director');
    
  }
}
