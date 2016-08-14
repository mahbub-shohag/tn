<?php
namespace App\Courses;
use PDO;

class Courses{
    public $id = "";
    public $unique_id = "";
    public $title = "";
    public $duration_m = "";
    public $duration_h = "";
    public $duration = "";
    public $description = "";
    public $course_type = "";
    public $course_fee = "";
    public $time = "";
    public $conn = "";


    public function __construct() {
        session_start();
        $this->conn = new PDO('mysql:dbname=lab;host=localhost', 'root', '');
    }

    public function prepare($data= ""){
        
        if(!empty($data['id'])){
            $this->id = $data['id'];
        }
        
        if(!empty($data['title'])){
            $this->title = $data['title'];
        }
        
        if(!empty($data['duration_m'])){
            $this->duration_m = $data['duration_m'];
        }
        
        if(!empty($data['duration_h'])){
            $this->duration_h = $data['duration_h'];
        }
        
        if(!empty($data['description'])){
            $this->description = $data['description'];
        }
        
        if(!empty($data['course_type'])){
            $this->course_type = $data['course_type'];
        }
        
        if(!empty($data['course_fee'])){
            $this->course_fee = $data['course_fee'];
        }
        
        
        
        return $this;
       // print_r($data);
    }
    
    public function store(){
         
       try{
            $ans = array( 'month'=>$this->duration_m,'hours'=>$this->duration_h);
            $this->duration = serialize($ans); 
           
            date_default_timezone_set("Asia/Dhaka"); 
            $this->time = date('Y-m-d H:i:s'); //Returns IST 
           
            $query = "INSERT INTO `lab`.`courses` (`unique_id`,`title`, `duration`, `description`, `course_type`, `course_fee`, `is_active`, `created`) 
                VALUES (:unique_id, :title, :duration, :description, :course_type, :course_fee, :is_active, :created)";
                $result = $this->conn->prepare($query);
                $result->execute(array(
                    "unique_id" => uniqid(),
                    "title" => $this->title,
                    "duration" => $this->duration,
                    "description" => $this->description,
                    "course_type" => $this->course_type,
                    "course_fee" => $this->course_fee,
                    "is_active" => '1',
                    "created" => $this->time,
                ));
                
                $_SESSION['Message'] = 'Data add Successfully';
                header('location: create.php');
                
            } catch (PDOException $e){
                echo"Error: " .$e->getMassage();
            }
    }
    
    public function index(){
        try{
            $query = "SELECT * FROM `courses` WHERE `is_active`='1'";
            $result = $this->conn->query($query) or die("Index query not ok");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                    $data[] = $row;
                }
            } catch (PDOException $e){
            echo"Error: " .$e->getMassage();
            }
            if(isset($data)){return $data;}
    }
    
  
   public function show(){
        try{
            $query = "SELECT * FROM `courses` WHERE `unique_id`='$this->id'";
            $result = $this->conn->query($query);
            $row = $result->fetch(PDO::FETCH_ASSOC);
            return $row; 
        }catch (PDOException $e){
            echo"Error: " .$e->getMassage();
        }
    }
    
   public function delete(){
        try{
            $query = "DELETE FROM `lab`.`courses` WHERE `courses`.`unique_id` = '$this->id'";
            $this->conn->query($query);
            $_SESSION['Message'] = "Data has been Delete";
            header('location:index.php');
        }catch (PDOException $e){
            echo"Error: " .$e->getMassage();
        }
    }
    
     public function update(){
       try  {

                $ans = array( 'month'=>$this->duration_m,'hours'=>$this->duration_h);
                $this->duration = serialize($ans); 

                date_default_timezone_set("Asia/Dhaka"); 
                $this->time = date('Y-m-d H:i:s'); //Returns IST 
                
               $query = "UPDATE `lab`.`courses` SET `title` = '$this->title', `duration` = '$this->duration', `description` = '$this->description', `course_type` = '$this->course_type', `course_fee` = '$this->course_fee', `updated` = '$this->time' WHERE `courses`.`unique_id` = '$this->id';";
               $result = $this->conn->query($query);
               $result->execute(array(':title'=>$this->title, ':duration'=>$this->duration, ':description'=>$this->description, ':course_type'=>$this->course_type, ':course_fee'=>$this->course_fee, ':updated'=>$this->time,));
               $_SESSION['Message'] = "Data has been Update";
               header('location:index.php'); 
            }
            catch(PDOException $e) {
              echo $e->getMessage();
            }
      }  
      
    public function tr(){
       try  {
                $ans = array( 'month'=>$this->duration_m,'hours'=>$this->duration_h);
                $this->duration = serialize($ans); 

                date_default_timezone_set("Asia/Dhaka"); 
                $this->time = date('Y-m-d H:i:s'); //Returns IST 
                
               $query = "UPDATE `lab`.`courses` SET `title` = '$this->title', `duration` = '$this->duration', `description` = '$this->description', `course_type` = '$this->course_type', `course_fee` = '$this->course_fee', `updated` = '$this->time' WHERE `courses`.`unique_id` = '$this->id';";
               $result = $this->conn->query($query);
               $result->execute(array(':title'=>$this->title, ':duration'=>$this->duration, ':description'=>$this->description, ':course_type'=>$this->course_type, ':course_fee'=>$this->course_fee, ':updated'=>$this->time,));
               $_SESSION['Message'] = "Data has been Update";
               header('location:index.php'); 
            }
            catch(PDOException $e) {
              echo $e->getMessage();
            }
      }  
  
    public function trashed(){
         date_default_timezone_set("Asia/Dhaka"); 
         $this->time = date('Y-m-d H:i:s'); //Returns IST 
        
        $query = "UPDATE `lab`.`courses` SET `is_active` = '0', `deleted` = '$this->time' WHERE `courses`.`unique_id` = '$this->id';";
        $this->conn->query($query);
        $_SESSION['Message'] = "Data has been Trashed";
        header('location:index.php');
    }

    public function trashed_show(){
         try{
            $query = "SELECT * FROM `courses` WHERE `is_active`='0' ORDER BY `deleted` DESC ";
            $result = $this->conn->query($query) or die("Index query not ok");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                    $data[] = $row;
                }
            } catch (PDOException $e){
            echo"Error: " .$e->getMassage();
            }
            return $data;
    }
   
    
    public function restore(){
        $query = "UPDATE `lab`.`courses` SET `is_active` = '1' WHERE `courses`.`unique_id` = '$this->id';";
        $this->conn->query($query);
        $_SESSION['Message'] = "Data has been Trashed";
        header('location:index.php');    
    }
    
    public function filterbypay($search)
    {
        try{
            $query = "SELECT * FROM `courses` WHERE `title`='$search'";
            $result = $this->conn->query($query) or die("Index query not ok");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
        } catch (PDOException $e){
            echo"Error: " .$e->getMassage();
        }
        return $data;
    }
    
 
}


?>
