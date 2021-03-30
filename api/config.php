<? 
public class database {
    private $host = '';
    private $username = '';
    private $password = '';
    private $database = '';
    public $connection = '';

    public function __construct {
        if(!$this->connection){
            $this->connection = new mysqli($this->host,$this->username,$this->password,$this->database);
          }
      return $this->connection;

    }
    public function update($sql){
        $result = $this->connection->query($sql);
        if($result){
           echo "Success";
        }
        else{
           echo "Not successful";
        }
     }
     public function insert($sql){
        $result = $this->connection->query($sql);
        if($result){
           echo "Success";
        }
        else{
           echo "Not successful";
        }
     }
     public function delete($sql){
        $result = $this->connection->query($sql);
        if($result){
           echo "Success";
        }
        else{
           echo "Not successful";
        }
     }
     public function read_salon_bookings($sql){
        $result = $this->connection->query($sql);
        $salon = array();
        $i = 0;
        if($result){
            while($rows=$result->fetch_assoc()){
                $salon[$i]["booking_id"] = $rows["booking_id"];
                $salon[$i]["Location"] = $rows["Location"];
                $salon[$i]["Service"] = $rows["Service"];
                $salon[$i]["Specialist"] = $rows["Specialist"];
                $salon[$i]["date"] = $rows["date"];                
            }
           
        }
        else{
           echo "Not successful";
        }
     }
     public function read_services($sql){
        $result = $this->connection->query($sql);
        $salon = array();
        $i = 0;
        if($result){
            while($rows=$result->fetch_assoc()){
                $salon[$i]["services_id"] = $rows["services_id"];
                $salon[$i]["service_name"] = $rows["service_name"];
                $salon[$i]["service_type"] = $rows["service_type"];
                              
            }
           
        }
        else{
           echo "Not successful";
        }
     }
     public function read_specialist($sql){
        $result = $this->connection->query($sql);
        $salon = array();
        $i = 0;
        if($result){
            while($rows=$result->fetch_assoc()){
                $salon[$i]["specialist_id"] = $rows["specialist_id"];
                $salon[$i]["Specialist_name"] = $rows["Specialist_name"];
                $salon[$i]["Specialist_Service"] = $rows["Specialist_Service"];                             
            }
           
        }
        else{
           echo "Not successful";
        }
     }
     public function login_admin($sql){
      //$sql="SELECT * FROM myusers WHERE EMAIL='$email' AND PASSWORD='$pass'";
      session_start();
      $result=$this->connection->query($sql);
      $number = $result->num_rows;
      $rows = $result->fetch_assoc();
        if ($number == 1) {
          $_SESSION["id"] =$rows['student_id'];
          $_SESSION["email"] =$rows['email'];
          $_SESSION["login_name"] = $rows['login_name'];
          $_SESSION["picture"] = $rows['picture'];
          $this->user =  $rows['login_name'];
          $this->email =  $rows['email'];
          $this->picture = $rows['picture'];
      
          setcookie ("id", $_SESSION["id"],time()+ (10 * 365 * 24 * 60 * 60));
          setcookie ("login_name", $_SESSION["login_name"],time()+ (10 * 365 * 24 * 60 * 60));
          setcookie ("email", $_SESSION["email"], time() + (365*24*60*60*10));
          setcookie ("picture", $_SESSION["picture"], time() + (365*24*60*60*10));
         
          header("location:elearning.php");
        
      
  }else{
      header("location:student_login_error.php");
    
      
  } 
  }
  public function ifLoggedIn(){
   
   if(!isset($_COOKIE["login_name"])){
    header("location:student_login.php");
}
if(!isset($_COOKIE["id"])){
    header("location:student_login.php");
}

}
public function mail($email){
   // the message
   $sql = "SELECT * FROM students WHERE email = '".$email."'";
$students = $this->read_students($sql);
for($i=0;$i<sizeof($students);$i++){
   $msg =$students[$i]["email"];
}

// send email
mail($email,"CBiT Elearning Forgot Password",$msg);
}
public function security($var){
          
   trim($var);
   addslashes($var);
   stripslashes($var);
   htmlspecialchars($var);

   return $var;
}
}
?>