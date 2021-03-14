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
}
?>